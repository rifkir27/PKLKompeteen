<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->syncRoles($request->roles);
        return back()->with('toast_success', 'User Role Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('toast_success', 'User Deleted');
    }

    public function profile(Request $request)
    {
        $user = $request->user();

        return view('admin.user.profile', compact('user'));
    }

    public function profileUpdate(Request $request, User $user)
    {
        $user->update($request->all());

        if($request->file('avatar')){
            Storage::disk('local')->delete('public/avatar/'.basename($user->avatar));
            $avatar = $request->file('avatar');
            $avatar->storeAs('public/avatar/', $avatar->hashName());
            $user->update([
                'avatar' => $avatar->hashName(),
            ]);
        }

        return back()->with('toast_succes', 'Profile Updated');
    }

    public function updatePassword(Request $request, User $user)
    {
        $request->validate([
            'password' => 'confirmed|required|min:6',
        ]);

        if(!(Hash::check($request->get('current_password'), $user->password))){
            return back()->with('toast_error', 'Your Old Password Wrong');
        }else{
            $user->update([
                'password' => Hash::make($request->get('password')),
            ]);
        }

        return back()->with('toast_success', 'Password Changed');
    }

    public function datatable()
    {
        $users = User::with('roles')->orderBy('created_at', 'DESC');
        
        return DataTables::of($users)
            ->addIndexColumn()
            ->addColumn('role', function($data) {
                return $data->roles->pluck('name')->first();
            })
            ->addColumn('action', function($data){
                // <a href="'.route('admin.users.edit', $data->id).'" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> </a>
                return '<button onclick="deleteConfirm(\''.$data->id.'\')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        <form method="POST" action="'.route('admin.users.destroy', $data->id).'" style="display:inline-block;" id="submit_'.$data->id.'">
                            '.method_field('delete').csrf_field().'
                        </form>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
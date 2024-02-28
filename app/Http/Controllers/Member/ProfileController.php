<?php

namespace App\Http\Controllers\Member;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // tampung data user yang sedang login kedalam variabel $user.
        $user = $request->user();

        // passing varibel $user kedalam view.
        return view('member.profile.index', compact('user'));
    }

    public function updateProfile(Request $request, User $user)
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
        }else {
            $user->update([
                'password' => Hash::make($request->get('password')),
            ]);
        }

        return back()->with('toast_success', 'Password Changed');
    }
}


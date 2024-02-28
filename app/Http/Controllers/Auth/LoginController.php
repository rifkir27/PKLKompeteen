<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite; 
use App\Notifications\NewMember;
use App\Models\User;
use Carbon\Carbon;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }
    
    public function handleProviderCallback(\Request $request)
    {
        try {
            $user_google = Socialite::driver('google')->user();
            $user = User::where('email', $user_google->getEmail())->first();

            if($user != null){
                \auth()->login($user, true);
                return redirect()->route('home');
            }else{
                $role = Role::where('name', 'member')->first();

                $user = User::Create([
                    'name' => $user_google->getName(),
                    'username' => $user_google->getName().'-'. Str::random(6),
                    'email'=> $user_google->getEmail(),
                    'password' => bcrypt($user_google->getEmail()),
                    'email_verified_at' => Carbon::now()
                ]);
        
                $user->assignRole($role);

                $admin = User::role('admin')->get();

                Notification::send($admin, new NewMember($user));

                \auth()->login($user, true);
                return redirect()->route('home');
            }

        } catch (\Exception $e) {
            return redirect()->route('login');
        }
    }
}
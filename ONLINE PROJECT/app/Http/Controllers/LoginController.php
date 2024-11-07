<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    public function Login()
    {     
    return view('welcome');    
    }
    
    public function Register()
    {
        return view('register');
    }


    public function LoginSystem()
    {
        $email = request('email');
        $password = request('password');  // Don't hash the password here
       
        // First get the user
        $user = Users::where([
            ['email', '=', $email],
            ['password', '=', Hash::make($password)]
        ])->get();

        // Check if user exists
            if ($user) {
                $provider = $user->providers;
    
                if ($provider == 'Musteri') {
                    Log::info('Müşteri Giriş Yaptı');
                    return view('welcome', with('providers',$providers));
                }
             else {
                Log::info('Giriş Yapılamadı');
                return view('login');
            }
        }
    }

    public function OnlineSystem(){
        return view('welcome');
    }


    public function BeRegister(Request $request)
    {
        $maxId = Users::max('id');
        $new_user = new Users([
            'id' => $maxId+1,
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'providers' => request('provider'),
        ]);
        
        $new_user->save();
        
        return redirect('/OnlineSystem')->with('success', 'Kayıt başarılı!');
    }

    public function Exit(){
        Session::flush();
        return redirect('/OnlineSystem');
    }

}

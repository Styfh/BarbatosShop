<?php


namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //

    public function getRegisterPage(){
        return view('register');
    }

    public function actionregister(Request $request)
    {
        $validated = $request->validate([
            'user_name' => 'required|min:5',
            'user_email' => 'required|email|unique:users,user_email',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|min:8|same:password',
            'user_gender' => 'required',
            'user_dob' => 'required|date|before:today|after_or_equal:01-01-1900',
            'user_country' => 'required'
        ]);

        $user = User::create([
            'user_name' => $request->user_name,
            'user_email' => $request->user_email,
            'password' => bcrypt($request->password),
            'user_gender' => $request->user_gender,
            'user_dob' => $request->user_dob,
            'user_country' => $request->user_country
        ]);


        return redirect('login');
    }

    public function getLoginPage(){
        return view('login');
    }

    public function login(Request $request){
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $credentials = [
            'user_email' => $request->email,
            'password' => $request->password,
        ];

        $remember = $request->remember;

        if($remember){
            if(Auth::attempt($credentials, true)){
                Cookie::queue('emailcookie', $request->email, 120);

                return redirect('/');
            }
        }

        else {
            if(Auth::attempt($credentials, false)){
                return redirect('/');
            }
        }

        return 'Login Failed';
    }
}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    use Authenticatable;

    public  function  index()
    {
        return view('login');

    }

    public function login(Request $request)
    {
//        dd($request->all());
        try {
            $request->validate([
                'email'=>['required'],
                'password'=>['required'],
            ]);
            //user check
            $user =User::where('email',$request->email)->first();
            if(!$user){
                return  redirect()->back()->with('error_message','user not found');
            }
//            dd($user);


            if(!Hash::check($request->get('password'),$user->password)){
                return  redirect()->back()->with('error_message','please check password');
            }

            if($user){
                Auth::login($user);
                Auth::loginUsingId($user->id);
            }
            return view('backend.index');

        }catch (\Exception $exception){
            dd($exception);
        }
    }

    public function  logout()

    {
//        if(!$id){
//            return  redirect()->back()->with('error_message','something went wrong!');
//        }
        try{

            Auth::logout();
//            dd(Auth::check());

        }catch (\Exception $exception){
            dd($exception);
        }

    }
}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use PHPUnit\Exception;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function register(Request  $request)
    {
//        dd($request->all());
        try{
            $request->validate([
                'email'=>['required'],
                'password'=>['required'],
                'name'=>['required']
            ]);
            $data =[
                'name' =>$request->name ??'',
                'email' =>$request->get('email') ??'',
                'password' =>bcrypt($request->get('password')) ??'',
            ];

            User::create($data);
            return redirect()->back();

        }catch (Exception $exception){
            dd($exception);

        }


    }
}

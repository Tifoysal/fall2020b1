<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function registration(Request $request)
    {

       $request->validate([
          'name'=>'required',
          'email'=>'required|email|unique:users',
           'password'=>'required'
       ]);
        $file_name='';

//        step1- check has file
            if($request->hasFile('image'))
            {
                $image=$request->file('image');
               //step2- generate unique name
                $file_name=date('Ymdhms').'.'.$image->getClientOriginalExtension();
               //step 3- store file with name
                $image->storeAs('users',$file_name);

            }

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'image'=>$file_name
        ]);

        return redirect()->back()->with('message','User Registration Successful.');

    }

    public function login(Request $request)
    {
       $request->validate([
           'email'=>'required|email',
           'password'=>'required'
       ]);

        $login_info=$request->except(['_token']);

//        dd(Auth::attempt($login_info));

        if (Auth::attempt($login_info)) {
//            $request->session()->regenerate();
            return redirect()->intended('/');
        }else
        {
            return redirect()->back()->withErrors('Invalid Credentials');
        }

    }

}

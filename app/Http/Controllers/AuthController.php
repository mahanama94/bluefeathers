<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 7/30/16
 * Time: 8:34 AM
 */

namespace BlueFeathers\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use BlueFeathers\Models\User;

class AuthController extends Controller{

    public function getSignup(){
        return view('auth.signup');
    }

    public function postSignup(Request $request){

        $this->validate($request, [
            "email" => 'required|unique:user|email|max:255',
            "name" =>'required',
            "password" => 'required|min:6|confirmed'
        ]);

        $user = User::create([
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'password' => bcrypt($request->input('password'))
        ]);

        return redirect()->route('auth.login')
            ->with('info', 'Account has been created for '.$user->getName());

    }

    public function getLogin(){
        return view('auth.login');
    }

    public function postLogin(Request  $request){

        $this->validate($request, [
            'email' => 'required|exists:user',
            'password' => 'required'
        ]);
        if(!Auth::attempt($request->only(['email', 'password']), $request->has('remember'))){
            return redirect()->back()->with('danger', 'Check your User name and password');
        }
        return redirect()->route('home')->with('success', 'Your have successfully logged in');
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('auth.login')->with('warning', 'You have logged out');
    }
}
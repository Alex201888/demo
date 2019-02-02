<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Model\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['getLogin', 'getRegister','postLogin','postRegister']);
    }

    public function getLogin()
    {
    	return View('account.login');
    }

    /**
     * @param  Request
     * @return [type]
     */
    public function postLogin(Request $request)
    {
        $data = $request->all();
        $user = User::find($data['email']);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Success
            //return redirect()->intended('dashboard');
            return  redirect()->intended('home');
        }
        //Login Failed
        return redirect()->intended('home');
    }
    /**
     * Logout
     * @return [type]
     */
    public function getLogout()
    {
        // if (!Auth::check()) {
            // if user already login
            // return recirect()->back();
        // }
        Auth::logout();
        // return login page
        return View('home');
    }
    /**
     * @return [type]
     */
    public function getRegister()
    {
        // if (!Auth::check()) {
            // if user already login
            // return recirect()->back();
        // }
        // return login page
        return View('account.register');
    }
    /**
     * @return [type]
     */
    public function postRegister( Request $request)
    {
        // if (!Auth::check()) {
            // if user already login
            // return recirect()->back();
        // }
        // return login page
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return View('account.login');
    }
}

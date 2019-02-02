<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class AccountController extends Controller
{
    
    public function __construct()
    {

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
        dd($data);
        return 'hello';
    }
}

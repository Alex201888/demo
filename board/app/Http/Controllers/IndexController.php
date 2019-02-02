<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use \Model\User;

class IndexController extends Controller
{
    public function __construct()
    {

    }

    public function getIndex()
    {
    	$result = User::all();
    	dd($result);
    	$list = array('rocky', 'drew', 'alex', 'charlton');

		$r = array(
			'result' => 'This is Rocky',
			'code' => 0,
			'data' => $list,
			'login' => 1
		);

		return View('index', $r);
    }
}

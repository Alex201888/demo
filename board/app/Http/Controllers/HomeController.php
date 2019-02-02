<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Activities;

class HomeController extends Controller
{
	public function __construct()
	{

	}

	public function getHome()
	{
		
		$activities = Activities::getActiviteiesAll(); 

    	//$activities = array('rocky', 'drew', 'alex', 'charlton');
		$activities = 
		$data = array(
			'result' => 'This is Alex',
			'code' => 0,
			'activities' => $activities,
			'login' => 1
		);
		return View('home', $data);
	}
	/**
	 * Redirect to detailed page 
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function getDetail($id)
	{
		$activity = Activities::getActiviteiesByActivityId($id); 

		$data = array(
			'result' => 'This is Alex',
			'code' => 0,
			'activity' => $activity,
			'login' => 1
		);
		return View('detail', $data);
	}
}

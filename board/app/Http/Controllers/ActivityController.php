<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Model\Activities;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
/**
     * @param  Request
     * @return [type]
     */
    public function getAllActivities()
    {
        $user_id= Auth::user()->id;
        $activities=Activities::getActiviteiesByUserId( $user_id);
        $data = array(
			'user_id' => $user_id,
			'code' => 0,
			'activities' => $activities,
			'login' => 1
		);
        return View('activity.activityList', $data);
    }
    /**
     * @param  Request
     * @return [type]
     */
    public function postAddActivity(Request $request)
    {
         $data=array(
            'user_id' => Auth::user()->id,
            'activity'=>$request
        );
        Activities::addActivity($data);//add speicific activity
         return redirect('myActivity/getAll');
    }
    
    /**
     * @param  Request
     * @return [type]
     */
    public function getAddNewActivity()
    { 	
    	
        //For draft in the future
        //code = 0 means nothing to show
       	$activity=array(
			'user_id' => Auth::user()->id,
			'code' => 0,
			'location' => '',
			'start_time' => '',
			'end_time' => '',
			'title' => '',
			'description' => '',
			'login' => 1
		);
        return View('activity.activityDetail',$activity);
    }
    /**
     * @param  Request
     * @return [type]
     */
    public function deleteActivity($id)
    {
        Activities::deleteActivity($id);//delete speicific activity
        return redirect('myActivity/getAll');
    }
    /**
     * @param  Request
     * @return [type]
     */
    public function getUpdateActivity($id)
    {
    	$user_id= Auth::user()->id;
        $activities=Activities::getActiviteiesByActivityId( $id);
        $activity=$activities[0];
    	//Get the details of activity first
       	$data=array(
            'id' => $id,
			'user_id' => $user_id,
			'code' => 1,
			'location' => $activity->location,
			'start_time' => $activity->start_time,
			'end_time' => $activity->end_time,
			'title' => $activity->title,
			'description' => $activity->description,
			'login' => 1
		);
        return View('activity.activityDetail',$data);
    }
    /**
     * @param  Request
     * @return [type]
     */
    public function postUpdateActivity(Request $request)
    {   
        $user_id= Auth::user()->id;
        $data=array(
            'user_id' => $user_id,
            'activity'=>$request
        );
        Activities::updateActivity($data);//update speicific activity
        return redirect('myActivity/getAll');
    }
}

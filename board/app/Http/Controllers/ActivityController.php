<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Model\Activities;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
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
     * [postUploadFile description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function postUploadFile(Request $request)
    {

        $file=Input::file('Filedata');
        if($file->isValid())
        {
            $dir='upload/';
            $filename=time().mt_rand(100000, 999999).'.'.$file->getClientOriginalExtension();
            $file->move($dir,$filename);
            $path=$dir.$filename;
            session_start();
            $request->put('pictures', $filename);
            // $response = Response::make($contents, $statusCode);
            // $response->header('Content-Type', $path);
            // return $response;
        }
        // $targetFolder = '/upload'; // Relative to the root

        // $verifyToken = md5('unique_salt' . $_POST['timestamp']);

        // if (!empty($_FILES)) {
        //     $tempFile = $_FILES['Filedata']['tmp_name'];
        //     $targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
        //     $targetFile = rtrim($targetPath,'/') . '/' . $_FILES['Filedata']['name'];

        //     // Validate the file type
        //     $fileTypes = array('jpg','jpeg','gif','png'); // File extensions
        //     $fileParts = pathinfo($_FILES['Filedata']['name']);
    
        //     if (in_array($fileParts['extension'],$fileTypes)) {
        //         move_uploaded_file($tempFile,$targetFile);
        //         return  '1';
        //     } else {
        //         return 'Invalid file type.';
        //     }
        // }
        // return 'Invalid file type.';
    }

    /**
     * @param  Request
     * @return [type]
     */
    public function postAddActivity(Request $request)
    {
        $pictures='test.png';
        if ($request->session()->exists('pictures')) {
            //
            $pictures=$request->get('pictures');
        }   
       $data=array(
        'user_id' => Auth::user()->id,
        'activity'=>$request,
        'pictures'=>$pictures,
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

<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    protected $table = 'activity';

    /**
     * [getActiviteiesByUserId description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public static function getActiviteiesByUserId($id)
    {
        return Activities::where('user_id', '=', $id)
            ->get();
    }
    /**
     * [getActiviteiesByUserId description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public static function getActiviteiesByActivityId($id)
    {
        return Activities::where('id', '=', $id)
            ->get();
    }
    /**
     * [getActiviteiesAll description]
     * @return [type] [description]
     */
    public static function getActiviteiesAll()
    {
        return Activities::orderBy('created_at', 'DESC')->get();
    }/**
     * [addActivity description]
     * @param [type] $activity [description]
     */
    public static function addActivity($activity)
    {
        $newActivity = new Activities;
        $newActivity->user_id = $activity->user_id;
        $newActivity->location = $activity->location;
        $newActivity->start_time = $activity->start_time;
        $newActivity->end_time =  $activity->end_time;
        $newActivity->title =  $activity->title;
        $newActivity->description =  $activity->description;
        $newActivity->save();
    }
    /**
     * [deleteActivity description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public static function deleteActivity($id)
    {  

       Activities::findOrFail($id)->delete();
       return;
    }
    /**
     * [updateActivity description]
     * @param  [type] $activity [description]
     * @return [type]           [description]
     */
    public static function updateActivity($activity)
    {
        $newActivity = new Activities;
        $newActivity->user_id = $activity->user_id;
        $newActivity->location = $activity->location;
        $newActivity->start_time = $activity->start_time;
        $newActivity->end_time =  $activity->end_time;
        $newActivity->title =  $activity->title;
        $newActivity->description =  $activity->description;
        $newActivity->save();
    }
}
?>
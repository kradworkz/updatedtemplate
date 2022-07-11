<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    public function employees()
    {
        return $this->hasMany('App\Models\ScheduleEmployee', 'schedule_id');
    } 

    public function comments()
    {
        return $this->hasMany('App\Models\ScheduleComment', 'schedule_id');
    } 

    public function statuses()
    {
        return $this->hasMany('App\Models\ScheduleStatus', 'schedule_id');
    } 
}

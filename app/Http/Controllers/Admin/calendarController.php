<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class calendarController extends Controller
{
    public function showCalender(){
        return view('Admin.Calendar.calendar');
    }
}

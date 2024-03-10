<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;





class AttendanceController extends Controller
{
    public function startAttendance(Request $request)
    {

        $attendance = Attendance::where('user_id', auth()->user()->id)->latest()->first();

        if (!$attendance) {
            $attendance = new Attendance();
            $attendance->user_id = auth()->user()->id;

        }
        $attendance->date = now();
        $attendance->start_time = now();
        $attendance->save();


    }
    public function endAttendance(Request $request)
    {

        $attendance = Attendance::where('user_id', auth()->user()->id)->latest()->first();
        $attendance->date = now();
        $attendance->end_time = now();
        $attendance->save();

    }
    public function getAttendance()
    {
        $attendances = Attendance::simplePaginate(5);
        return view('Attendance');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rest;


class RestController extends Controller
{
    public function startRest(Request $request)
    {
        $attendanceId = $request->input('attendance_id');

        
        if (!$attendanceId) {
            return redirect()->back()->with('error', 'Attendance ID is missing');
        }

        $rest = new Rest();
        $rest->attendance_id = $attendanceId;
        $rest->start_time = now();
        $rest->save();

    }

    public function endRest(Request $request)
    {
        $attendanceId = $request->input('attendance_id');

        $rest = Rest::where('attendance_id', $attendanceId)->latest()->first();

        if ($rest) {
            $rest->end_time = now();
            $rest->save();
        }

    }
}

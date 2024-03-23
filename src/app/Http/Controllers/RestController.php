<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rest;
use App\Models\Attendance;



class RestController extends Controller
{
    public function startRest(Request $request)
    {
        $attendances = Attendance::select('user_id', 'date')->get();

    }

    public function endRest(Request $request)
    {

    }
}

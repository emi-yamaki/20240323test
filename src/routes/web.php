<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AttendanceController;
use
App\Http\Controllers\RestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('auth')->group(function () {
Route::get('/', [AuthController::class, 'index']);
});
Route::get('/attendance/start', [AttendanceController::class, 'startAttendance'])->name('attendance.start');
Route::get('/attendance/end', [AttendanceController::class, 'endAttendance'])->name('attendance.end');
Route::get('/attendance/get', [AttendanceController::class, 'getAttendance'])->name('attendance.get');
Route::get('/break/start', [RestController::class, 'startRest'])->name('rest.start');
Route::get('/break/end', [RestController::class, 'endRest'])->name('rest.end');
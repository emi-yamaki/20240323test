@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/Attendance.css') }}">
@endsection

@section('content')
<div class="form-table">
    <table class="attendance-table">
        <tr>
            <th>名前</th>
            <th>勤務開始</th>
            <th>勤務終了</th>
            <th>休憩開始</th>
            <th>休憩終了</th>
        </tr>
        
        <tr>
            <td></td>
            <td>E</td>
            <td>F</td>
            <td>E</td>
            <td>F</td>
        </tr>
        
        <tr>
            <td>G</td>
            <td>H</td>
            <td>I</td>
            <td>H</td>
            <td>I</td>
        </tr>
        <tr>
            <td>J</td>
            <td>K</td>
            <td>L</td>
            <td>K</td>
            <td>L</td>
        </tr>
        <tr>
            <td>J</td>
            <td>K</td>
            <td>L</td>
            <td>K</td>
            <td>L</td>
        </tr>
        <tr>
            <td>J</td>
            <td>K</td>
            <td>L</td>
            <td>K</td>
            <td>L</td>
        </tr>
    </table>
</div>

@endsection
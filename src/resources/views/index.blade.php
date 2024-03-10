@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')


<div class="attendance__alert">
    @if(Auth::check())
    <p class="centered">{{ Auth::user()->name }}さんお疲れ様です！</p>
    @endif

    <div class="attendance__content">
        <div class="attendance__panel">
            <form class="attendance__button" action=" {{ route('attendance.start') }} " method="get">
                @csrf
                <button class="attendance__button-submit" type="submit">勤務開始</button>
            </form>
            <form class="attendance__button" action="{{ route('attendance.end') }}" method="get">
                @csrf
                <button class="attendance__button-submit" type="submit">勤務終了</button>
            </form>
            <form class="attendance__button2" action="{{ route('rest.start') }}" method="get">
                @csrf
                <button class="attendance__button-submit" type="submit">休憩開始</button>
            </form>
            <form class="attendance__button2" action="{{ route('rest.end') }}" method="get">
                @csrf
                <button class="attendance__button-submit" type="submit">休憩終了</button>
            </form>
        </div>
    </div>
    @endsection
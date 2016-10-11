@extends('layouts.master')

@section('top-head')
    <title>Increment</title>
@stop

@section('content')
    <p> the number you entered is {{ $number }} </p>
    <p> heres your number after being incremented {{ $incremented }} </p>
@stop
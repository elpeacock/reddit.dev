@extends('layouts.master')

@section('top-head')
    <title>Uppercase</title>
@stop

@section('content')
    <p> you entered {{ $word }} </p>
    <p> now you're yelling! {{ $uppercase }} </p>
@stop
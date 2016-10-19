@extends('layouts.master')

@section('title')

    <title>Log In!</title>

@stop

@section('content')

    <h1>Register Yo Self</h1>
    
    <form class="form" method="POST" action="{{ action('Auth\AuthController@postLogin') }}">
        
        {!! csrf_field() !!}
        
        Email: <input class="form-control" type="text" name="email" value="{{ old('email')}}">

        @if ($errors->has('email'))
            <br>
            <div class="alert alert-danger">{{ $errors->first('email') }}</div>
        @endif
        
        Password: <input class="form-control" type="password" name="password" placeholder="Enter your password">

        @if ($errors->has('password'))
            <br>
            <div class="alert alert-danger">{{ $errors->first('password') }}</div>
        @endif

        <br>
        <input class="btn-success btn" type="submit">
    </form>

@stop
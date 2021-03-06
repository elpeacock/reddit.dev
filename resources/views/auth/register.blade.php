@extends('layouts.master')

@section('title')

    <title>Register</title>

@stop

@section('content')

    <h1>Register Yo Self</h1>
    
    <form class="form" method="POST" action="{{ action('Auth\AuthController@postRegister') }}">
        
        {!! csrf_field() !!}

        Name (first & last): <input class="form-control" type="text" name="name" value="{{ old('name') }}">
        
        @if ($errors->has('name'))
            <br>
            <div class="alert alert-danger">{{ $errors->first('name') }}</div>
        @endif
        
        Email: <input class="form-control" type="text" name="email" value="{{ old('email')}}">

        @if ($errors->has('email'))
            <br>
            <div class="alert alert-danger">{{ $errors->first('email') }}</div>
        @endif
        
        Password: <input class="form-control" type="password" name="password" placeholder="Choose a password">

        Confirm Password: <input class="form-control" type="password" name="password_confirmation" placeholder="Re-enter your password">

        @if ($errors->has('password'))
            <br>
            <div class="alert alert-danger">{{ $errors->first('password') }}</div>
        @endif
        <br>
        <input class="btn-success btn" type="submit">
    </form>

@stop
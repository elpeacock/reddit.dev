@extends('layouts.master')

@section('title')

    <title>Create a Post</title>

@stop

@section('content')

    <h1>Create a Post</h1>
    
    <form class="form" method="POST" action="{{ action('PostsController@store') }}">
        
        {!! csrf_field() !!}

        Title: <input class="form-control" type="text" name="title" value="{{ old('title') }}">
        
        @if ($errors->has('title'))
            <br>
            <div class="alert alert-danger">{{ $errors->first('title') }}</div>
        @endif
        
        Content: <textarea class="form-control" name="content" rows="5" cols="40">{{ old('content')}}</textarea>

        @if ($errors->has('content'))
            <br>
            <div class="alert alert-danger">{{ $errors->first('content') }}</div>
        @endif
        
        Link to URL: <input class="form-control" type="text" name="url" value="{{ old('url') }}">

        @if ($errors->has('url'))
            <br>
            <div class="alert alert-danger">{{ $errors->first('url') }}</div>
        @endif
        <br>
        <input class="btn-success btn" type="submit">
    </form>

@stop
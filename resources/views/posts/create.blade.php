@extends('layouts.master')

@section('title')

    <title>Create a Post</title>

@stop

@section('form')
    
    <form class="form" method="POST" action="{{ action('PostsController@store') }}">
        {!! csrf_field() !!}
        Title: <input class="form-control" type="text" name="title" value="{{ old('title') }}">
        Content: <textarea class="form-control" name="content" rows="5" cols="40">{{ old('content')}}</textarea>
        Link to URL: <input class="form-control" type="text" name="url" value="{{ old('url') }}">
        <input class="btn-success btn" type="submit">
    </form>

@stop
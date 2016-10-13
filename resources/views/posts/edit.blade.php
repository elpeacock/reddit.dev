@extends('layouts.master')

@section('title')

    <title>Create a Post</title>

@stop

@section('content')
    
    <form class="form" method="POST" action="{{ action('PostsController@update', $post->id) }}">

        {!! csrf_field() !!}
        {!! method_field('PUT') !!}

        Title: <input class="form-control" type="text" name="title" value="{{ (old('title') == null) ? $post->title : old('title') }}">

        @if ($errors->has('title'))
            <br>
            <div class="alert alert-danger">{{ $errors->first('title') }}</div>
        @endif

        Content: <textarea class="form-control" name="content" rows="5" cols="40">{{ (old('content') == null) ? $post->content : old('content') }}</textarea>

        @if ($errors->has('content'))
            <br>
            <div class="alert alert-danger">{{ $errors->first('content') }}</div>
        @endif

        Link to URL: <input class="form-control" type="text" name="url" value="{{ (old('url') == null) ? $post->url : old('url') }}">

        @if ($errors->has('url'))
            <br>
            <div class="alert alert-danger">{{ $errors->first('url') }}</div>
        @endif

        <input class="btn-success btn" type="submit">
    </form>

@stop
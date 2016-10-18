@extends('layouts.master')

@section('title')
	<title>Show Post</title>
@stop

@section('content')
	
	<h1>{{ $post->title }}</h1>
	<p>{{ $post->content}}</p>
	<p>{{ $post->url }}</p>
	<p>Posted by: {{ $post->user->name }}</p>
	<p>Posted at: {{ $post->created_at }}</p>

	<div class="col-md-6" id="buttonHolder">
        
        <a href="{{ action('PostsController@edit', $post->id) }}" class="btn btn-primary">Edit Post</a>

    </div>
    <div class="col-md-6" id="buttonHolder">
    	
        <a href="{{ action('PostsController@destroy', $post->id) }}" class="btn btn-primary">Delete Post</a>
    
    </div>
    

@stop
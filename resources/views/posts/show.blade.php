@extends('layouts.master')

@section('title')
	<title>Show Post</title>
@stop

@section('content')
	
	<h1>{{ $post->title }}</h1>
	<p>{{ $post->content}}</p>
	<p>{{ $post->url }}</p>
	
@stop
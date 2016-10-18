@extends('layouts.master')

@section('title')
    <title>Posts</title>
@stop

@section('content')

    <h1>Posts</h1>
    
    <table class="table">

    @foreach($posts as $post)

        <tr>
            <a href="{{ action('PostsController@show', $post->id) }}">
                
                <h3><td>{{ $post->title }}</td></h3>

            </a>
            
            <td>{{ $post->content }}</td>
            
            <td>{{ $post->url }}</td>

            <td>Created by: {{ $post->user->name }}</td>
            
            <td>Posted at: {{ $post->created_at }}</td>
        
        </tr>
    
    @endforeach

    </table>

    <div class='pagination'> {!! $posts->render() !!} </div>
    
@stop
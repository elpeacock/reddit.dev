@extends('layouts.master')

@section('title')
    <title>Posts</title>
@stop

@section('content')
    
    <table>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>url</th>
        </tr>
    @foreach($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td>{{ $post->url }}</td>
        </tr>
    @endforeach

    </table>

@stop
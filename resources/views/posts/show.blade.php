@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    <div>
        {!! $post->body !!}
    </div>
    <hr>
    <small>Written on: {!! $post->date_created !!}</small>
    <hr>
    <a href="/posts_edit/{!! $post->id !!}" class="btn btn-default">Edit</a>

    <form method="POST" action="/posts_delete" method="POST" class="pull-right">
        @csrf
        <input type="hidden" name="id" value="{!! $post->id !!}">
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection
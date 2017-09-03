@extends('layouts.master')

@section('title')
<title>Edit a Post</title>
@stop

@section('content')

<div class="container">
	<h1>Post number {{ $post->id }}</h1>
	<a href="{{ action('PostsController@edit', $post->id) }}">
            <span class="glyphicon glyphicon-pencil"></span>Edit this post
        </a>
	
	<div style="margin-top:40px">
		<div class="col-md-2">
			<p><strong>Title:</strong><p>
			<p><strong>Content:</strong><p>
			<p><strong>URL:</strong><p>
			<p><strong>Date:</strong><p>
			<p><strong>User:</strong><p>
		</div>
		<div class="col-md-10" style="background-color:#EEE">
			<p>{{ ($post->title) }}</p>
			<p>{{ ($post->content) }}</p>
			<p>{{ ($post->url) }}</p>
			<p>{{ ($post->created_at) }}</p>
			<p>{{ ($post->created_by) }}</p>
			<p>karma: {{$post->karma}}
			<form method="POST" action="{{ action('PostsController@vote', $post->id) }}">
			{{ csrf_field() }}
			<button type="submit" name="vote" value='1'><span class="glyphicon glyphicon-arrow-up"></span></button>
			<button type="submit" name="vote" value='-1'><span class="glyphicon glyphicon-arrow-down"></span></button>
            </form>
			<br>
		</div>

	</div>
		


</div>


@stop
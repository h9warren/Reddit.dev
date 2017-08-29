@extends('layouts.master')

@section('title')
<title>Edit a Post</title>
@stop

@section('content')
	<div class="container">
		<h2>Edit post</h2>
		<form method='POST' action="{{ action('PostsController@update', $post->id) }}">
		{!! csrf_field() !!}
			<label for="title">Title your post</label><br>
				<input class="form-control" type="text" name="title"
					placeholder="title" value="{{ $post->title }}"><br>


			<label for="content">Enter a short description</label><br>
				<textarea class="form-control" name="content" placeholder="Describe your link here..." value="{{ $post->description }}">{{ $post->content }}</textarea><br>
			<label for="url">Link URL</label><br>
			<span class="help-block">{{ $errors->first('url', ':message') }}</span>
				<input class= "form-control" type="text" name="url" placeholder="Enter URL" value="{{ $post->url }}"><br>
			{!! method_field('PUT')!!}
			<button class="btn btn-success" type="submit">Update Post</button>
		</form>
		<form method="POST" action="{{ action('PostsController@destroy', $post->id) }}">
			{!! csrf_field() !!}
			<button class="btn btn-danger">Delete Post</button>
			{!! method_field('DELETE') !!}
		</form>
	</div>
@stop
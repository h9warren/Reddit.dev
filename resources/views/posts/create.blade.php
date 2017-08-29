@extends('layouts.master')

@section('title')
<title>Create a Post</title>
@stop

@section('content')
	<div class="container">
		<h2>Create a post</h2>
		<form method='POST' action="{{ action('PostsController@store') }}">
		{!! csrf_field() !!}
			<label for "title">Title your post</label><br>
			<input class= "form-control" type="text" name="title" placeholder="title" value="{{ old('title') }}"><br>
			<label for "content">Enter a short description</label><br>
			<textarea class="form-control" name="content" placeholder="Describe your link here..." value="{{ old('content') }}">{!! old('content') !!}</textarea><br>
			<label for "url">Link URL</label><br>
			<span class="help-block">{{ $errors->first('url', ':message') }}</span>
			<input class= "form-control" type="text" name="url" placeholder="Enter URL" value="{{ old('url') }}"><br>

			<button class="btn btn-success" type="submit">Create</button>

		</form>
	</div>

@stop
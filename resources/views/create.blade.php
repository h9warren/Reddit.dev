@extends('layouts.master')

@section('title')
<title>Create a Post</title>
@stop

@section('content')


	<h2>Create a post</h2>
	<form method='POST' action="{{ action('PostsController@store') }}">
	{{ csrf_field() }}
		<input class= "form-control" type="text" name="title" placeholder="title" value="{{ old('name') }}" required>
		<textarea class= "form-control" style="width:200px:; height:200px" name="content" placeholder="Describe your link here..." value="{{ old('content') }}" required></textarea>
		<input class= "form-control" type="text" name="URL" placeholder="Enter URL" value="{{ old('URL') }}" required>
		<button type="submit">Create</button>

	</form>

@stop
@extends('layouts.master')

@section('title')
	<title>Title</title>
@stop

@section('content')

<div class="container">
	<h1>All posts</h1>

	@foreach ($posts as $post)
	<div class = "row" style="margin-top:40px">

		<div class="col-md-2">
			<p><strong>Title:</strong><p>
			<p><strong>Content:</strong><p>
			<p><strong>URL:</strong><p>
			<p><strong>Post:</strong><p>
			<p><strong>User:</strong><p>
		</div>
		<div class="col-md-6" style="background-color:#EEE">
			<p><a href="{{ action('PostsController@show', $post->id)}}"> {{ ($post->title) }}
			</a></p>
			<p>{{ ($post->content) }}</p>
			<p>{{ ($post->url) }}</p>
			<p>{{ ($post->id) }}</p>
			<p>{{ ($post->created_by) }}</p>
			<br>
		</div>

	</div>
		
		@endforeach

</div>

@stop



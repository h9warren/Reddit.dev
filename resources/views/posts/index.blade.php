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
			<p><strong>Date:</strong><p>
			<p><strong>User:</strong><p>
		</div>
		<div class="col-md-6" style="background-color:#EEE">
			<p><a href="{{ action('PostsController@show', $post->id)}}"> {{ ($post->title) }}
			</a></p>
			<p>{{ ($post->content) }}</p>
			<p>{{ ($post->url) }}</p>
			<p>{{ ($post->created_at) }}</p>
			<p>{{ ($post->user->name) }}</p>
			<p>karma: {{$post->karma}}	
			<form method="POST" action="{{ action('PostsController@vote', $post->id) }}">
			{{ csrf_field() }}
			<button type="submit" name="vote" value='1'><span class="glyphicon glyphicon-arrow-up"></span></button>
			<button type="submit" name="vote" value='-1'><span class="glyphicon glyphicon-arrow-down"></span></button>
            </form>
			<br>
		</div>

	</div>
		
		@endforeach
		<div class="col-md-offset-2 col-md-6">
			<!-- {!! $posts->appends(Request::except('page'))->render() !!} -->
			{!! $posts->render() !!}
		</div>
</div>

@stop



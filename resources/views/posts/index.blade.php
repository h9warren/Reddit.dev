<?php 
// namespace App\Http\Controllers;
use App\Http\Controllers\PostsController;

session()->forget('previous');

?>
@extends('layouts.master')

@section('title')
	<title>reddit.dev</title>
@stop

@section('content')

<div class="container">
	<div class="posts col-s-10 col-s-offset-1 col-xs-12">

	<div class="search">
	  <form method="GET" action="{{ action('PostsController@index') }}">
	    {!! csrf_field() !!}
	        <div class="col-md-3 input-group">
	        <input type="text" name="q" class="form-control" placeholder="Search reddit.dev...">
	        <span class="input-group-btn">
	        <button class="btn btn-default" type="submit">Go!</button>
	      </span>
	    </div>
	  </form>

	  </div>

	@foreach ($posts as $post)
	<div class="row" style="margin-top:40px">

		<div class="post" style="background-color:#EEE">
			<h2><a href="{{ action('PostsController@show', $post->id)}}"> {{ ($post->title) }}
			</a></h2>
			<h4>{{ ($post->url) }}</h4>
			<p>Submitted: {{ ($post->created_at) }} by {{ ($post->user->name) }}</p>
			<h3><a href="{{ action('PostsController@show', $post->id)}}">{{$post->karma}}</a><span style="font-size:12px; color: #aaa; font-weight: normal; font-style:italic;"> points</span></h3>

			<br>
		</div>

	</div>
		
		@endforeach
		<div class="col-md-offset-2 col-md-6">
			<!-- {!! $posts->appends(Request::except('page'))->render() !!} -->
			{!! $posts->render() !!}
		</div>
	</div>
</div>

@stop



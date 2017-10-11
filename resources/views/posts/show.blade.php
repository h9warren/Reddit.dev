<?php 
use App\Http\Controllers\PostsController;
use Illuminate\Http\Request;
use App\Http\Requests;
?>
@extends('layouts.master')

@section('title')
<title>{{ $post->title }}</title>
@stop

@section('content')

<?php if(! session()->has('previous')) {
	
	session()->put('previous', $_SERVER['HTTP_REFERER']);
	
	}
?>

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
			

			<form method="POST" action="{{ action('PostsController@vote', $post->id) }}">
			{{ csrf_field() }}

			<?php $votes = PostsController::returnArrows($post->id); ?>
			
			@if (($votes == 0 ) || ($votes == null))

			<button type="submit" name="vote" value='1'><span class="glyphicon glyphicon-arrow-up"></span></button>
			<p>{{$post->karma}}</p>
			<button type="submit" name="vote" value='-1'><span class="glyphicon glyphicon-arrow-down"></span></button>
			
			@elseif ($votes == 1)

			<span class="glyphicon glyphicon-arrow-up"></span>
			<p>{{$post->karma}}</p>
			<button type="submit" name="vote" value='-1'><span class="glyphicon glyphicon-arrow-down"></span></button>

			@elseif ($votes == -1)

			<button type="submit" name="vote" value='1'><span class="glyphicon glyphicon-arrow-up"></span></button>
			<p>{{$post->karma}}</p>
			<span class="glyphicon glyphicon-arrow-down"></span>

			@else

			<?php $value = -($votes) ?>

			<button type="submit" name="vote" value='<?php echo $value ?>'><span class="glyphicon glyphicon-arrow-up"></span></button>
			<p>{{$post->karma}}</p>
			<button type="submit" name="vote" value='<?php echo $value ?>'><span class="glyphicon glyphicon-arrow-down"></span></button>

			@endif

            </form>
			<br>
		</div>
		@if (null !==(session('previous')))

		<a href="<?php echo session()->get('previous') ?>">LINK</a>

		@endif

	</div>
		


</div>


@stop
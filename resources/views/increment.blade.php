@extends('layouts.master')

@section('title')
<title>Increment</title>
@stop

@section('content')
<h1 style="text-align:center;">{{ $number }}</h1>
<a href=<?php echo "\"/increment/$number\""; ?>>Increment!</a>

@stop
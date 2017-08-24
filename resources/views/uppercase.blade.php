@extends('layouts.master')

@section('title')
<title>To Uppercase</title>
@stop


@section('content')

<h1 style="text-align:center;">{!!'You entered: '.$newString.PHP_EOL;!!}</h1>
<h1 style="text-align:center;">{!!'Uppercase: '.$word.PHP_EOL;!!}</h1>

@stop
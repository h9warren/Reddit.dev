@extends('layouts.master')

@section('title')
    <title>Title</title>
@stop

@section('content')
@if (count($errors))
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            {{$error}}
        @endforeach
    </div>
@endif 

<div class="container">
        <div class="col-sm-6 col-sm-offset-3 col-xs-12">
            <form method="POST" action="/auth/login">
                {!! csrf_field() !!}
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
            
                <input type="checkbox" name="remember"> Remember Me<br>


                <button class="btn btn-success" type="submit">Login</button>
                <button class="btn btn-default" type="submit">Sign Up</button>

            </form>
        </div>
    
</div>

@stop
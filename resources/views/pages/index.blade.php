@extends('layouts.app')
@section('content')
    <div class='jumbotron text-center'>
        <h1>{{$title}}</h1>
        <p>This is the laravel application</p>
        <p><a class='btn btn-primary btn-lg' href='http://pc/lara/public/login' role='button'>Login</a> <a class='btn btn-success btn-lg' href='/register' role='button'>Register</a></p>
    </div>
@endsection


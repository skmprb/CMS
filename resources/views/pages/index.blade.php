@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
    <h1>welcome to Skmprb</h1>
    <p>This is a platform for </p>
    <p>Content Management System</p>
    <a href="/home" class="btn btn-primary">Dashboard</a>
</div>
<style>
    .jumbotron{
        margin-top: 100px;
        padding: 50px;
        color: #000;
        background-color: rgba(175,175,175,0.3);
        width: 100%;
    }
</style>
@endsection
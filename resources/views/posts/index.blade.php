@extends('layouts.app')

@section('content')

<h1>Posts</h1>

@if (count($posts) > 0)
    @foreach ($posts as $post)
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img width="100%" src="storage/cover_images/{{$post->cover_image}}" />
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3><a href="/posts/{{$post->id}}">{{ $post->title}}</a></h3>
                    <small>Written on {{ $post->created_at }}</small>
                </div>
            </div>
        </div>
        <style>
            .jumbotron{
                margin-top: 50px;
                padding: 10px;
                color: #000;
                background-color: rgba(175,175,175,0.2);
                width: 100%;
                border-radius: 20px;
            }
            img{
                border-radius:20px;
            }
            .col-md-8{
                
            }
        </style>
    @endforeach
    {{$posts -> links('pagination::bootstrap-4')}}
@else
    <p>No Posts Found</p>
    
@endif
    
@endsection

@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-3">{{ $post->title }}</h2> 
            <p>By. <a class="text-decoration-none" href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/posts?category={{ $post->category->slug }}" >{{ $post->category->name }}</a></p>
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
            

            <a class="text-decoration-none btn btn-primary" href="/posts">Back to Posts</a>
        </div>
    </div>
</div>

    
        
@endsection



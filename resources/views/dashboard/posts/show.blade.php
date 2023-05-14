@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2 class="mb-3">{{ $post->title }}</h2> 
            <a href="/dashboard/posts" class="btn btn-success">
                <span data-feather="arrow-left"></span> 
            </a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">
                <span data-feather="edit"></span> 
            </a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf                    
            <button class="btn btn-danger" onclick="return confirm('Are you want to delete your post with a title : {{ $post->title }} ?')" type="submit"><span data-feather="x-circle" class="align-text-bottom"></span></button>
            </form>
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top img-fluid mt-3" alt="{{ $post->category->name }}">
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
            
        </div>
    </div>
</div>
@endsection
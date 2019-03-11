@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">
    <div class="blog-post">
        <a href="{{ route('posts.show', $post->id) }}">
            <h2 class="blog-post-title">{{ $post->title }}</h2>
        </a>
        <p class="blog-post-meta"> {{ $post->created_at->toFormattedDateString() }} by <a href="#">{{ $post->user->name }}</a></p>

        <section>{{ $post->body }}</section>
    </div>

    
    <div class="form-group">
    <form method="POST"
    
    action="{{ route('posts.destroy', $post->id) }}" >
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary" role="button">Uredi</a>
                                   <button class="btn btn-danger ">Izbriši</button>

                                   
                                    <a href="{{ route('posts') }}" class="btn btn-primary" role="button">Back</a>
                                </form>
</div>

</div>
@endsection
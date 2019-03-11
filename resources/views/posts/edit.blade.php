@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">

     @if(session()->has('flash_message'))

        <div class="alert alert-success alert-dismissible">
            {{ session()->get('flash_message') }}
        </div>

     @endif

     <div class="panel panel-default">

          <div class="panel-heading">
               <h3 class="panel-title">Update post</h3>
          </div>

      

          <div class="panel-body">

               <form method="POST" action="{{ route('posts.update', $post->id) }}">
               {{ method_field('PATCH') }}
                    {{ csrf_field() }}

                    <div class="form-group">
                         <label for="title">Title</label>
                         <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" />
                    </div>

                    <div class="form-group">
                         <label for="body">Body</label>
                         <textarea class="form-control" id="body" name="body" rows="10" cols="80">{{ $post->body }}</textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('posts') }}" class="btn btn-danger" role="button">Back</a>
                    </div>


                    

               </form>

          </div>
     </div>
</div>
@endsection
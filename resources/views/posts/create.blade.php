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
               <h3 class="panel-title">Create a new Post</h3>
          </div>

          <hr>

          <div class="panel-body">

               <form method="POST" action="{{ route('posts.store') }}">

                    {{ csrf_field() }}

                    <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                         <label for="title">Title</label>
                         <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" />
                    </div>

                    <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                         <label for="body">Body</label>
                         <textarea class="form-control" id="body" name="body" rows="10" cols="80">{{ old('body') }}</textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Publish</button>
                        <a href="{{ route('posts') }}" class="btn btn-danger" role="button">Back</a>
                    </div>

                    @include('layouts.errors')

               </form>

          </div>
     </div>
</div>
@endsection
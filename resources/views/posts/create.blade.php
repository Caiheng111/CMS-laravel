@extends('layouts.app')
@section('content')

  <div class="card card-default">
    <div class="card-header">
      Create a post
    </div>

    <div class='card-body'>
      @if($errors->any())
          <div class="alert alert-danger">
            <ul class="list-group">
                @foreach($errors->all() as $error)
                  <li class="list-group-item">
                    {{ $error }}
                  </li>
                @endforeach
            </ul>
          </div>
        @endif
      <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
       <div class="form-group">
         <label for="title">Title</label>
         <input type="text" class="form-control" name="title" id="title">
       </div>

       <div class="form-group">
         <label for="description">Description</label>
         <textarea class="form-control" name="description" id="description" cols="5" rows="5"></textarea>
       </div>

       <div class="form-group">
         <label for="content">Contents</label>
         <textarea class="form-control" name="content" id="content" cols="5" rows="5"></textarea>
       </div>

       <div class="form-group">
        <label for="published_at">Published_at</label>
        <input type="text" class="form-control" name="published_at" id="published_at">
      </div>

       <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" name="image">
      </div>

       <div class="form-group">
        <button class="btn btn-success" type="submit">Create a post</button>
      </div>
      
      </form>
    </div>
  </div>
  @endsection
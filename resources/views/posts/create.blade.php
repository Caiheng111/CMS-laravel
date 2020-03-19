@extends('layouts.app')
@section('content')

  <div class="card card-default">
    <div class="card-header">
      Create a post
    </div>

    <div class='card-body'>
      <form action="{{route('posts.store')}}" method="POST" enctype="multipart-form-data">
        @csrf
       <div class="form-group">
         <label for="">Title</label>
         <input type="text" class="form-control" name="title" id="title">
       </div>

       <div class="form-group">
         <label for="">Description</label>
         <textarea class="form-control" name="description" id="description" cols="5" rows="5"></textarea>
       </div>

       <div class="form-group">
         <label for="">Contents</label>
         <textarea class="form-control" name="contents" id="contents" cols="5" rows="5"></textarea>
       </div>

       <div class="form-group">
        <label for="">Published_at</label>
        <input type="text" class="form-control" name="published_at" id="published_at">
      </div>

       <div class="form-group">
        <label for="">Image</label>
        <input type="file" class="form-control" name="image">
      </div>

       <div class="form-group">
        <button class="btn btn-success" type="submit">Create a post</button>
      </div>
      
      </form>
    </div>
  </div>


  @endsection
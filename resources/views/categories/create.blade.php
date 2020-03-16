@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-end mb-2">
  <a href="{{route('categories.create')}}" class="btn btn-success">Add a catogory</a>
</div>

<div class="card card-default">
  <div class="card-header">
    Category lists
  </div>

<div class="card-body">
  <form action="">
    <div class="form-group">
      <label for="">Name</label>
      <input type="text" class="form-control" name='name'>
    </div>
    <div class="form-group">
      <button class="btn btn-success">Add Category</button>
    </div>
  </form>
</div>



</div>

    
@endsection
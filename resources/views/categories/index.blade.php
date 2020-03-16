@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-end mb-2">
  <a href="{{route('categories.create')}}" class="btn btn-success">Add a catogory</a>
</div>

<div class="card card-default">
  <div class="card-header">
    Category lists
  </div>

</div>

    
@endsection
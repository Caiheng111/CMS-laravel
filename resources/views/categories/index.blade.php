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
    <table class="table">
      <thead>
        <th>name</th>

      </thead>
      <tbody>

        @foreach ($categories as $category)
        <tr>
          <td>{{$category-> name}}</td>
          <td><a href="{{route('categories.edit', $category-> id)}}" class="btn btn-info btn-sm">Edit</a></td>
        </tr>
            
        @endforeach
      </tbody>
    </table>
  </div>
</div>

    
@endsection
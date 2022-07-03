@extends('layouts.app')

@section('content')
  <h1 class="text-center my-5">Todos page</h1>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          {{$todo->name}}
        </div>
        <div class="card-body">
            {{$todo->description}}
        </div>
      </div>
      <a href="/todos/{{$todo->id}}/edit" class="btn btn-warning my-2">Edit</a>
      <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger my-2 float-end">Delete</a>
    </div>
  </div>
@endsection

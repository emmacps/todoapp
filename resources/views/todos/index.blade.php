
@extends('layouts.app')

@section('content')
  <h1 class="text-center my-5">Todos page</h1>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          Featured
        </div>
        <ul class="list-group list-group-flush">
          @foreach ($todos as $todo)
            <li class="list-group-item">{{$todo->name}}

              @if (!$todo->completed)
                <a href="/todos/{{$todo->id}}/complete" class="btn btn-warning btn-sm float-end mr-2">Complete</a>
              @endif
              <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-end">View</a>

            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
@endsection

@extends('layouts.app')

@section('content')
  <h1 class="text-center my-5">Todos page</h1>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          create todo
        </div>
        <div class="card-body">
          @if($errors->any())
            <ul class="list-group">
              @foreach($errors->all() as $error)
                <li class="list-group-item">
                  {{$error}}
                </li>
              @endforeach
            </ul>
          @endif
            <form class="" action="/store-todos" method="post">
              @csrf
              <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" name="name" class="form-control">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Description</label>
                <textarea class="form-control" name="description" rows="3"></textarea>
              </div>
              <div class="mb-3">
                <button type="submit" name="submit" class="btn btn-success">Create Todo</button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection

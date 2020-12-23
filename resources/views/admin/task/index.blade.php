@extends('layouts.admin')
@section('page-title','Admin Dashboard')

@section('content')
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4 mb-0 text-gray-800">Task Management</h1>
    <a href="{{route('task.create')}}" class="btn btn-sm btn-primary mb-4">Add a task</a>
  </div>

  <div class="card-groups">
    <div class="row">
      @foreach ($tasks as $task)
      <div class="col-6 col-md-3 col-sm-6">
        <div class="card">
          <img class="card-img-top" src="{{asset('img/task/default-task.png')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{$task->title}}</h5>
            <p class="card-text">{{$task->description}}</p>
            <button class="btn btn-sm btn-outline-info">Private</button>
          </div>
          <div class="card-footer">
            <small>{{$task->created_at->diffForHumans()}}</small>
          </div>
        </div>
      </div>
      @endforeach
      

      <div class="col-6 col-md-3 col-sm-6">
        <div class="card">
          <img class="card-img-top" src="{{asset('img/task/default-task.png')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title that wraps to a new line</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3 col-sm-6">
        <div class="card">
          <img class="card-img-top" src="{{asset('img/task/default-task.png')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title that wraps to a new line</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3 col-sm-6">
        <div class="card">
          <img class="card-img-top" src="{{asset('img/task/default-task.png')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title that wraps to a new line</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3 col-sm-6">
        <div class="card">
          <img class="card-img-top" src="{{asset('img/task/default-task.png')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title that wraps to a new line</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3 col-sm-6">
        <div class="card">
          <img class="card-img-top" src="{{asset('img/task/default-task.png')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title that wraps to a new line</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3 col-sm-6">
        <div class="card">
          <img class="card-img-top" src="{{asset('img/task/default-task.png')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title that wraps to a new line</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
    </div>
    
  </div>




</div>
@endsection  

@push('css')
<style>
  
</style>
@endpush

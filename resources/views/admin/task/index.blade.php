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
          <a href="{{route('task.show',$task->id)}}">
            <img class="card-img-top" src="{{asset('img/task/default-task.png')}}" alt="Card image cap">
          </a>
          <div class="card-body">
            <h5 class="card-title">{{$task->title}}</h5>
            <p class="card-text">{{$task->description}}</p>
            <button class="btn btn-sm btn-outline-info">Private</button>
          </div>
          <div class="card-footer">
            <small>{{$task->created_at->diffForHumans()}}</small>
            <a href="{{route('task.show',$task)}}" class="btn btn-sm float-right"><i class="fas fa-eye"></i></a>
          </div>
        </div>
      </div>
      @endforeach
    
    </div>
  </div>

</div>
@endsection  

@push('css')
<style>
  
</style>
@endpush

@extends('layouts.admin')
@section('page-title','Admin Dashboard')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-6 col-md-8 col-12 mb-4 mx-auto">
      <div class="d-flex justify-content-between">
        <h1 class="h4 mb-0 text-gray-800 mb-4">{{$task->user->name}} / {{$task->title}}</h1>
      </div>
    </div>
  </div>
</div>
@endsection
@extends('layouts.admin')
@section('page-title','Admin Dashboard')

@section('content')
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4 mb-0 text-gray-800">Creating a new Task</h1>
  </div>

  <div class="row">
    <div class="col-xl-6 col-md-8 col-12 mb-4">
      <x-input-error></x-input-error>

      <form action="{{route('task.store')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="" class="text-primary">Task name</label>
          <input type="text" class="form-control" name="task" >
        </div>

        <div class="form-group">
          <label for="" class="text-primary">Description(optional)</label>
          <textarea type="text" class="form-control" rows="3" name="description"></textarea>
        </div>

        

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>


</div>
@endsection  

@push('css')
<style>
  
</style>
@endpush

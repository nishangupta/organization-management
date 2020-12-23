@extends('layouts.admin')
@section('page-title','Admin Dashboard')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-6 col-md-8 col-12 mb-4 mx-auto">
      <div class="d-flex justify-content-between">
        <h1 class="h4 mb-0 text-gray-800 mb-4">Creating a new Task</h1>
      </div>


      <x-input-error></x-input-error>

      <form action="{{route('task.store')}}" enctype="multipart/form-data" method="POST" id="taskForm">
        @csrf
        <div class="form-group">
          <label for="" class="text-primary">Task name</label>
          <input type="text" class="form-control" name="title" >
        </div>

        <div class="form-group">
          <label for="" class="text-primary">Description (optional)</label>
          <textarea type="text" class="form-control" rows="3" name="description"></textarea>
        </div>

        {{-- radio buttons --}}
        <div class="form-group">
          <div class="d-flex align-items-center">
            <div class=" p-2">
              <input type="radio" name="privacy" aria-label="Selecting the privacy" value="public" checked>
            </div>
            <div class="p-2">
              <i class="fas fa-pager fa-2x"></i>
            </div>
            <div class="p-1">
              <span class="text-dark h6 my-0 d-block">Public</span>
              <small>All member will get notified and can view the task</small>
            </div>
          </div>

          <div class="d-flex align-items-center">
            <div class="p-2">
              <input type="radio" name="privacy" aria-label="Selecting the privacy" value="private">
            </div>
            <div class="p-2">
              <i class="fas fa-lock fa-2x"></i>
            </div>
            <div class="p-1">
              <span class="text-dark h6 my-0 d-block">Private</span>
              <small>Only you can see it, nobody is notified unless you add them manually</small>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="" class="text-primary mt-2">Cover for the task (Leave empty for default)</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
              <input type="file" name="cover" class="custom-file-input" id="inputGroupFile01">
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
          </div>
        </div>
      </form>

      <div class="submitBtn bg-white p-2 border-top">
        <div class="d-flex justify-content-center"> 
          <button id="submitTaskBtn" class="btn btn-primary mx-3">Submit</button>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection  

@push('js')
<script>
  $('#submitTaskBtn').click(function(e){
    e.preventDefault();
    $('#taskForm').submit();
  })
</script>
@endpush



@push('css')
<style>
.submitBtn{
  position: fixed;
  bottom:0;
  left: 0;
  right: 0;
  width: 100%;
  z-index: 100;
}
</style>
@endpush

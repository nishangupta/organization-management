@extends('layouts.admin')
@section('page-title','Admin Dashboard')

@section('content')
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4 mb-0 text-gray-800">Task Management</h1>
  </div>

  <div class="row">
    <div class="col-xl-12 col-md-12 mb-4">
      <div class="row h-100">
          {{-- @foreach($roles as $role) --}}
          <div class="col-md-3 col-sm-6">
            <ul class="list-group mb-2">
              <li class="list-group-item bg-primary text-white d-flex justify-content-between">
                <h6>{$role->name}}</h6>
                <a href="{route('roleManagement.edit',['role'=>$role->id])}}" class="text-white"><i class="fas fa-edit"></i></a>
              </li>
              <ul class="list-group">
        
              </ul>
            </ul>
          </div>
          {{-- @endforeach --}}
      </div>
    </div>
  </div>


</div>
@endsection  

@push('css')
<style>
  
</style>
@endpush

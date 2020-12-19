@extends('layouts.admin')
@section('page-title','Admin Dashboard')

@section('content')
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4 mb-0 text-gray-800">Role and Permission management</h1>
  </div>

  <div class="row">
    <div class="col-xl-12 col-md-12 mb-4">
      <div class="row h-100">
          @foreach($roles as $role)
          <div class="col-md-3 col-sm-6">
            <ul class="list-group mb-2">
              <li class="list-group-item bg-primary text-white d-flex justify-content-between">
                <h6>{{$role->name}}</h6>
                <a href="{{route('roleManagement.edit',['role'=>$role->id])}}" class="text-white"><i class="fas fa-edit"></i></a>
              </li>
              <ul class="list-group">
                @foreach($role->permissions as $permission)
                <li class="list-group-item list-group-item-action">{{$permission->name}}</li>
                @endforeach
              </ul>
            </ul>
          </div>
          @endforeach
      </div>
    </div>
  </div>


  <div class="row mb-4">
    <div class="col-12 col-md-3 col-sm-12">
      <ul class="list-group">
        <li class="list-group-item active">Roles</li>
        @foreach($roles as $role)
          <li class="list-group-item">
            <span class="text-primary">{{$role->name}}</span>
            <br>
            <small>{{$role->updated_at}}</small>
          </li>
        @endforeach
      </ul>
    </div>

    <div class="col-12 col-md-9 col-sm-12">
      <ul class="list-group">
        <li class="list-group-item active">Permissions</li>
        @foreach($roles as $role)
          <li class="list-group-item {{$role->name}}" title="{{$role->name}} roles">
            @foreach($role->permissions as $permission) 
            <span class="badge badge-primary"> {{ $permission->name }}</span>
            @endforeach
          </li>
        @endforeach
      </ul>
    </div>
  </div>


</div>
@endsection  

@push('css')
<style>
  
</style>
@endpush



{{-- 
<div class="table-responsive mt-5">
  <table class="table table-striped table-hover table-bordered">
    <thead>
      <tr class="text-dark">
        <th>Role</th>
        <th>Permissions</th>
        <th>Updated at</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($roles as $role)
      <tr>
        <td class="text-primary">{{$role->name}}</td>
        <td>
          @foreach($role->permissions as $permission) 
          <span class="badge badge-primary"> {{ $permission->name }}</span>
          @endforeach
        </td>
        <td>{{$role->updated_at}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div> --}}
@extends('layouts.admin')
@section('page-title','Admin Dashboard')

@section('content')
<div class="container-fluid">
  <div class="mb-4 d-flex justify-content-between">
    <h1 class="h3 mb-0 text-gray-800">Edit Role</h1>
    <a href="{{route('roleManagement.index')}}" class="btn btn-primary mb-4">Go back</a>
  </div>

  <div class="row">

    <div class="col-sm-12 col-md-8">
      @if($errors->any())
        <div class="alert alert-danger">
          {{ implode('', $errors->all(':message')) }}
        </div>
      @endif
      <form action="{{route('roleManagement.update',['role'=>$role])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
          <div class="col-sm-12 col-md-8">
            <div class="form-group">
              <label for="">Role name</label>
              <input type="text"  value="{{$role->name}}" disabled class="form-control">  
            </div>
           
            <div class="form-group">
              <label for="">Permissions</label>
              <small class="text-primary d-block mb-3">Add the permissions that {{$role->name}}s should have!</small>
              <select name="permission" class="form-control" >
                @foreach($allPermissions as $permission)
                  <option value="{{$permission->id}}">{{$permission->name}}</option>
                @endforeach
              </select>
            </div>


            <div class="d-flex justify-content-between">
              <button type="submit" class="btn btn-primary my-3">Add</button>
            </div>
          </div>
        </div>
      </form>
     
    </div>

    <div class="col-sm-12 col-md-4">
      <ul class="list-group mb-2">
        <li class="list-group-item bg-primary text-white">
          <h5>{{$role->name}} roles</h5>
        </li>
        <ul class="list-group small">
          @foreach($role->permissions as $permission)
          <li class="list-group-item list-group-item-action">{{$permission->name}} <a href="{{route('roleManagement.revokePermission',['role'=>$role,'permission'=>$permission->id])}}"><i class="fas fa-trash-alt float-right text-danger"></i></a></li>
          @endforeach
        </ul>
      </ul>

    </div>

  </div>
    

</div>
@endsection  
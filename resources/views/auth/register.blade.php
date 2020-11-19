@extends('layouts.auth')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">

          <div class="d-flex justify-content-between mb-3">
            <div class="mb-3">
              <a href="/" class="btn"><i class="fas fa-chevron-left"></i> Go back</a>
            </div>
            <div class="">
              <p class="py-0 my-0">Already a member?</p>
              <a href="{{route('login')}}">Login</a>
            </div>
          </div>
       
          <h5 class="card-title text-center">Register</h5>
          
          @if($errors->any())
              <div class="alert alert-danger">
              {{ implode('', $errors->all(':message')) }}
              </div>
          @endif

          <form class="form-signin" method="POST" action="{{route('register')}}">
            @csrf
            <div class="form-label-group">
              <input type="name" id="inputName" name="name" class="form-control" placeholder="Name" required autofocus>
              <label for="inputName">Name</label>
            </div>

            <div class="form-label-group">
              <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required>
              <label for="inputEmail">Email address</label>
            </div>

            <div class="form-label-group">
              <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
              <label for="inputPassword">Password</label>
            </div>

            <div class="form-label-group">
              <input type="password" name="password_confirmation" id="inputPassword2" class="form-control" placeholder="Confirm Password" required>
              <label for="inputPassword2">Confirm Password</label>
            </div>

            <div class="custom-control custom-checkbox mb-3">
              <input type="checkbox" name="remember" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1">Remember password</label>
            </div>
            <button class="btn btn-lg sign-in-btn btn-block text-uppercase" type="submit">Sign up</button>
          </form>
       
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

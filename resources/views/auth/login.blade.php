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
              <p class="py-0 my-0">Not a member?</p>
              <a href="{{route('register')}}">Register</a>
            </div>
          </div>
       

          <h5 class="card-title text-center">Sign In</h5>
          @if($errors->any())
              <div class="alert alert-danger">
              {{ implode('', $errors->all(':message')) }}
              </div>
          @endif
          
          <form class="form-signin" action="{{route('login')}}" method="POST">
            @csrf
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
              <label for="inputEmail">Email address</label>
            </div>

            <div class="form-label-group">
              <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
              <label for="inputPassword">Password</label>
            </div>

            <div class="custom-control custom-checkbox mb-3">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" name="remember" for="customCheck1">Remember password</label>
            </div>
            <button class="btn btn-lg sign-in-btn btn-block text-uppercase" type="submit">Sign in</button>
          </form>
          
          <div class="text-center mt-3">
            <a href="{{route('password.request')}}">Forgot password?</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

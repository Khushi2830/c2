@extends('homeparent')
@section('title', 'Ragister ')

@section('content1')
  <div class="container-w ">
    <div class="form-container">
    @session('msg')
    <div class="alert alert-warning">
      {{ session('msg') }}
    </div>
    @endsession
    <form action="{{ Route("login") }}" method="POST" class="custom-form">
      @csrf
      <label for="email">Email</label>
      <div class="input-icon">
      <input type="email" id="email" name="email" style="flex: 1;">
      </div>
      @error('email')
      <p class="text-danger small mt-1">{{ $message }}</p>
    @enderror
      <label for="password">password</label>
      <div class="input-icon">
      <input type="password" id="password" name="password" style="flex: 1;">
      </div>
      @error('password')
      <p class="text-danger small mt-1">{{ $message }}</p>
    @enderror


      <button class="button w-100 " style="background-color:  #5f3dc4;" type="submit">Sign up</button>
    </form>

    <h5 class="signup-link justify-content-center align-items-center d-flex text-muted ">sign up here. <a
      href="{{ Route("register") }}"> <span class="highlight" style="color: #5f3dc4;">Register</span></a></h5>

    </div>
    <div class="image-container"></div>
  </div>

@endsection
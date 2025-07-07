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

            <form action="{{ Route("register") }}" method="POST" class="custom-form">
                @csrf
                <div class="row">
                    <div class="col">
                        <label for="name">First Name</label>
                        <input type="text" id="name" name="name">

                    </div>
                    @error('name')
                        <p class="text-danger small mt-1">{{ $message }}</p>
                    @enderror
                    <div class="col">
                        <label for="lastname">last Name</label>
                        <input type="text" id="lastname" name="lastname">

                    </div>
                    @error('lastname')
                        <p class="text-danger small mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="row">
                    <div class="col">

                        <label for="phone">Your Phone number</label>
                        <div class="input-icon">
                            <input type="text" id="phone" name="phone" style="flex: 1;">
                            @error('phone')
                                <p class="text-danger small mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        @error('phone')
                            <p class="text-danger small mt-1">{{ $message }}</p>
                        @enderror


                    </div>
                    <div class="col">
                        <label for="date">Date of the Event</label>
                        <input type="date" id="date" name="date">

                    </div>

                </div>
                <label for="email">Email</label>
                <div class="input-icon">
                    <input type="email" id="email" name="email" style="flex: 1;">
                    @error('email')
                        <p class="text-danger small mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <label for="password">Password</label>
                <div class="input-icon">
                    <input type="password" id="password" name="password" style="flex: 1;">
                    @error('password')
                        <p class="text-danger small mt-1">{{ $message }}</p>
                    @enderror
                </div>



                <button class="button w-100 " style="background-color:  #5f3dc4;" type="submit">Create an new
                    account</button>

            </form>
            <h5 class="signup-link justify-content-center align-items-center d-flex text-muted ">New to Creamer? <a
                    href="{{ Route("login") }}"> <span class="highlight" style="color: #5f3dc4;">sign up</span></a></h5>
        </div>
        <div class="image-container"></div>
    </div>

@endsection
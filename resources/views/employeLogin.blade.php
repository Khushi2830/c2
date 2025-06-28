@extends('indexparent')
@section('title', 'Sing up provider')

@section('content2')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">

                <div class="form-container">
                    @session("error")
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endsession
                    <h4 class="mb-4">Signup here<span style="color:#792dc4;"> Creamer Franchise</span></h4>
                    <form action="" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6 w-100">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control " vlaue="{{ old('email') }}"
                                    placeholder="Enter your email">
                                @error('email')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 w-100">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" name="password" class="form-control"
                                    vlaue="{{ old('password') }}" placeholder="Enter your pincode">
                                @error('password')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" style="background-color: #792dc4;" class="btn btn-submit">Signup</button>
                        </div>


                        <div class="mb-3">
                            <p class="terms text-center ">
                                <a href="{{ route("registerForm") }}">Sin-up Provider</a>.
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
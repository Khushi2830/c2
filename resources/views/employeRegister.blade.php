@extends('indexparent')
@section('title', 'Franchise Register')

@section('content2')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="form-container">
                    @session('mis')
                        <div class="alert alert-warning">
                            {{ session('mis') }}
                        </div>
                    @endsession
                    <h4 class="mb-4">Fill up below form to register for <span style="color:#792dc4;">Creamer
                            Franchise</span></h4>
                    <form action="{{ route("registerForm") }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">First Name</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}"
                                    placeholder="Enter your first name">
                                @error('name')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" id="last_name" name="last_name" class="form-control"
                                    value="{{ old('last_name') }}" placeholder="Enter your last name">
                                @error('last_name')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control" vlaue="{{ old('email') }}"
                                    placeholder="Enter your email">
                                @error('email')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Mobile Number</label>
                                <input type="tel" id="phone" name="phone" class="form-control" vlaue="{{ old('phone') }}"
                                    placeholder="Enter your mobile number">
                                @error('phone')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="property_type" class="form-label">Property Type</label>
                                <select class="form-select" id="property_type" name="property_type">
                                    <option selected disabled>Choose option</option>
                                    <option value="owend" {{ old('property_type') == 'owned' ? 'selected' : '' }}>owned
                                    </option>
                                    <option value="rented" {{ old('property_type') == 'rented' ? 'selected' : '' }}>rented
                                    </option>
                                </select>
                                @error('property_type')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="pincode" class="form-label">Pincode</label>
                                <input type="text" id="pincode" name="pincode" class="form-control"
                                    vlaue="{{ old('pincode') }}" placeholder="Enter your pincode">
                                @error('pincode')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" name="password" class="form-control"
                                    vlaue="{{ old('password') }}" placeholder="Enter your password">
                                @error('password')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="state" class="form-label">State</label>
                                <select class="form-select" id="state" name="state">
                                    <option selected disabled>Choose option</option>
                                    <option value="Bihar" {{ old('state') == 'Bihar' ? 'selected' : '' }}>Bihar</option>
                                    <option value="Delhi" {{ old('state') == 'Delhi' ? 'selected' : '' }}>Delhi</option>
                                    <option value="Maharashtra" {{ old('state') == 'Maharashtra' ? 'selected' : '' }}>
                                        Maharashtra</option>
                                    <option value="Other" {{ old('state') == 'Other' ? 'selected' : '' }}>Other</option>
                                </select>
                                @error('state')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="city" class="form-label">City / Town</label>
                                <select id="city" name="city" class="form-select">
                                    <option selected disabled>Choose option</option>
                                    <option value="Patna" {{ old('city') == 'Patna' ? 'selected' : '' }}>Patna</option>
                                    <option value="Purnea" {{ old('city') == 'Purnea' ? 'selected' : '' }}>Purnea</option>
                                    <option value="Katihar" {{ old('city') == 'Katihar' ? 'selected' : '' }}>Katihar</option>
                                </select>
                                @error('city')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="address" class="form-label">Address</label>
                                <textarea id="address" name="address" class="form-control" vlaue="{{ old('address') }}"
                                    rows="2" placeholder="Enter your address"></textarea>
                                @error('address')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="description" class="form-label">What Is Your Current Business?</label>
                                <textarea id="description" name="description" class="form-control" rows="2"
                                    placeholder="Enter your current business">{{ old('description') }}</textarea>
                                @error('description')
                                    <p class="text-danger small mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <p class="terms">
                                By clicking I Accept & Submit, you agree to our and <a
                                    href="{{ route("loginForm") }}">Sin-up Provider</a>.
                            </p>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-submit" style="background-color: #792dc4;">I Accept &
                                Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
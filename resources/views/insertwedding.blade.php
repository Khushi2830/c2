@extends('indexparent')
@section('title', 'Weddind')

@section('content2')

  <div class="yy">
    @session('msg')
    <div class="alert alert-info">
    {{ session('msg') }}
    </div>
    @endsession
    <form action="{{ route('weddingregister') }}" method="POST">
    @csrf
    <div class="form-group ">
      <div>
      <label class="form-label" for="name">Name</label>
      <input type="text" id="name" class="form-control" name="name" value="{{ old("name") }}"
        placeholder="Enter your name">
      @error('name')
      <span class="text-danger">{{ $message }}</span>
    @enderror
      </div>

      <div>
      <label class="form-label" for="phone">Phone</label>
      <input type="text" id="phone" class="form-control" name="phone" value="{{ old("phone") }}"
        placeholder="Enter your Phone">
      @error('phone')
      <span class="text-danger">{{ $message }}</span>
    @enderror
      </div>

      <div>
      <label class="form-label" for="email">Email</label>
      <input type="email" id="email" name="email" class="form-control" value="{{ old("email") }}"
        placeholder="Enter your name">
      @error('name')
      <span class="text-danger">{{ $message }}</span>
    @enderror
      </div>

    </div>

    <div class="form-group">
      <div>
      <label class="form-label" for="date">Event Date</label>
      <input type="date" id="date" class="form-control" name="date" value="{{ old("date") }}"
        placeholder="dd-mm-yyyy">
      @error('date')
      <span class="text-danger">{{ $message }}</span>
    @enderror
      </div>

      <div>
      <label class="form-label" for="city">City</label>
      <select class="form-select" id="city" name="city">
        <option>Select a City</option>
        <option value="mumbai" {{ old('city') == 'mumbai' ? 'selected' : '' }}>mumbai</option>
        <option value="purnea" {{ old('city') == 'purnea' ? 'selected' : '' }}>purnea</option>
        <option value="delhi" {{ old('city') == 'delhi' ? 'selected' : '' }}>delhi</option>
        <option value="bangalore" {{ old('city') == 'banglore' ? 'selected' : '' }}>bangalore</option>
        @error('city')
      <span class="text-danger">{{ $message }}</span>
      @enderror
      </select>
      </div>

    </div>

    <div class="form-group">
      <div style="flex: 1 1 100%;">
      <label for="description" class="form-label">Additional Notes</label>
      <textarea id="description" class="form-control" name="description"
        placeholder="Write any additional notes here...">{{ old("description") }}</textarea>
      </div>
      @error('description')
      <span class="text-danger">{{ $message }}</span>
    @enderror
    </div>


    <button type="submit" class="btn-submit" style="background-color: #6610f2;">ORDER NOW</button>
    </form>
  </div>

@endsection
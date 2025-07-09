@extends('indexparent')
@section('title', 'Wedding')

@section('content2')

  <div class="yy">
    @if(session('msg'))
      <div class="alert alert-info">
        {{ session('msg') }}
      </div>
    @endif

    <form action="{{ route('weddingregister') }}" method="POST">
      @csrf
      <div class="form-group">
        <!-- Name -->
        <div>
          <label class="form-label" for="name">Name</label>
          <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}"
            placeholder="Enter your name">
          @error('name')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <!-- Phone -->
        <div>
          <label class="form-label" for="phone">Phone</label>
          <input type="text" id="phone" class="form-control" name="phone" value="{{ old('phone') }}"
            placeholder="Enter your Phone">
          @error('phone')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <!-- Email -->
        <div>
          <label class="form-label" for="email">Email</label>
          <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}"
            placeholder="Enter your email">
          @error('email')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
      </div>

      <div class="form-group">
        <!-- Event Date (Only today or future) -->
        <div>
          <label class="form-label" for="date">Event Date</label>
          <input type="date" id="date" class="form-control" name="date"
            value="{{ old('date') }}"
            min="{{ \Carbon\Carbon::now()->toDateString() }}"
            placeholder="dd-mm-yyyy">
          @error('date')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>

        <!-- City -->
        <div>
          <label class="form-label" for="city">City</label>
          <select class="form-select" id="city" name="city">
            <option>Select a City</option>
            <option value="mumbai" {{ old('city') == 'mumbai' ? 'selected' : '' }}>mumbai</option>
            <option value="purnea" {{ old('city') == 'purnea' ? 'selected' : '' }}>purnea</option>
            <option value="delhi" {{ old('city') == 'delhi' ? 'selected' : '' }}>delhi</option>
            <option value="bangalore" {{ old('city') == 'bangalore' ? 'selected' : '' }}>bangalore</option>
          </select>
          @error('city')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
      </div>

      <!-- Description -->
      <div class="form-group">
        <div style="flex: 1 1 100%;">
          <label for="description" class="form-label">Additional Notes</label>
          <textarea id="description" class="form-control" name="description"
            placeholder="Write any additional notes here...">{{ old('description') }}</textarea>
          @error('description')
            <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="btn-submit" style="background-color: #6610f2;">ORDER NOW</button>
    </form>
  </div>

@endsection

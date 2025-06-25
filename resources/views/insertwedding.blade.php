@extends('indexparent')
@section('title', 'index Page')

@section('content2')

<div class="yy">
    <form>
        @csrf
    <div class="form-group ">
      <div>
        <label for="name">Name</label>
        <input type="text" id="name" value="{{ old("name") }}" placeholder="Enter your name">
      </div>
      @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
      <div>
        <label for="phone">Phone</label>
        <input type="text" id="phone"  value="{{ old("phone") }}"  placeholder="Enter your Phone">
        
      </div>
       @error('phone')
        <span class="text-danger">{{ $message }}</span>
        @enderror
      <div>
        <label for="email">Email</label>
        <input type="email" id="email"  value="{{ old("email") }}"  placeholder="Enter your name">
      </div>
        @error('email')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
      <div>
        <label for="date">Event Date</label>
        <input type="date" id="date"  value="{{ old("date") }}"  placeholder="dd-mm-yyyy">
      </div>
      @error('date')
        <span class="text-danger">{{ $message }}</span>
        @enderror
      <div>
        <label for="city">City</label>
        <select id="city"  value="{{ old("city") }}" >
          <option value="">Select a City</option>
          <option>Mumbai</option>
          <option>Delhi</option>
          <option>Bangalore</option>
          <option>Kolkata</option>
        </select>
      </div>
        @error('city')
            <span class="text-danger">{{ $message }}</span>
            @enderror
    </div>

    <div class="form-group">
      <div style="flex: 1 1 100%;">
        <label for="notes">Additional Notes</label>
        <textarea id="notes"  value="{{ old("notes") }}"  placeholder="Write any additional notes here...">{{ old("notes") }}</textarea>
      </div>
    </div>
      @error('notes')
            <span class="text-danger">{{ $message }}</span>
            @enderror

    <button type="submit" class="btn-submit" style="background-color: #6610f2;">ORDER NOW</button>
  </form>
</div>

@endsection
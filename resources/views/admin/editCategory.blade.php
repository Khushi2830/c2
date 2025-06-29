@extends('admin.parent')

@section('title')
    Edit Category
@endsection

@section('content')
    <div class="container-fluid m-0 p-0">
        <div class="row">
            <div class="col-lg-3  ">
                @include("admin.sidebar")
            </div>
            <div class="col-lg-9 mt-5 ">
                <div class="dashboard-header d-flex justify-content-between align-items-center mb-4">
                    <h2 class="page-title mb-0" style="color: #5369c0;" >Edit {{ $category->cat_title }}'s Category</h2>
                    <a href="{{ route('category.index') }}" class="btn  d-flex align-items-center gap-1" style="background-color: blueviolet; color: white; "  >
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="19" y1="12" x2="5" y2="12"></line>
                            <polyline points="12 19 5 12 12 5"></polyline>
                        </svg>
                        <span>View the Categories</span>
                    </a>
                </div>

                <div class="form-container p-4 bg-white shadow rounded-4">
                    <form action="{{ route('category.update',$category) }}" method="POST" class="custom-form" enctype="multipart/form-data">
                        @csrf
                        @method("put")
                        <div class="form-group mb-3">
                            <label for="cat_title" class="form-label fw-semibold">Category Title</label>
                            <input type="text" id="cat_title" name="cat_title" value="{{ $category->cat_title }}"
                                class="form-control form-control-lg rounded-3" placeholder="Enter category title">
                            @error('cat_title')
                                <div class="form-error text-danger small mt-1">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="cat_description" class="form-label fw-semibold">Category Description</label>
                            <textarea id="cat_description" rows="4" name="cat_description"
                                class="form-control form-control-lg rounded-3"
                                placeholder="Enter category description">{{ $category->cat_description }}</textarea>
                            @error('cat_description')
                                <div class="form-error text-danger small mt-1">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">Parent Category</label>
                                <select name="category_id" class="form-select">
                                    <option value="{{ $category->category_id }}">{{ $category->cat_title }}</option>
                            
                                
                                 @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->cat_title }}
                                        </option>
                                    @endforeach
                                    </select>
                                @error('category_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="cover_image" class="form-label fw-semibold">Cover Image</label>
                                <input type="file" id="cover_image" name="cover_image"
                                    class="form-control form-control-lg rounded-3">
                                @error('cover_image')
                                    <div class="form-error text-danger small mt-1">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-actions mt-4">
                            <input type="submit" value="Edit Category"
                            class="btn btn-primary btn-lg rounded-3 w-100"style="background-color: #6f42c1; color:white;">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
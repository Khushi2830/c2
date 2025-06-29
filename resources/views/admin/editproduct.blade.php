@extends('admin.parent')

@section('title')
    Edit Product
@endsection

@section('content')
    <div class="container-fluid m-0 p-0">
        <div class="row">
            <div class="col-lg-3">
                @include("admin.sidebar")
            </div>
            <div class="col-lg-9 mt-5 ">
                <div class="dashboard-header d-flex justify-content-between align-items-center mb-4">
                    <h2 class="page-title mb-0" style="color: #6f42c1;">Edit {{ $product->title }}'s Product</h2>
                    <a href="{{ route('product.index') }}" class="btn d-flex align-items-center gap-1"
                        style="background-color: #6f42c1; color: white;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="19" y1="12" x2="5" y2="12"></line>
                            <polyline points="12 19 5 12 12 5"></polyline>
                        </svg>
                        <span>Back to Products</span>
                    </a>
                </div>

                <div class="form-container p-4 bg-white shadow rounded-4">
                    <form action="{{ route('product.update', $product) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("put")

                        <div class="form-group mb-3">
                            <label for="title" class="form-label fw-semibold">Product Name</label>
                            <input type="text" id="title" name="title" value="{{ $product->title }}"class="form-control form-control-lg rounded-3" placeholder="Enter product title" required>
                            @error('title')
                                <div class="text-danger small mt-1">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="price" class="form-label fw-semibold">Price</label>
                                <input type="text" id="price" name="price" value="{{ $product->price }}"
                                    class="form-control form-control-lg rounded-3" placeholder="Enter price" required>
                                @error('price')
                                    <div class="text-danger small mt-1">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="descount_price" class="form-label fw-semibold">Discount Price</label>
                                <input type="text" id="descount_price" name="descount_price"
                                    value="{{ $product->descount_price }}" class="form-control form-control-lg rounded-3"
                                    placeholder="Enter discount price">
                                @error('descount_price')
                                    <div class="text-danger small mt-1">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="kg" class="form-label fw-semibold">Quantity</label>
                                <select name="kg" id="kg" class="form-select form-control-lg rounded-3" required>
                                    <option value="{{ $product->kg }}">{{ $product->kg }}</option>
                                    <option value="1kg" {{ old('kg') == '1kg' ? 'selected' : '' }}>1kg</option>
                                    <option value="2kg" {{ old('kg') == '2kg' ? 'selected' : '' }}>2kg</option>
                                    <option value="4kg" {{ old('kg') == '4kg' ? 'selected' : '' }}>4kg</option>
                                </select>
                                @error('kg')
                                    <div class="text-danger small mt-1">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="veg" class="form-label fw-semibold">Veg/Non-Veg</label>
                                <select name="veg" id="veg" class="form-select form-control-lg rounded-3" required>
                                    <option value="{{ $product->veg }}">{{ $product->veg }}</option>
                                    <option value="veg" {{ old('veg') == 'veg' ? 'selected' : '' }}>Veg</option>
                                    <option value="non-veg" {{ old('veg') == 'non-veg' ? 'selected' : '' }}>Non-Veg</option>
                                </select>
                                @error('veg')
                                    <div class="text-danger small mt-1">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="category_id" class="form-label fw-semibold">Category</label>
                                <select name="category_id" id="category_id" class="form-select form-control-lg rounded-3"
                                    required>
                                    <option value="{{ $product->category_id }}">{{ $product->cat_title }}</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->cat_title }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="text-danger small mt-1">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="image" class="form-label fw-semibold">Product Image</label>
                                <input type="file" id="image" name="image" class="form-control form-control-lg rounded-3">
                                @error('image')
                                    <div class="text-danger small mt-1">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="description" class="form-label fw-semibold">Product Description</label>
                            <textarea id="description" name="description" rows="4"
                                class="form-control form-control-lg rounded-3"
                                placeholder="Enter product description">{{ $product->description }}</textarea>
                            @error('description')
                                <div class="text-danger small mt-1">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-actions mt-4">
                            <button type="submit" class="btn w-100 btn-lg rounded-3 shadow"
                                style="background-color: #6f42c1; color: white;">
                                    Edit Product
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
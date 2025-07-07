@extends('admin.parent')

@section('title')
    Edit Blog
@endsection

@section('content')

    <div class="container-fluid  m-0 p-0 ">
        <div class="row">
            <div class="col-lg-3  ">
                @include("admin.sidebar")
            </div>
            <div class="col-lg-9 mt-5 ">
                <div class="dashboard-header d-flex justify-content-between align-items-center mb-4">
                    <h2 class="page-title mb-0" style="color: #5369c0;">Edit {{ $blog->title }}'s Blog</h2>
                    <a href="{{ route('category.index') }}" class="btn  d-flex align-items-center gap-1"
                        style="background-color: blueviolet; color: white; ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="19" y1="12" x2="5" y2="12"></line>
                            <polyline points="12 19 5 12 12 5"></polyline>
                        </svg>
                        <span>View the Blog</span>
                    </a>
                </div>

                <div class="form-container p-4 bg-white shadow rounded-4">
                    <form action="{{ route('blog.update', $blog) }}" method="POST" class="custom-form"
                        enctype="multipart/form-data">
                        @csrf
                        @method("put")
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group mb-3">
                                    <label for="title" class="form-label fw-semibold">Blog Title</label>
                                    <input type="text" id="title" name="title" value="{{ $blog->title }}"
                                        class="form-control form-control-lg rounded-3" placeholder="Enter blog title">
                                    @error('title')
                                        <div class="form-error text-danger small mt-1">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group mb-3">
                                    <label for="author" class="form-label fw-semibold">Blog Author</label>
                                    <input type="text" id="title" name="author" value="{{ $blog->author }}"
                                        class="form-control form-control-lg rounded-3" placeholder="Enter blog author">
                                    @error('author')
                                        <div class="form-error text-danger small mt-1">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="image" class="form-label fw-semibold">Blog Image</label>
                                <input type="file" id="image" name="image" class="form-control form-control-lg rounded-3">
                                @error('image')
                                    <div class="form-error text-danger small mt-1">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="content" class="form-label fw-semibold">content</label>
                            <textarea id="content" rows="4" name="content" class="form-control form-control-lg rounded-3"
                                placeholder="Enter blog content">{{ $blog->content }}</textarea>
                            @error('content')
                                <div class="form-error text-danger small mt-1">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-actions mt-4">
                            <input type="submit" value="Edit Blog" class="btn btn-primary btn-lg rounded-3 w-100"
                                style="background-color: #6f42c1; color:white;">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
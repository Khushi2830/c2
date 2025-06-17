@extends('admin.parent')

@section('title')
    Manage Category
@endsection

@section('content')
<div class="container-fluid dashboard-container py-4">
    <div class="row">
        <div class="col-lg-3 col-md-4 sidebar-column">
            @include("admin.sidebar")
        </div>
        <div class="col-lg-9 col-md-8 content-column">
            <div class="dashboard-header d-flex justify-content-between align-items-center mb-4">
                <h2 class="page-title mb-0 fw-bold " style="color: #6f42c1;">Manage Category</h2>
                <div class="d-flex gap-3">
                   
                    <a href="{{ Route('category.create') }}" class="btn  shadow-sm rounded-pill px-4" style="background-color: #6f42c1; color: white;" >Add Category</a>
                </div>
            </div>
              @session('success')
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endsession
                
            <div class="table-responsive shadow rounded-4 bg-white p-3">
                <table class="table table-striped align-middle table-hover mb-0">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Sub-Category</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody class="text-center">
                      @foreach ($categories as $category)
                      

                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->cat_title}}</td>
                            <td>
                                @if ($category->category_id)
                                    {{$category->parentCategory->cat_title}}
                                @else
                                    <span class="text-muted">No Parent Category</span>
                                @endif
                            </td>
                            <td>{{$category->cat_description}}</td>
                            <td>
                                <img src="{{ asset('storage/' . $category->cover_image) }}" alt="{{ $category->cat_title }}" class="category-cover_image" width="100px">
                            </td>
                            <td class="">
                                <div class="action-buttons d-flex gap-2 ">
                                        <form method="post" action="{{ route('category.destroy', $category) }}" class="delete-form">
                                            @csrf
                                            @method("delete")
                                            <button type="submit" class="btn btn-sm" style="background-color: blueviolet; color: white;" title="Delete category">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                <span>Delete</span>
                                            </button>
                                        </form>
                                        <button type="" class="btn btn-sm" style="background-color: blueviolet; color: white;" title="Edit category">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                            <span>Edit</span>
                                        </button>
                                    </div>
                             </td>
                      @endforeach
                        {{ $categories -> links() }}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

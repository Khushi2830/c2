@extends('admin.parent')

@section('title')
    Manage Category
@endsection

@section('content')
<div class="container-fluid m-0 p-0">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-lg-3 col-md-4 sidebar-column">
            @include("admin.sidebar")
        </div>

        <!-- Main Content -->
        <div class="col-lg-9 col-md-8 mt-5">
            <div class="px-4">
                <!-- Header -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="fw-bold " style="color: #6f42c1;">Manage Category</h2>
                    <a href="{{ route('category.create') }}" class="btn purple-btn px-4 rounded-pill shadow-sm">
                        <i class="fas fa-plus-circle me-1"></i> Add Category
                    </a>
                </div>

                <!-- Session Alerts -->
                @if(session('msg'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success:</strong> {{ session('msg') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if(session('maseg'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Deleted:</strong> {{ session('maseg') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Table -->
                <div class="table-responsive rounded-4 shadow-lg bg-white p-4">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-primary text-center">
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Sub-Category</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td class="fw-semibold">{{ $category->cat_title }}</td>
                                    <td>{{ $category->subcategories?->cat_title ?? '—' }}</td>
                                    <td>{{ Str::limit($category->cat_description, 50) }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $category->cover_image) }}"
                                             alt="{{ $category->cat_title }}"
                                             class="rounded shadow-sm"
                                             width="80" height="60"
                                             style="object-fit: cover;">
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <!-- Delete Button -->
                                            <form method="POST" action="{{ route('category.destroy', $category) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm purple-btn px-3" onclick="return confirm('Are you sure to delete this category?')">
                                                    <i class="fas fa-trash-alt me-1"></i> Delete
                                                </button>
                                            </form>

                                            <!-- Edit Button -->
                                            <a href="{{ route('category.edit', $category) }}" class="btn btn-sm purple-btn px-3 text-white">
                                                <i class="fas fa-edit me-1"></i> Edit
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Pagination -->
                    <div class="mt-4 d-flex justify-content-center">
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .purple-btn {
        background-color: #6f42c1;
        color: #fff;
        border: none;
        transition: all 0.3s ease;
    }

    .purple-btn:hover {
        background-color: #5a36a0;
        color: #fff;
    }
</style>
@endsection

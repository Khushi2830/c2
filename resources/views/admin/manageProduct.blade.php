@extends('admin.parent')

@section('title')
    Manage Product
@endsection

@section('content')
<div class="container-fluid m-0 p-0">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-lg-3 col-md-4 sidebar-column">
            @include("admin.sidebar")
        </div>

        <!-- Main Content -->
        <div class="col-lg-9 col-md-8 mt-5 px-4">
            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="fw-bold" style="color: #6f42c1;"> Manage Product</h2>
                <a href="{{ route('product.create') }}" class="btn purple-btn rounded-pill shadow-sm px-4">
                    <i class="fas fa-plus-circle me-1"></i> Add Product
                </a>
            </div>

            <!-- Flash Messages -->
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

            <!-- Product Table -->
            <div class="table-responsive bg-white p-4 rounded-4 shadow-lg">
                <table class="table table-hover align-middle text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Quantity</th>
                            <th>Veg/Non-Veg</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td class="fw-semibold">{{ $product->title }}</td>
                            <td>{{ $product->category->cat_title }}</td>
                            <td>{{ $product->kg }}</td>
                            <td>{{ $product->veg }}</td>
                            <td>
                                <del class="text-muted">₹{{ $product->price }}</del>
                                <br>
                                <span class="fw-bold text-success">₹{{ $product->descount_price }}</span>
                            </td>
                            <td>{{ Str::limit($product->description, 30) }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $product->image) }}" class="rounded shadow-sm" width="80" height="60" style="object-fit: cover;" alt="{{ $product->title }}">
                            </td>
                            <td>
                                <div class="d-flex justify-content-center gap-2">
                                    <!-- Delete -->
                                    <form method="POST" action="{{ route('product.destroy', $product) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm purple-btn px-3" onclick="return confirm('Are you sure you want to delete this product?')">
                                            <i class="fas fa-trash-alt me-1"></i> Delete
                                        </button>
                                    </form>

                                    <!-- Edit -->
                                    <a href="{{ route('product.edit', $product) }}" class="btn btn-sm purple-btn px-3 text-white">
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
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom Styles -->
<style>
    .purple-btn {
        background-color: #6f42c1;
        color: #fff;
        border: none;
        transition: 0.3s ease;
    }

    .purple-btn:hover {
        background-color: #5936a8;
        color: #fff;
    }

    .table td,
    .table th {
        vertical-align: middle;
    }
</style>
@endsection

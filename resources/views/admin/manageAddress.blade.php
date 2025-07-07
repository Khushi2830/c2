@extends('admin.parent')

@section('title')
    Manage Address
@endsection

@section('content')
    <div class="container-fluid m-0 p-0">
        <div class="row">

            <div class="col-lg-3 col-md-4 sidebar-column">
                @include("admin.sidebar")
            </div>

            <div class="col-lg-9 col-md-8 content-column mt-5">
                <div class="dashboard-header d-flex justify-content-between align-items-center mb-4">
                    <h2 class="page-title mb-0 fw-bold" style="color: #6f42c1;">Manage Address</h2>
                </div>


                @if (session('msg'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session('msg') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session('maseg'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Delete!</strong> {{ session('maseg') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif


                <div class="table-responsive shadow rounded-4 bg-white p-3">
                    <table class="table table-striped align-middle table-hover mb-0">
                        <thead class="table-primary text-center">
                            <tr>
                                <th>ID</th>
                                <th>Address</th>
                                <th>State</th>
                                <th>City</th>
                                <th>User ID</th>
                                <th>Pincode</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($addresses as $address)
                                <tr>
                                    <td>{{ $address->id }}</td>
                                    <td>{{ $address->address }}</td>
                                    <td>{{ $address->state }}</td>
                                    <td>{{ $address->city }}</td>
                                    <td>{{ $address->user_id }}</td>
                                    <td>{{ $address->pincode }}</td>
                                    <td>
                                        <div class="action-buttons d-flex gap-2 justify-content-center">

                                            <form method="post" action="{{ route('address.delete', $address->id) }}"
                                                class="delete-form">
                                                @csrf
                                                @method("delete")
                                                <button type="submit" class="btn btn-sm"
                                                    style="background-color: blueviolet; color: white;" title="Delete address">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                                    </svg>
                                                    <span>Delete</span>
                                                </button>
                                            </form>



                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                    <div class="mt-3">
                        {{ $addresses->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
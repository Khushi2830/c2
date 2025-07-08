@extends('indexparent')
@section('title', 'Confirm Order')

@section('content2')

<div class="container d-flex justify-content-center my-5 px-4">
    <div class="col-lg-10 bg-white shadow rounded-4 p-4">
       
        <div class="dashboard-header d-flex justify-content-between align-items-center mb-4">
            <h2 class="page-title mb-0 fw-bold" style="color: #6f42c1;">
                <i class="fas fa-check-circle me-2"></i>Confirm Customise Cake Order
            </h2>
        </div>

       
        @if(session('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{ session('msg') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session('maseg'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Delete!</strong> {{ session('maseg') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="table-responsive mt-3">
            <table class="table table-hover table-bordered align-middle text-center">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date</th>
                        <th>City</th>
                        <th>Notes</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($weddings as $wd)
                    <tr>
                        <td>{{ $wd->id }}</td>
                        <td class="text-capitalize">{{ $wd->name }}</td>
                        <td>{{ $wd->email }}</td>
                        <td>{{ $wd->phone }}</td>
                        <td><span class="badge bg-light text-dark">{{ $wd->date }}</span></td>
                        <td>{{ $wd->city }}</td>
                        <td class="text-start" style="max-width: 200px; word-break: break-word;">
                            {{ $wd->description }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            @if($weddings->isEmpty())
            <div class="text-center text-muted py-4">
                <i class="fas fa-box-open fa-2x mb-2"></i>
                <p class="mb-0">No confirmed custom cake orders available.</p>
            </div>
            @endif
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection

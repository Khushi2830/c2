@extends('admin.parent')

@section('title')
    Manage Employee
@endsection

@section('content')
    <div class="container-fluid m-0 p-0">
        <div class="row gap-0">
            <!-- Sidebar -->
            <div class="col-lg-3 col-md-4 sidebar-column">
                @include("admin.sidebar")
            </div>

            <!-- Main Content -->
            <div class="col-lg-9 col-md-8 content-column mt-2">
                <div class="dashboard-header d-flex justify-content-between align-items-center mb-4">
                    <h2 class="page-title mb-0 fw-bold" style="color: #6f42c1;">View Employee Details</h2>
                    <div class="d-flex gap-3">
                        <a href="{{ route('manageApplication') }}" class="btn shadow-sm rounded-pill px-4"
                           style="background-color: #6f42c1; color: white;">Back</a>
                    </div>
                </div>

                <div class="row g-3">
                    @php
                        $fields = [
                            'Name' => $employee->name,
                            'Last Name' => $employee->last_name,
                            'Email' => $employee->email,
                            'Phone' => $employee->phone,
                            'Pincode' => $employee->pincode,
                            'State' => $employee->state,
                            'City' => $employee->city,
                            'Address' => $employee->address,
                            'Position' => $employee->position ?? 'N/A',
                            'Description' => $employee->description,
                            'Property Type' => $employee->property_type,
                        ];
                    @endphp

                    <!-- Employee Detail Cards -->
                    @foreach ($fields as $label => $value)
                        <div class="col-md-4">
                            <div class="border rounded p-3 bg-light h-100">
                                <div class="fw-semibold text-muted small">{{ $label }}</div>
                                <div class="fw-semibold">{{ $value }}</div>
                            </div>
                        </div>
                    @endforeach

                    <!-- Status and Approve Button -->
                    <div class="col-md-4">
                        <div class="border rounded p-3 bg-light h-100 d-flex flex-column justify-content-between">
                            <div>
                                <div class="fw-semibold text-muted small">Status</div>
                                <div class="fw-semibold mb-2">
                                    @if ($employee->status)
                                        <span class="badge bg-success">✅ Approved</span>
                                    @else
                                        <span class="badge bg-warning text-dark">⏳ Pending</span>
                                    @endif
                                </div>
                            </div>

                            @if (!$employee->status)
                                <form action="{{ route('admin.approveEmployee', $employee->id) }}" method="POST" class="mt-2">
                                    @csrf
                                    <button type="submit" class="btn w-100 rounded-pill text-white shadow-sm"
                                            style="background-color: #6f42c1;">
                                        <i class="bi bi-check2-circle me-1"></i> Approve Employee
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

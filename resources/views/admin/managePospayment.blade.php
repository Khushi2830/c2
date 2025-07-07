@extends('admin.parent')

@section('title')
    Manage Pos Payment
@endsection

@section('content')
    <div class="container-fluid m-0 p-0">
        <div class="row">
            <div class="col-lg-3 col-md-4 sidebar-column">
                @include("admin.sidebar")
            </div>
            <div class="col-lg-9 col-md-8 content-column mt-5 ">
                <div class="dashboard-header d-flex justify-content-between align-items-center mb-4">
                    <h2 class="page-title   mb-0 fw-bold " style="color: #6f42c1;">Manage Pos Payment</h2>
                </div>


                <div class="table-responsive shadow rounded-4 bg-white p-3">
                    <table class="table table-striped align-middle table-hover mb-0">
                        <thead class="table-primary text-center">
                            <tr>
                                <th>ID</th>
                                <th>Employee name</th>
                                <th>Cart_id</th>
                                <th>Amount</th>
                                <th>Method</th>
                                <th>date</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @forelse($cashs as $cash)
                                <tr>
                                    <td>{{ $cash->id }}</td>
                                    <td>{{ $cash->cart->employee->name ?? 'N/A' }}</td>
                                    <td>{{ $cash->cart_id }}</td>
                                    <td>₹{{ number_format($cash->amount, 2) }}</td>
                                    <td>{{ ucfirst($cash->method) }}</td>
                                    <td>{{ $cash->created_at->format('d M Y') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center text-muted">No POS payments found.</td>
                                </tr>
                            @endforelse

                        </tbody>

                    </table>


                    <div class="mt-3">
                        {{ $cashs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
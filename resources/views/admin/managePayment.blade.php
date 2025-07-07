@extends('admin.parent')

@section('title')
    Manage Payment
@endsection

@section('content')
    <div class="container-fluid m-0 p-0">
        <div class="row">
            <div class="col-lg-3 col-md-4 sidebar-column">
                @include("admin.sidebar")
            </div>
            <div class="col-lg-9 col-md-8 content-column mt-5 ">
                <div class="dashboard-header d-flex justify-content-between align-items-center mb-4">
                    <h2 class="page-title   mb-0 fw-bold " style="color: #6f42c1;">Manage Payment</h2>
                </div>


                <div class="table-responsive shadow rounded-4 bg-white p-3">
                    <table class="table table-striped align-middle table-hover mb-0">
                        <thead class="table-primary text-center">
                            <tr>
                                <th>ID</th>
                                <th>Payment_id</th>
                                <th>User_id</th>
                                <th>Order_id</th>
                                <th>email</th>
                                <th>date</th>
                                <th>Amount</th>
                                <th>Method</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payments as $payment)
                                <tr>
                                    <td>{{ $payment->id }}</td>
                                    <td>{{ $payment->payment_id }}</td>
                                    <td>{{ $payment->user->name ?? 'Guest' }}</td>
                                    <td>{{ $payment->order_id }}</td>
                                    <td>{{ $payment->email }}</td>
                                    <td>{{ $payment->created_at->format('d M Y') }}</td>
                                    <td>₹{{ number_format($payment->amount, 2) }}</td>
                                    <td>{{ ucfirst($payment->method ?? 'N/A') }}</td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>


                    <div class="mt-3">
                        {{ $payments->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
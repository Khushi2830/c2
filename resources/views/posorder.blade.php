@extends('p')
@section('title', 'POS Page')

@section('content 4')
    <div class="container-fluid mt-5 p-3">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="card shadow border border-2 rounded-4 mt-5" style="border-color: #9580ba;">
                    <div class="card-header text-white rounded-top-4" style="background-color: #9580ba;">
                        <h4 class="mb-0 fw-bold">
                            <i class="fas fa-receipt me-2"></i> Manage POS Orders
                        </h4>
                    </div>

                    <div class="card-body bg-white mt-4 px-4 py-3">
                        <div class="table-responsive">
                            <table
                                class="table table-bordered table-striped table-hover text-center align-middle shadow-sm">
                                <thead style="background-color: #9580ba; color: white;">
                                    <tr>
                                        <th>ID</th>
                                        <th>Employee Name</th>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($cartitems as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->cart->employee->name ?? 'N/A' }}</td>
                                            <td>{{ $item->product->title ?? 'Deleted Product' }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td class="text-success fw-semibold">₹{{ number_format($item->price, 2) }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-muted py-3">No POS orders found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            @php
                                $totalPrice = $cartitems->sum(function ($item) {
                                    return $item->price * $item->quantity;
                                });
                            @endphp

                            <div class="mt-4 text-end pe-2">
                                <h5 class="fw-bold">
                                    Total Price: <span class="text-success">₹{{ number_format($totalPrice, 2) }}</span>
                                </h5>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mt-4">
                            {{ $cartitems->links() }}
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
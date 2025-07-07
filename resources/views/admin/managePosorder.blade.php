@extends('admin.parent')

@section('title')
    Manage Pos Order
@endsection

@section('content')
    <div class="container-fluid m-0 p-0">
        <div class="row">
            <div class="col-lg-3 col-md-4 sidebar-column">
                @include("admin.sidebar")
            </div>
            <div class="col-lg-9 col-md-8 content-column mt-5 ">
                <div class="dashboard-header d-flex justify-content-between align-items-center mb-4">
                    <h2 class="page-title   mb-0 fw-bold " style="color: #6f42c1;">Manage Pos Order</h2>
                </div>


                <div class="table-responsive shadow rounded-4 bg-white p-3">
                    <table class="table table-striped align-middle table-hover mb-0">
                        <thead class="table-primary text-center">
                            <tr>
                                <th>ID</th>
                                <th>employee name</th>
                                <th>Product name</th>
                                <th>quantity</th>
                                <th>price</th>

                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @forelse($cartitems as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->cart->employee->name ?? 'N/A' }}</td>
                                    <td>{{ $item->product->title ?? 'Deleted Product' }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>₹{{ number_format($item->price, 2) }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No POS orders found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>


                    <div class="mt-3">
                        {{ $cartitems->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@extends('p')
@section('title', 'pos Page')

@section('content 4')
  <div class="container-fluid mt-5 p-3">
    <div class="row mt-4">

    <div class="clo-2"></div>
    

   <div class="col-8">
     <div class="container-fluid mt-5 p-3">
      <div class="row mt-4">

    
      <!-- Main Content Area -->
      <div class="col-8">
        <div class="dashboard-header d-flex justify-content-between align-items-center mb-4">
        <h2 class="page-title mb-0 fw-bold" style="color: #6f42c1;">Manage POS Orders</h2>
        </div>

        <div class="table-responsive shadow rounded-4 bg-white p-3">
        <table class="table table-striped align-middle table-hover mb-0">
          <thead class="table-primary text-center">
          <tr>
            <th>ID</th>
            <th>Employee Name</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
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
        <td colspan="5" class="text-center">No POS orders found.</td>
        </tr>
      @endforelse
          </tbody>
        </table>

        <div class="mt-3">
          {{ $cartitems->links() }}
        </div>
        </div>
      </div>

      <!-- Right spacing column -->
      <div class="col-2"></div>

      </div>
    </div>
   </div>


    <div class="clo-2"></div>
    </div>
  </div>
@endsection
<html>
<head>
  <title>Invoice</title>
  <style>
    body { font-family: sans-serif; margin: 20px; }
    .text-center { text-align: center; }
    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
    th, td { border: 1px solid #ccc; padding: 8px; }
    th { background-color: #f2f2f2; }
  </style>
</head>
<body onload="window.print()">
  <h2 class="text-center">Sales Invoice</h2>

  {{-- <p><strong>Employee:</strong> {{ $cash->employee->name }}</p> --}}
  <p><strong>Date:</strong> {{ $cash->created_at->format('d M Y, h:i A') }}</p>
  <p><strong>Payment Mode:</strong> {{ ucfirst($cash->method) }}</p>
  <p><strong>Amount Paid:</strong> ₹{{ number_format($cash->amount, 2) }}</p>
<table>
    <thead>
      <tr>
        <th>Product</th>
        <th>Qty</th>
        <th>Price</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cash->cart->items as $item)
        <tr>
          <td>{{ $item->product->title }}</td>
          <td>{{ $item->quantity }}</td>
          <td>₹{{ number_format($item->price, 2) }}</td>
          <td>₹{{ number_format($item->price * $item->quantity, 2) }}</td>
        </tr>
      @endforeach
    </tbody>
  </table> 

  <h4 class="text-end mt-4">Grand Total: ₹{{ number_format($cash->amount, 2) }}</h4>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Invoice bill</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 40px;
      color: #333;
      background-color: #fff;
      box-sizing: border-box;
    }

    .page-border {
      border: 2px dashed #6f42c1;
      padding: 30px;
      margin: auto;
      max-width: 850px;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.15);
      background-color: #fff;
    }

    .text-center {
      text-align: center;
    }

    .text-end {
      text-align: right;
    }

    .logo {
      display: block;
      margin: 0 auto 10px auto;
    }

    .shop-description {
      text-align: center;
      font-size: 14px;
      margin-bottom: 25px;
      color: #555;
    }

    h2 {
      margin-bottom: 10px;
      color: #6f42c1;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 25px;
    }

    table th,
    table td {
      padding: 10px;
      border-bottom: 1px solid #ddd;
      text-align: left;
    }

    table th {
      background-color: #6f42c1;
      color: white;
      text-transform: uppercase;
    }

    table tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    .grand-total {
      margin-top: 30px;
      font-size: 1.2rem;
      font-weight: bold;
      color: #6f42c1;
    }

    .info-label {
      font-weight: bold;
    }

    @media print {
      body {
        box-shadow: none;
        padding: 0;
      }

      .page-border {
        border: none;
        box-shadow: none;
        padding: 0;
        margin: 0;
      }

      .shop-description {
        color: #000;
      }
    }
  </style>
</head>

<body onload="window.print()">
  <div class="page-border">
    <!-- Logo and Shop Info -->
    <img src="{{ asset('logo.png') }}" width="180" class="logo" alt="Creamer Logo">

    <div class="shop-description">
      <strong>Creamer Bakery Shop</strong><br>
      Freshly Baked Happiness Everyday!<br>
      123 Delight Street, Pastry Town, India<br>
      Phone: +91-9876543210 | creamerbakery@example.com
    </div>

    <h2 class="text-center">Sales Invoice</h2>

    <p><span class="info-label">Date:</span> {{ $cash->created_at->format('d M Y, h:i A') }}</p>
    <p><span class="info-label">Payment Mode:</span> {{ ucfirst($cash->method) }}</p>
    <p><span class="info-label">Amount Paid:</span> ₹{{ number_format($cash->amount, 2) }}</p>

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

    <p class="grand-total text-end">Grand Total: ₹{{ number_format($cash->amount, 2) }}</p>
  </div>
</body>

</html>
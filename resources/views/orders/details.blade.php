<!-- resources/views/orders/details.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    body {
        background-image: url('{{ asset('images/8169685.jpg') }}');
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        height: 100vh;
    }
</style>
<body>
    <div class="container my-4">
        <h1>Order Details</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Product Name: {{ $order->product_name }}</h5>
                <p><strong>Quantity:</strong> {{ $order->quantity }}</p>
                <p><strong>Price:</strong> ${{ number_format($order->price, 2) }}</p>
                <p><strong>Created At:</strong> {{ $order->created_at->format('F j, Y, g:i a') }}</p>
                <p><strong>Updated At:</strong> {{ $order->updated_at->format('F j, Y, g:i a') }}</p>
            </div>
        </div>

        <div class="mt-3">
            <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back to Orders</a>
            <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning">Edit Order</a>
            <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this order?')">Delete Order</button>
            </form>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Order</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
          crossorigin="anonymous">
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
        <h1>Edit Order</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Edit form -->
        <form action="{{ route('orders.update', $order->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="product_name" class="form-label">Product Name:</label>
        <input type="text" id="product_name" name="product_name" class="form-control" value="{{ old('product_name', $order->product_name) }}" required>
    </div>

    <div class="mb-3">
        <label for="quantity" class="form-label">Quantity:</label>
        <input type="number" id="quantity" name="quantity" class="form-control" value="{{ old('quantity', $order->quantity) }}" required>
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price:</label>
        <input type="text" id="price" name="price" class="form-control" value="{{ old('price', $order->price) }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Update Order</button>
</form>


        <a href="{{ route('orders.index') }}" class="btn btn-secondary mt-3">Back to Orders</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pzjw8f+ua7Kw1TIq0t5+vdeF0Nce9d+GVXN3Zm9Kk1MOMk5vpaM1h1vZlVh6KFLZ"
            crossorigin="anonymous"></script>
</body>
</html>

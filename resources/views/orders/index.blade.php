<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
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
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center; 
        text-align: center; 
        margin: 0; 
    }

    .container {
        max-width: 800px; /* Optional: limit the max width of the container */
        width: 100%; /* Full width */
    }

    .row-cols-md-2 {
        justify-content: center; /* Center the orders in row for medium screens */
    }

    .row-cols-lg-3 {
        justify-content: center; /* Center the orders in row for large screens */
    }

    .row-cols-xl-5 {
        justify-content: center; /* Center the orders in row for extra-large screens */
    }

    .alert {
        margin-top: 20px;
    }
    h1, h3 {
        color: yellow;
    }
    .btn-primary {
        background-color: #ff6347; 
        border-color: #ff6347;     
    }
    .btn-primary:hover {
        background-color: #ff4500; 
    }

</style>
<body>
    <div class="container my-4">
        <h1>Welcome to Sunglass</h1>
        <h3>May I take your order?</h3>
        <br></br>
        <a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">Order Now!</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-5 g-4">
            @foreach ($orders as $order)
                <div class="col">
                    <div class="card shadow-sm h-100">
                        <a href="{{ route('orders.show', $order->id) }}" class="text-decoration-none">
                            <div class="card-body">
                                <h5 class="card-title">{{ $order->product_name }}</h5>
                                <p class="card-text"><strong>Quantity:</strong> {{ $order->quantity }}</p>
                                <p class="card-text"><strong>Price:</strong> ${{ number_format($order->price, 2) }}</p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pzjw8f+ua7Kw1TIq0t5+vdeF0Nce9d+GVXN3Zm9Kk1MOMk5vpaM1h1vZlVh6KFLZ"
            crossorigin="anonymous"></script>
</body>
</html>

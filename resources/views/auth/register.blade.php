<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}"> <!-- Link external CSS -->
</head>

<body>
    <div class="login-container">
        <!-- Left Section for Logo (optional) -->
        <div class="logo-section">
            <img src="{{ asset('images/logo.png') }}" alt="Luceria University Logo">
        </div>

        <!-- Right Section for Form -->
        <div class="form-section">
            <h2>Register</h2>

            <!-- Display errors if any -->
            @if ($errors->any())
            <div class="custom-alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


            <!-- Registration Form -->
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}" required>
                <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                <button type="submit">Register</button>
                <div class="links">
                <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
                 </div>
            </form>
        </div>
    </div>
</body>

</html>

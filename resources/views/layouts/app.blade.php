<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Dashboard')</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>

<body>
  <div class="container">
    <!-- Include the navigation bar or other common elements here -->
    <div class="navbar">
      <!-- Navbar content -->
    </div>

    <!-- Content of the page will be injected here -->
    <div class="content">
      @yield('content')
    </div>
  </div>

  <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile</title>
  <link rel="stylesheet" href="{{ asset('css/profile.css') }}" />
</head>

<body>
  <div class="container">
    <div class="sidebar">
      <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" />
      </div>
      <ul class="menu">
        <li class="menu-item">
          <a href="{{ route('dashboard') }}"><span>Dashboard</span></a>
        </li>
        <li class="menu-item">
          <a href="{{ route('profile') }}"><span>Profile</span></a>
        </li>
        <li class="menu-item">
          <a href="{{ route('schedule') }}"><span>Schedule</span></a>
        </li>
        <li class="menu-item">
          <a href="{{ route('payment') }}"><span>Payment</span></a>
        </li>
      </ul>
      <div class="logout">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit">Log Out</button>
        </form>
      </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
      <div class="profile-container">
        <div class="profile-picture">
          <!-- Display current profile picture or default image if not set -->




          <!-- Form to upload new profile picture -->
          <form method="POST" action="{{ route('updateProfilePicture') }}" enctype="multipart/form-data">
            @csrf
            <img id="profile-image"
              src="{{ asset('storage/' . (Auth::user()->profile_picture ?? 'default-profile.png')) }}"
              alt="Profile Picture" />
            <input type="file" name="profile_picture" accept="image/*" onchange="previewImage(event)" />

          </form>

        </div>

        <div class="profile-details">
          <div class="detail">
            <span class="label">Name</span>
            <span class="value">{{ Auth::user()->name }}</span>
          </div>
          <div class="detail">
            <span class="label">Student ID</span>
            <span class="value">{{ Auth::user()->id }}</span>
          </div>
          <div class="detail">
            <span class="label">Level</span>
            <span class="value">1st Year</span>
          </div>
          <div class="detail">
            <span class="label">Department</span>
            <span class="value">Information Technology</span>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="script.js"></script>
</body>

</html>
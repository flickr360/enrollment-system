<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
  <div class="container">
    <div class="sidebar">
      <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" />
      </div>
      <ul class="menu">
        <li class="menu-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="menu-item"><a href="{{ route('profile') }}">Profiles</a></li>
        <li class="menu-item"><a href="{{ route('schedule') }}">Schedule</a></li>
        <li class="menu-item"><a href="{{ route('payment') }}">Payment</a></li>
      </ul>
      <div class="logout">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit">Log Out</button>
        </form>
      </div>
    </div>

    <div class="main-content">
      <div class="left-section">
        <div class="greeting">
          <h1>Hi, {{ $user->name }}!<span style="font-size: 1.2em;"></span> 📖</h1>
          <p>Welcome to your dashboard</p>
          <p>Your goals are waiting—let's achieve them together today!</p>
        </div>
      </div>

      <div class="right-section">
        <div class="widget notifications">
          <h3>Notifications</h3>
          <ul class="notification-list">
            <li>
              <span class="notification-text">Grades Updated</span>
              <span class="notification-time">5 minutes ago</span>
            </li>
            <li>
              <span class="notification-text">Your course "Math 101" starts tomorrow</span>
              <span class="notification-time">1 hour ago</span>
            </li>
            <li>
              <span class="notification-text">AAAAAAAAAAAAAAA</span>
              <span class="notification-time">2 hours ago</span>
            </li>
          </ul>

        </div>

        <div class="widget activity-calendar">
          <h3>Activity Calendar</h3>
          <div class="calendar">
            <ul class="event-list">
              <li>
                <span class="event-date">December 25</span>
                <span class="event-name">Christmas</span>
              </li>
              <li>
                <span class="event-date">January 1</span>
                <span class="event-name">New Year's Day</span>
              </li>
              <li>
                <span class="event-date">February 14</span>
                <span class="event-name">Valentine's Day</span>
              </li>
              <li>
                <span class="event-date">April 9</span>
                <span class="event-name">Araw ng Kagitingan</span>
              </li>
              <li>
                <span class="event-date">August 21</span>
                <span class="event-name">Ninoy Aquino Day</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
  </div>
</body>

</html>
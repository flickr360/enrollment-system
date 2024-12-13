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

    <!-- Left Section -->
    <div class="l-container">
      <div class="left-section">
        <div class="greeting">
          <h1>Hi, {{ $user->name }}! 📖</h1>
          <p>Welcome to your dashboard</p>
          <p>Your goals are waiting—let's achieve them together today!</p>
        </div>
      </div>
      
      <!-- Widget: Selected Courses -->
      <div class="widget selected-courses">
        <h3>Your Selected Courses</h3>
        <ul class="selected-course-list">
          @forelse ($selectedSubjects as $subject)
            <li>
              <strong>{{ $subject->course->subject }} - {{ $subject->course->section }}</strong>
              <p>{{ $subject->course->days }}, {{ $subject->course->time }}</p>
              <form action="{{ route('deleteSubject', $subject->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
              </form>
            </li>
          @empty
            <li>No courses selected yet.</li>
          @endforelse
        </ul>
        
        <!-- Update All Courses Button -->
        <form action="{{ route('schedule') }}" method="GET" style="display: inline;">
          @csrf
          <button type="submit" id="update-courses">Update All Courses</button>
        </form>

        <!-- Delete All Button -->
        <form action="{{ route('deleteAllSubjects') }}" method="POST" style="display: inline;">
          @csrf
          @method('DELETE')
          <button id="delete-courses" type="submit">Delete All Courses</button>
        </form>
      </div>
    </div>

    <!-- Right Section -->
    <div class="r-container">
      <div class="right-section">
        <!-- Widget: Notifications -->
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
          </ul>
        </div>

        <p>-----------------------------------------------------------------</p>
        <!-- Widget: Activity Calendar -->
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
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>

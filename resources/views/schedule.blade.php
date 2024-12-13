<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <link rel="stylesheet" href="{{ asset('css/schedule.css') }}" />
</head>

<body>
    <div class="sidebar">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" />
        </div>
        <ul class="menu">
            <li class="menu-item">
                <a href="{{ route('dashboard') }}"><span>Dashboard</span></a>
            </li>
            <li class="menu-item">
                <a href="{{ route('profile') }}"><span>Profiles</span></a>
            </li>
            <li class="menu-item active">
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

    <div class="container">
        <!-- Container for Schedule and Courses -->
        <div class="main-content">
            <!-- Weekly Schedule -->
            <div class="schedule-wrapper"> <!-- Added wrapper for scrolling -->
                <div class="schedule" id="schedule">
                    <!-- Header Row -->
                    <div class="time"></div>
                    <div class="header">Monday</div>
                    <div class="header">Tuesday</div>
                    <div class="header">Wednesday</div>
                    <div class="header">Thursday</div>
                    <div class="header">Friday</div>
                    <div class="header">Saturday</div>
                    <div class="header">Sunday</div>

                    <!-- Time Slots -->
                    <div class="time">7 AM</div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div class="time">8 AM</div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div class="time">9 AM</div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div class="time" id="10 AM">10 AM</div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div class="time" id="11 AM">11 AM</div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div class="time" id="12 AM">12 AM</div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div class="time" id="1 PM">1 PM</div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div class="time" id="2 PM">2 PM</div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div class="time" id="3 PM">3 PM</div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div class="time" id="4 PM">4 PM</div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div class="time" id="5 PM">5 PM</div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div class="time" id="6 PM">6 PM</div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div class="time" id="7 PM">7 PM</div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div class="time" id="8 PM">8 PM</div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div class="time" id="9 PM">9 PM</div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>

                <form method="POST" action="{{ route('submitCourse') }}">
                    @csrf
                    <div class="courses">
                        <!-- Search bar to filter courses by subject -->
                        <div class="top-bar">
                            <input type="text" class="search-box" id="search-subject" placeholder="Search subjects..." onkeyup="filterCourses()">
                            <div class="low-bar">
                            <button type="submit" id="submit-schedule">Submit</button>
                            <button id="remove-all-courses">Remove All Courses</button>
                        </div>
                        </div>

                        <!-- Loop through courses -->
                        @foreach ($courses as $course)
                            <a href="javascript:void(0);" class="course-box" data-subject="{{ $course->subject }}" data-time="{{ $course->time }}" data-day="{{ $course->days }}">
                                <input type="checkbox" name="selected_subjects[]" value="{{ $course->id }}">
                                <h3>{{ $course->subject }} - {{ $course->section }}</h3>
                                <p>{{ $course->days }}, {{ $course->time }}</p>    
                            </a>
                        @endforeach
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>

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

            <div class="courses">
                <!-- Dropdown for Section 1 -->
                <button class="dropdown-btn">Section 1</button>
                <div class="dropdown-container section1">
                    <a href="javascript:void(0);" class="course-box" data-subject="Math 101" data-time="8 AM to 9 AM"
                        data-day="Monday,Wednesday">
                        <h3>Math 101 - Section 1</h3>
                        <p>Mon & Wed, 8 AM - 9 AM</p>
                    </a>
                    <a href="javascript:void(0);" class="course-box" data-subject="History 201"
                        data-time="10 AM to 11 AM" data-day="Monday,Wednesday">
                        <h3>History 201 - Section 1</h3>
                        <p>Mon & Wed, 10 AM - 11 AM</p>
                    </a>
                    <a href="javascript:void(0);" class="course-box" data-subject="Physics 305" data-time="1 PM to 2 PM"
                        data-day="Monday,Wednesday,Friday">
                        <h3>Physics 305 - Section 1</h3>
                        <p>Mon, Wed, Fri, 1 PM - 2 PM</p>
                    </a>
                    <a href="javascript:void(0);" class="course-box" data-subject="English Lit" data-time="3 PM to 4 PM"
                        data-day="Tuesday,Thursday">
                        <h3>English Lit - Section 1</h3>
                        <p>Tue & Thu, 3 PM - 4 PM</p>
                    </a>
                    <a href="javascript:void(0);" class="course-box" data-subject="Art 101" data-time="5 PM to 6 PM"
                        data-day="Tuesday,Friday">
                        <h3>Art 101 - Section 1</h3>
                        <p>Tue & Fri, 5 PM - 6 PM</p>
                    </a>
                    <a href="javascript:void(0);" class="course-box" data-subject="Computer Science 101"
                        data-time="7 PM to 8 PM" data-day="Monday,Thursday">
                        <h3>Computer Science 101 - Section 1</h3>
                        <p>Mon & Thu, 7 PM - 8 PM</p>
                    </a>
                    <a href="javascript:void(0);" class="course-box" data-subject="Chemistry 102"
                        data-time="9 AM to 10 AM" data-day="Wednesday,Friday">
                        <h3>Chemistry 102 - Section 1</h3>
                        <p>Wed & Fri, 9 AM - 10 AM</p>
                    </a>
                    <a href="javascript:void(0);" class="course-box" data-subject="Psychology 201"
                        data-time="11 AM to 12 PM" data-day="Monday,Thursday">
                        <h3>Psychology 201 - Section 1</h3>
                        <p>Mon & Thu, 11 AM - 12 PM</p>
                    </a>
                    <a href="javascript:void(0);" class="course-box" data-subject="Philosophy 101"
                        data-time="2 PM to 3 PM" data-day="Tuesday,Saturday">
                        <h3>Philosophy 101 - Section 1</h3>
                        <p>Tue & Sat, 2 PM - 3 PM</p>
                    </a>
                    <a href="javascript:void(0);" class="course-box" data-subject="Economics 301"
                        data-time="4 PM to 5 PM" data-day="Monday,Saturday">
                        <h3>Economics 301 - Section 1</h3>
                        <p>Mon & Sat, 4 PM - 5 PM</p>
                    </a>
                </div>
                <button class="show-section-btn" data-section="section1">Show Section 1 Courses</button>

                <!-- Dropdown for Section 2 -->
                <button class="dropdown-btn">Section 2</button>
                <div class="dropdown-container section2">
                    <a href="javascript:void(0);" class="course-box" data-subject="Math 101" data-time="9 AM to 10 AM"
                        data-day="Tuesday,Thursday">
                        <h3>Math 101 - Section 2</h3>
                        <p>Tue & Thu, 9 AM - 10 AM</p>
                    </a>
                    <a href="javascript:void(0);" class="course-box" data-subject="History 201"
                        data-time="11 AM to 12 PM" data-day="Tuesday,Friday">
                        <h3>History 201 - Section 2</h3>
                        <p>Tue & Fri, 11 AM - 12 PM</p>
                    </a>
                    <a href="javascript:void(0);" class="course-box" data-subject="Physics 305" data-time="2 PM to 3 PM"
                        data-day="Monday,Saturday">
                        <h3>Physics 305 - Section 2</h3>
                        <p>Mon & Sat, 2 PM - 3 PM</p>
                    </a>
                    <a href="javascript:void(0);" class="course-box" data-subject="English Lit" data-time="4 PM to 5 PM"
                        data-day="Monday,Saturday">
                        <h3>English Lit - Section 2</h3>
                        <p>Mon & Sat, 4 PM - 5 PM</p>
                    </a>
                    <a href="javascript:void(0);" class="course-box" data-subject="Art 101" data-time="6 PM to 7 PM"
                        data-day="Wednesday,Saturday">
                        <h3>Art 101 - Section 2</h3>
                        <p>Wed & Sat, 6 PM - 7 PM</p>
                    </a>
                    <a href="javascript:void(0);" class="course-box" data-subject="Computer Science 101"
                        data-time="8 PM to 9 PM" data-day="Tuesday,Friday">
                        <h3>Computer Science 101 - Section 2</h3>
                        <p>Tue & Fri, 8 PM - 9 PM</p>
                    </a>
                    <a href="javascript:void(0);" class="course-box" data-subject="Chemistry 102"
                        data-time="7 AM to 8 AM" data-day="Monday,Thursday">
                        <h3>Chemistry 102 - Section 2</h3>
                        <p>Mon & Thu, 10 AM - 11 AM</p>
                    </a>
                    <a href="javascript:void(0);" class="course-box" data-subject="Psychology 201"
                        data-time="12 PM to 1 PM" data-day="Wednesday,Saturday">
                        <h3>Psychology 201 - Section 2</h3>
                        <p>Wed & Sat, 12 PM - 1 PM</p>
                    </a>
                    <a href="javascript:void(0);" class="course-box" data-subject="Philosophy 101"
                        data-time="11 AM to 12 PM" data-day="Monday,Thursday">
                        <h3>Philosophy 101 - Section 2</h3>
                        <p>Mon & Thu, 3 PM - 4 PM</p>
                    </a>
                    <a href="javascript:void(0);" class="course-box" data-subject="Economics 301"
                        data-time="5 PM to 6 PM" data-day="Tuesday,Saturday">
                        <h3>Economics 301 - Section 2</h3>
                        <p>Tue & Sat, 5 PM - 6 PM</p>
                    </a>
                </div>
                <button class="show-section-btn" data-section="section2">Show Section 2 Courses</button>

                <!-- Add a "Remove All Courses" button -->
                <button id="remove-all-courses">Remove All Courses</button>


            </div>
        </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
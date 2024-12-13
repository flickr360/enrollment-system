document.querySelectorAll('.dropdown-btn').forEach(button => {
    button.addEventListener('click', () => {
        // Toggle the display of the corresponding section
        const sectionClass = button.textContent.toLowerCase().replace(' ', ''); // Get class name from button text (Section 1 or Section 2)
        const section = document.querySelector(`.dropdown-container.${sectionClass}`);
        
        // Toggle visibility of the section
        section.style.display = section.style.display === 'block' ? 'none' : 'block';
    });
});

// Function to handle course addition to schedule when clicked
document.querySelectorAll('.course-box').forEach(course => {
    course.addEventListener('click', function () {
        const subject = this.getAttribute('data-subject');
        const time = this.getAttribute('data-time');
        const days = this.getAttribute('data-day').split(','); // Split multiple days by comma
        const courseId = subject + time; // Use subject + time as unique ID to avoid duplication

        // Map days of the week to column indexes
        const dayIndex = {
            "Sunday": 1,
            "Monday": 2,
            "Tuesday": 3,
            "Wednesday": 4,
            "Thursday": 5,
            "Friday": 6,
            "Saturday": 7
        };

        // Map times to row indexes (adjusting for the header row)
        const timeIndex = {
            "7 AM": 1,
            "8 AM": 2,
            "9 AM": 3,
            "10 AM": 4,
            "11 AM": 5,
            "12 PM": 6,
            "1 PM": 7,
            "2 PM": 8,
            "3 PM": 9,
            "4 PM": 10,
            "5 PM": 11,
            "6 PM": 12,
            "7 PM": 13,
            "8 PM": 14,
            "9 PM": 15
        };

        // Extract time range (for courses spanning multiple slots)
        let [startTime, endTime] = time.split(' to ');
        endTime = endTime || startTime; // Default to the same time if no end time is provided

        const startRow = timeIndex[startTime];
        const endRow = timeIndex[endTime];

        // Check if the course has already been added to any time slot
        let overlapDetected = false;

        days.forEach(day => {
            const column = dayIndex[day];

            // Loop through all the time slots this course covers and check if it's already there
            for (let row = startRow; row <= endRow; row++) {
                const slot = document.querySelector(`.schedule div:nth-child(${column + row * 8})`);

                if (!slot) continue; // Skip if the slot doesn't exist

                // Check if the course already exists in the slot
                if (slot.children.length > 0) {
                    overlapDetected = true;
                    break;
                }
            }
        });

        if (overlapDetected) {
            alert('Conflict detected! This course cannot be added.');
            this.querySelector('input[type="checkbox"]').disabled = true; // Disable checkbox
            this.classList.add('conflict'); // Optionally add a red border
            return;
        }

        this.querySelector('input[type="checkbox"]').checked = true;

        if (document.querySelector(`[data-id="${courseId}"]`)) {
            alert('Error: This course is already added to your schedule!');
            return;
        }

        // Loop through all the days the course is scheduled on and add it to the calendar
        days.forEach(day => {
            const column = dayIndex[day];

            for (let row = startRow; row <= endRow; row++) {
                const slot = document.querySelector(`.schedule div:nth-child(${column + row * 8})`);

                if (!slot) continue; 

                // Create a new subject div and add it to the slot
                const subjectDiv = document.createElement('div');
                subjectDiv.className = 'subject';
                subjectDiv.textContent = subject;
                subjectDiv.setAttribute('data-id', courseId);

                // Add an event listener to remove the subject from all instances when clicked
                subjectDiv.addEventListener('click', function (e) {
                    e.stopPropagation(); // Prevent the event from propagating to the slot
                    document.querySelectorAll(`[data-id="${courseId}"]`).forEach(item => {
                        item.parentElement.removeChild(item);
                    });
                });

                slot.appendChild(subjectDiv);
            }
        });
    });
});

// Function to handle showing all courses of a section on the schedule
document.querySelectorAll('.show-section-btn').forEach(button => {
    button.addEventListener('click', function () {
        const sectionClass = this.getAttribute('data-section'); // Get section (section1 or section2)

        // Check if the opposite section has already been added
        if (sectionClass === 'section1' && document.querySelector('.show-section-btn[data-section="section2"].added')) {
            alert('Warning: Section 2 courses are already added. Adding Section 1 courses will conflict with your schedule.');
            return;
        }

        if (sectionClass === 'section2' && document.querySelector('.show-section-btn[data-section="section1"].added')) {
            alert('Warning: Section 1 courses are already added. Adding Section 2 courses will conflict with your schedule.');
            return;
        }

        // Check if the courses from the section are already added
        if (this.classList.contains('added')) {
            alert('Courses from this section are already added to the schedule!');
            return;
        }

        const courses = document.querySelectorAll(`.dropdown-container.${sectionClass} .course-box`);

        // Loop through the courses and add them to the schedule
        courses.forEach(course => {
            const subject = course.getAttribute('data-subject');
            const time = course.getAttribute('data-time');
            const days = course.getAttribute('data-day').split(',');
            const courseId = subject + time;

            // Map days and times like earlier
            const dayIndex = {
                "Sunday": 1,
                "Monday": 2,
                "Tuesday": 3,
                "Wednesday": 4,
                "Thursday": 5,
                "Friday": 6,
                "Saturday": 7
            };

            const timeIndex = {
                "7 AM": 1,
                "8 AM": 2,
                "9 AM": 3,
                "10 AM": 4,
                "11 AM": 5,
                "12 PM": 6,
                "1 PM": 7,
                "2 PM": 8,
                "3 PM": 9,
                "4 PM": 10,
                "5 PM": 11,
                "6 PM": 12,
                "7 PM": 13,
                "8 PM": 14,
                "9 PM": 15
            };

            let [startTime, endTime] = time.split(' to ');
            endTime = endTime || startTime; // Default to the same time if no end time is provided

            const startRow = timeIndex[startTime];
            const endRow = timeIndex[endTime];

            days.forEach(day => {
                const column = dayIndex[day];

                for (let row = startRow; row <= endRow; row++) {
                    const slot = document.querySelector(`.schedule div:nth-child(${column + row * 8})`);
                    if (!slot) continue;

                    const subjectDiv = document.createElement('div');
                    subjectDiv.className = 'subject';
                    subjectDiv.textContent = subject;
                    subjectDiv.setAttribute('data-id', courseId);

                    // Add an event listener to remove the subject from all instances when clicked
                    subjectDiv.addEventListener('click', function (e) {
                        e.stopPropagation(); // Prevent event from propagating to the slot
                        document.querySelectorAll(`[data-id="${courseId}"]`).forEach(item => {
                            item.parentElement.removeChild(item);
                        });

                        // Reset button state when the course is deleted
                        const showButton = document.querySelector(`.show-section-btn[data-section="${sectionClass}"]`);
                        showButton.classList.remove('added');
                        showButton.disabled = false;
                    });

                    slot.appendChild(subjectDiv);
                }
            });
        });

        // Mark this section as added so the button doesn't trigger again
        this.classList.add('added');
        // Optionally disable the button to prevent further clicks
        this.disabled = true;
    });
});

function filterCourses() {
    var input = document.getElementById('search-subject').value.toLowerCase();
    var courseBoxes = document.querySelectorAll('.course-box');

    // Loop through all course boxes
    courseBoxes.forEach(function(course) {
        var subject = course.getAttribute('data-subject').toLowerCase();

        // If the subject includes the search input, show the course, otherwise hide it
        if (subject.indexOf(input) > -1) {
            course.style.display = '';  // Show the course
        } else {
            course.style.display = 'none';  // Hide the course
        }
    });
}

// Function to remove all courses from the schedule when the "Remove All Courses" button is clicked
document.getElementById('remove-all-courses').addEventListener('click', function () {
    const allSubjects = document.querySelectorAll('.subject');

    // Remove all subjects from the schedule
    allSubjects.forEach(subject => {
        subject.parentElement.removeChild(subject);
    });

    // Reset the state of all show-section buttons when all courses are removed
    document.querySelectorAll('.show-section-btn').forEach(button => {
        button.classList.remove('added');
        button.disabled = false;
    });
});


// sa picture to sa profile
 function previewImage(event) {
    const file = event.target.files[0];  // Get the first file from the input
    const reader = new FileReader();     // Create a FileReader to read the file

    // Check if the selected file is an image (optional but recommended)
    if (file && file.type.startsWith('image/')) {
        reader.onload = function(e) {
            const profileImage = document.getElementById('profile-image');
            profileImage.src = e.target.result;  // Set the uploaded image as the profile picture
        }

        reader.readAsDataURL(file);  // Read the image file as a Data URL
    } else {
        alert("Please select a valid image file."); // Show an alert if the file is not an image
    }
}
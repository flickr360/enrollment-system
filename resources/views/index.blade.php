<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        /* Ensure full height for the body */
        html, body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Set background image */
        body {
            background-image: url('{{ asset('background.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* Style for the side panel */
        .sidepanel {
            position: fixed;   /* Fixed to the right */
            top: 0;
            right: 0;
            width: 300px;      /* Width of the side panel */
            height: 100%;      /* Full height of the page */
            background-color: rgba(0, 0, 0, 0.5); /* Transparent background */
            padding: 20px;
            box-sizing: border-box;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .sidepanel h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .sidepanel input {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .sidepanel button {
            padding: 12px 20px;
            background-color: #4CAF50; /* Green background */
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .sidepanel button:hover {
            background-color: #45a049; 
        }

    </style>
</head>
<body>
    <div class="sidepanel">
        <h2>Login</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf

            <input type="text" name="student_id" placeholder="Student ID" required>

            <input type="text" name="username" placeholder="Username" required>

            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>

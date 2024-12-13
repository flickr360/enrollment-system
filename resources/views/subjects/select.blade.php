<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Subjects</title>
</head>
<body>
    <h1>Select Your Subjects</h1>
    <form action="{{ route('subjects.store') }}" method="POST">
        @csrf
        <label>
            <input type="checkbox" name="subjects[]" value="Math 101"> Math 101
        </label><br>
        <label>
            <input type="checkbox" name="subjects[]" value="History 201"> History 201
        </label><br>
        <label>
            <input type="checkbox" name="subjects[]" value="Science 301"> Science 301
        </label><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
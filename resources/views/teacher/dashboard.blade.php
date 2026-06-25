<!DOCTYPE html>
<html lang="en">
<head>
    <title>Teacher Dashboard</title>
</head>
<body>
    <h1>Welcome, Teacher: {{ auth()->user()->name }}</h1>
    <hr>

    <h3>Students List (View Only)</h3>
    <table border="1" cellpadding="10">
        <tr>
            <th>Student Name</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>Student User</td>
            <td>student@test.com</td>
        </tr>
    </table>

    <br>
    <a href="{{ route('profile.edit') }}">Edit My Profile</a>
</body>
</html>
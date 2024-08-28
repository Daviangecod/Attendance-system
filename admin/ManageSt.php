<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create users</title>
</head>
<body>
<div class="user">
                <h3>Create User</h3>
                <label for="name">Name</label>
                <input type="text" placeholder="Enter name" name="name">

                <label for="username">Username</label>
                <input type="text" placeholder="Enter username" name="username">

                <label for="gender">Gender</label>
                <input type="text" placeholder="Gender ex: female" name="gender">

                <label for="email">Email</label>
                <input type="email" placeholder="Enter email" name="email">

                <label for="password">Password</label>
                <input type="password" placeholder="Password" name="password">

                <label for="phone">Phone number</label>
                <input type="number" placeholder="Phone number" name="phoneNumber">

                <div class="status">
                <label for="phone">Role:</label>
                    <input type="radio" name="gender" value="male">Admin
                    <input type="radio" name="gender" value="female">Teacher
                    <input type="radio" name="gender" value="female">Student
                </div>

                <button>Sign up</button>
            </div>
</body>
</html>
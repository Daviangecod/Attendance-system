<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance System</title>
    <style>
        /* Basic styling for the page */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Attendance System</h1>
        <p>Welcome to our attendance portal! Mark your attendance below:</p>
        <form>
            <label for="studentName">Student Name:</label>
            <input type="text" id="studentName" placeholder="Enter your name">
            <button type="button" onclick="markAttendance()">Mark Attendance</button>
        </form>
        <p id="attendanceMessage"></p>
        <script>
            function markAttendance() {
                const studentName = document.getElementById('studentName').value;
                // You can add your attendance logic here (e.g., save to a database).
                // For now, let's display a message.
                document.getElementById('attendanceMessage').textContent = `Attendance marked for ${studentName}!`;
            }
        </script>
    </div>
</body>
</html>

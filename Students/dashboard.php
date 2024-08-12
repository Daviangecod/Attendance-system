<?php
require __DIR__."/../config/database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Attendance Dashboard</title>
    <link rel="stylesheet" href="dashStu.css">
</head>
<body>
<div class="container">

<div class="sidebar">
    <div class="sidebar-header">
        <img src="escho.png" alt="Logo" class="logo">
    </div>
    <ul class="sidebar-menu">
        <li class="menu-item active">
            <a href="dashboard.php">
            <i class="fas fa-tachometer-alt"></i>
            <i class="fa-solid fa-user"></i>
                <span>Profile</span>
            </a>
        </li>
        <li class="menu-item">
            <a href="#">
            <i class="fa fa-users" aria-hidden="true"></i>
                <span>Attendance records</span>
            </a>
        </li>
        <li class="menu-item">
            <a href="subject/student.php">
            <i class="fa-solid fa-school"></i>
                <span>View courses</span>
            </a>
        </li>
        <li class="menu-item">
            <a href="pages/settings.html">
            <i class="fa fa-cog" aria-hidden="true"></i>
                <span>Settings</span>
            </a>
        </li>
    </ul>
</div>

        <main class="main-content">
            <h1>Student Attendance Dashboard</h1>
            
            <div class="form-container">
                <h2>Add Attendance Record</h2>
                <form id="attendanceForm" method="POST" action="tblAction.php">
                    <label for="studentName">Student Name:</label>
                    <input type="text" id="name" name="name" required placeholder="Enter student name">
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" required>
                    
                    
                    <label for="attendance">Attendance:</label>
                    <select id="attendance" name="attendance" required>
                        <option value="Present">Present</option>
                        <option value="Absent">Absent</option>
                    </select>
                    
                    <button type="submit">Add Record</button>
                </form>
            </div>

            <div class="attendance-list">
                <h2>Attendance Records</h2>
                <table name="attendanceTable"id="attendanceTable">
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Attendance</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        
                        $query= 'SELECT * FROM attends';
                        $result= mysqli_query($connection, $query);
                        ?>
                    <?php if(mysqli_num_rows($result)>0):?>
            <?php while($attends = mysqli_fetch_assoc($result)):?>
            <tr>
                <td id="name"> <?= $attends['name']?></td>
                <td id="attendance"> <?= $attends['attendance']?></td>
                <td id="attendance"> <?= $attends['date']?></td>
               
          </script>
          </td>


            </tr>
            <?php endwhile ?>
            <?php endif?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <script></script>
    <footer>
    &copy; 2024 Eschosys Technologies
</footer>
</body>
</html>
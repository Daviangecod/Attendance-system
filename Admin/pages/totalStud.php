<?php

require __DIR__."/../../config/database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Students</title>
    <link rel="stylesheet" href="totalStud.css">
</head>
<body>

<div class="dashboard-container">
        <div class="sidebar">
            <div class="sidebar-header">
                <img src="escho.png" alt="Logo" class="logo">
            </div>
            <ul class="sidebar-menu">
                <li class="menu-item active">
                    <a href="dashboard.php">
                    <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="students.html">
                    <i class="fa fa-users" aria-hidden="true"></i>
                        <span>Students</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages/ManageClass.php">
                    <i class="fa-solid fa-school"></i>
                        <span>Classes</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages/reports.html">
                    <i class="fas fa-chart-bar"></i>
                        <span>Reports</span>
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

        <div class="main-content">
            <header class="header">
                <div class="header-left">
                <div class="header-left">
                    <button class="menu-toggle">
                        <span class="menu-toggle-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
                        <span class="menu-toggle-text"></span>
                    </button>
                </div>

                </div>
                <div class="header-right">
                    <div class="profile">
                        <a href="profile.php"><img src="escho.png" alt="Profile" class="profile-image"></a>
                        <span>profile</span>
                    </div>
                </div>
                </header>
</div>

<div class="createStud">
<h3>Add Student's information</h3>
                <form action="actionStud.php" method="POST">
                    <div class="left">
                <label for="number">Reg. No.</label>
                <input type="text" placeholder="student reg. no.">

                <label for="name">Name</label>
                <input type="text" placeholder="Enter student's name">

                <label for="gender">Gender</label>
                <input type="text" placeholder="Gender ex: female">
                </div>
                
                    <div class="right">
                <label for="department">Department</label>
                <input type="text" placeholder="Enter student's department">

                <label for="batch">Batch</label>
                <input type="text" placeholder="Batch ex: batch14">

                <label for="semester">Semester</label>
                <input type="text" placeholder="semester">
                </div>

                <label for="email">Email</label>
                <input type="email" placeholder="Enter student's email">
                <button>Submit</button>
                </form>
</div>
<div class="table-container">
<div class="attendance-list">
                <h2>Student Records</h2>
                <table name="attendanceTable"id="attendanceTable">
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Email</th>
                            <!-- <th>Date</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        
                        $query= 'SELECT * FROM signup';
                        $result= mysqli_query($connection, $query);
                        ?>
                    <?php if(mysqli_num_rows($result)>0):?>
            <?php while($attends = mysqli_fetch_assoc($result)):?>
            <tr>
                <td id="username"> <?= $attends['username']?></td>
                <td id="email"> <?= $attends['email']?></td>
                <!-- <td id="attendance"> <?= $attends['date']?></td> -->
               
          </script>
          </td>


            </tr>
            <?php endwhile ?>
            <?php endif?>
                    </tbody>
                </table>
            </div>
            </div>
            </div>
</body>
</html>
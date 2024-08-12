<?php
require __DIR__."/../../config/database.php";

$query = "SELECT * FROM subject";
$result = mysqli_query($connection, $query);

/*if(mysqli_num_rows($result)>0){
    while ($students= mysqli_fetch_assoc($result)){
        print_r ($students);
    }
}*/
?>
<!DOCTYPE html>
<html>
<head>
<title>Upcoming courses</title>
<link rel="stylesheet" href="students.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 <style>

table {
  border-collapse: collapse;
  width: 100%;
  margin: 20px auto;
}
th, td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: left;
  border: none;
}
th {
  background-color: #00008B;
}
input[type="checkbox"] {
  width: 100%;
  height: 20px;
}
.cont h2{
    margin-left: 450px;
}
/* Apply a dark theme */
.table {
  background-color: #EEE;
  color:black;
}

/* Alternating row colors */
.table tr:nth-child(even) {
  background-color: white;
  color:black;
}

/* Header styling */
.table th {
  font-weight: bold;
  color: white; /* Distinct header color */
}

/* Subtle shadows */
.table {
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.table tr:hover {
  background-color:#ADD8E6;
}

.editBtn, .deleteBtn {
            padding: 5px 10px;
            margin-left: 10px;
            background-color: transparent;
            border: none;
            cursor: pointer;
        }
        .editBtn {
            color: blue;
        }
        .deleteBtn {
            color: red;
        }
        #id{
          
        }
      
        td, th{
        
        }
</style> 
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
                        <span>Profile</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="../dashboard.php">
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

        <div class="cont">
 <h2>SUBJECT VIEW</h2>
<form method="post" action="action.php"> 
  <table class="table">
    <thead>
      <tr>
        <th>Sudent ID</th>
        <th>subject</th>
        <th>Date</th>

      </tr>
    </thead>
    <tbody>
        <?php if(mysqli_num_rows($result)>0):?>
            <?php while($students = mysqli_fetch_assoc($result)):?>
            <tr>
                <td id="id"> <?= $students['id']?></td>
                <td id="subject"> <?= $students['subject']?></td>
                <td id="date"> <?= $students['date']?></td>
               
          </script>
          </td>


            </tr>
            <?php endwhile ?>
            <?php endif?>
    </tbody>
  </table>
</form>
</div>
</div>
</body>
</html>

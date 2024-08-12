<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add users</title>
</head>
<body>
    <div>
        <form action="">
                <div>
                    <?php
                        // if the get request query key "error"is set
                        
                        if(isset($_GET['error']) && isset($_GET['message'])):
                    
                    ?>

                    <?php
                        // if the error query key has value empty fields

                        if($_GET['error'] == "emptyfields"):
                    
                    ?>

                    <div>
                    
                    <?= $_GET['message']; ?>
                    </div>

                    <?php endif ?>

                    <?php endif ?>
            </div>

            <div class="stud">
                <h3>Add Student's information</h3>
                <label for="number">Reg. No.</label>
                <input type="text" placeholder="student reg. no.">

                <label for="name">Name</label>
                <input type="text" placeholder="Enter student's name">

                <label for="gender">Gender</label>
                <input type="text" placeholder="Gender ex: female">

                <label for="department">Department</label>
                <input type="text" placeholder="Enter student's department">

                <label for="batch">Batch</label>
                <input type="text" placeholder="Batch ex: batch14">

                <label for="semester">Semester</label>
                <input type="text" placeholder="semester">

                <label for="email">Email</label>
                <input type="email" placeholder="Enter student's email">
                <button>Submit</button>
            </div>
            
            <div class="teach">
                <h3>Add Teacher's information</h3>
                <label for="id">Teacher ID</label>
                <input type="text" placeholder="Enter the teacher's id">

                <label for="name">Name</label>
                <input type="text" placeholder="Enter teacher's name">

                <label for="gender">Gender</label>
                <input type="text" placeholder="Gender ex: female">


                <label for="department">Department</label>
                <input type="text" placeholder="department ex: SWE">

                <label for="subject">Subject</label>
                <input type="text" placeholder="Subject ex: Csc">

                <label for="email">Email</label>
                <input type="email" placeholder="Enter student's email">
                <button>Submit</button>
            </div>
            
        </form>
    </div>
</body>
</html>
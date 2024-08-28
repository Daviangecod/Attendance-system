<?php

// Getting the connection variables in another file
require(__DIR__ . "/../config/database.php");

// Query that uses the SQL syntax
// structured query language is a language used to manage database data

// Select all values from the table of database
$query = "SELECT * FROM signin";
// Getting the result of the query above
$result = mysqli_query( $connection, $query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <div class="container mx-auto">

        <table class="table table-striped mt-5 border">
            <thead>
                <tr>
                    <th>Registration No.</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Batch</th>
                    <th>Semester</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
        

    <tbody>
        <?php if(mysqli_num_rows($result) > 0): ?>
        <?php while ($students = mysqli_fetch_assoc($result)): ?>

            <tr>
                <td><?= $students['id']?></td>
                <td><?= $students['name'] ?></td>
                <td><?= $students['department'] ?></td>
                <td><?= $students['batch'] ?></td>
                <td><?= $students['semester'] ?></td>
                <td><?= $students['email'] ?></td>
                <td><?= $students['status'] ?></td>

                <td>

                    <a href="edit.php?id=<?= $students['id'] ?>" class="btn btn-warning btn-sm bg-yellow-300 text-white px-4 py-2 rounded hover:bg-yellow-600">Edit</a>
                    <a href="delete.php?id=<?= $students['id'] ?>" class="btn btn-danger btn-sm bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600" onclick="return confirm('Are you sure you want to delete this contact?');">Delete</a>
                

                    <?php if($students['status'] == 1): ?>
                        <span class="badge bg-danger">Present</span>
                    <?php elseif($students['status'] == 0): ?>
                        <span class="badge bg-primary">Absent</span>

                    <?php endif?>
                </td>
            </tr>
        <?php endwhile ?>
            <?php endif ?>
    </tbody>
    </table>
</body>
</html>
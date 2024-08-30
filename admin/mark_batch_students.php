<?php $pageTitle = "Mark Student Attendance"; ?>
<?php require_once __DIR__ . '/templates/header.php' ?>

<?php

$students = [];
$batch = [];
$attendances = [];

$batchID = $_GET['batch_id'];

$query = "SELECT * FROM students WHERE batch_id = $batchID";
$result = mysqli_query($connection, $query);
$students = mysqli_fetch_all($result, MYSQLI_ASSOC);

$batchQuery = "SELECT * FROM batches WHERE id = $batchID";
$batchResult = mysqli_query($connection, $batchQuery);
$batch = mysqli_fetch_assoc($batchResult);

$today = date('Y-m-d');

$attendanceQuery = "SELECT * FROM student_attendance WHERE batch_id = $batchID AND marked_date = '$today'";
$attendanceResult = mysqli_query($connection, $attendanceQuery);
$attendances = mysqli_fetch_all($attendanceResult, MYSQLI_ASSOC);
?>



<div class="min-h-screen bg-gray-50/50">

    <!-- The Sidebar  -->
    <?php require_once "./templates/sidebar.php" ?>

    <div class="p-4 xl:ml-80">


        <!-- The Navigation  -->
        <?php require_once "./templates/navigation.php" ?>

        <!-- Snippet -->
        <h1 class="text-3xl font-semibold mb-8">Mark Batch Attendance</h1>

        <div class="grid grid-cols-1 gap-8 mb-8 border-b-4 border-b-primary">

            <div class="min-h-fit p-10 bg-white shadow rounded-lg overflow-x-auto">

                <p class="mb-8 text-xl text-red-500"><strong>NOTE: </strong> Attendance can only be submitted once everyday! Be sure of student's status before submitting!</p>

                <form action="<?= baseUrl('admin/action/mark_attendance.php') ?>" method="POST">
                    <input type="hidden" name="batchID" value="<?= $batchID ?>" />

                    <table id="dTable" class="dTable display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Full Names</th>
                                <th style="text-align: center;">Present</th>
                                <th style="text-align: center;">Absent</th>

                            </tr>
                        </thead>

                        <tbody>
                            <?php if (isset($students) && count($students) > 0): ?>
                                <?php if (isset($attendances) && count($attendances) > 0): ?>

                                    <?php foreach ($students as $student): ?>
                                        <?php foreach ($attendances as $attendance): ?>

                                            <?php if ($attendance['student_id'] == $student['id']): ?>

                                                <?php if ($attendance['is_present'] == 1): ?>

                                                    <tr>
                                                        <td><?= $student["first_name"] . " " . $student['last_name'] ?></td>
                                                        
                                                        <td>
                                                            <input class="block w-8 h-8 mx-auto cursor-pointer" type="radio" name="attendance[<?= $student['id'] ?>]" id="present" value="1" checked required>
                                                        </td>
                                                        <td>
                                                            <input class="block w-8 h-8 mx-auto cursor-pointer" type="radio" name="attendance[<?= $student['id'] ?>]" id="absent" value="0" required>
                                                        </td>

                                                    </tr>

                                                <?php elseif ($attendance['is_present'] == 0): ?>

                                                    <tr>
                                                        <td><?= $student["first_name"] . " " . $student['last_name'] ?></td>
                                                        
                                                        <td>
                                                            <input class="block w-8 h-8 mx-auto cursor-pointer" type="radio" name="attendance[<?= $student['id'] ?>]" id="present" value="1" required>
                                                        </td>
                                                        <td>
                                                            <input class="block w-8 h-8 mx-auto cursor-pointer" type="radio" name="attendance[<?= $student['id'] ?>]" id="absent" value="0" checked required>
                                                        </td>

                                                    </tr>

                                                <?php endif ?>

                                            <?php endif ?>

                                        <?php endforeach ?>
                                    <?php endforeach ?>


                                <?php else: ?>
                                    <?php foreach ($students as $student): ?>
                                        <tr>
                                            <td><?= $student["first_name"] . " " . $student['last_name'] ?></td>
                                           
                                            <td>
                                                <input class="block w-8 h-8 mx-auto cursor-pointer" type="radio" name="attendance[<?= $student['id'] ?>]" id="present" value="1" required>
                                            </td>
                                            <td>
                                                <input class="block w-8 h-8 mx-auto cursor-pointer" type="radio" name="attendance[<?= $student['id'] ?>]" id="absent" value="0" required>
                                            </td>

                                        </tr>
                                    <?php endforeach ?>

                                <?php endif ?>

                            <?php endif ?>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Full Names</th>
                                <th style="text-align: center;">Present</th>
                                <th style="text-align: center;">Absent</th>

                            </tr>
                        </tfoot>
                    </table>

                    <button type="submit" class="py-2 px-3 bg-blue-700 text-white hover:bg-blue-800 transition-all ease-in-out delay-75 block ms-auto rounded-lg mt-10">Submit Attendance</button>

                </form>


            </div>

        </div>


    </div>

    <?php require_once "./templates/footer.php" ?>
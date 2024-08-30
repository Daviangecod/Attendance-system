<?php require_once __DIR__ . '/templates/header.php' ?>

<?php $pageTitle = "Approve Students"; ?>

<?php
    $query = "SELECT * FROM students ORDER BY id DESC";
    $result = mysqli_query($connection, $query);
    $students = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>




<div class="min-h-screen bg-gray-50/50">

    <!-- The Sidebar  -->
    <?php require_once "./templates/sidebar.php" ?>

    <div class="p-4 xl:ml-80">


        <!-- The Navigation  -->
        <?php require_once "./templates/navigation.php" ?>

        <!-- Snippet -->
        <h1 class="text-3xl font-semibold mb-8">All Students</h1>


        <div class="grid grid-cols-1 gap-8 mb-8">

            <div class="min-h-fit p-10 bg-white shadow rounded-lg border-b-4 border-b-primary overflow-x-auto">

                <table id="dTable" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Full Names</th>
                            <th>School</th>
                            <th>Batch</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php if (isset($students) && count($students) > 0): ?>

                            <?php foreach ($students as $student): ?>

                                <tr>
                                    <td><?= $student["first_name"] . " " . $student['last_name'] ?></td>
                                    <td>
                                        <?php if ($student['batch_id'] !== NULL): ?>

                                            <?php
                                                $batch = [];
                                                $studentBatch = $student['batch_id'];
                                                $batchQuery = "SELECT * FROM batches WHERE id = $studentBatch";
                                                $batchResult = mysqli_query($connection, $batchQuery);

                                                if (mysqli_num_rows($batchResult) == 1) {
                                                    $batch = mysqli_fetch_assoc($batchResult);
                                                }
                                            ?>

                                            <?= strtoupper($batch['name']) ?>

                                        <?php endif ?>
                                    </td>

                                    <td><?= $student['school'] ?></td>
                                    <td>
                                        <?php if ($student['is_approved'] == 0): ?>
                                            <span class="rounded-lg text-sm py-1 px-3 text-orange-600 bg-orange-100 border border-orange-600">Pending</span>
                                        <?php else: ?>
                                            <span class="rounded-lg text-sm py-1 px-3 text-green-600 bg-green-100 border border-green-600">Approved</span>
                                        <?php endif ?>
                                    </td>

                                </tr>

                            <?php endforeach ?>

                        <?php endif ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Full Names</th>
                            <th>Batch</th>
                            <th>School</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                </table>

            </div>

        </div>


    </div>

    <?php require_once "./templates/footer.php" ?>
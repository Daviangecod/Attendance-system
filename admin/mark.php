<?php require_once __DIR__ . '/templates/header.php' ?>

<?php $pageTitle = "Approve Students"; ?>


<?php
$query = "SELECT * FROM batches";
$result = mysqli_query($connection, $query);
$batches = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>



<div class="min-h-screen bg-gray-50/50">

    <!-- The Sidebar  -->
    <?php require_once "./templates/sidebar.php" ?>

    <div class="p-4 xl:ml-80">


        <!-- The Navigation  -->
        <?php require_once "./templates/navigation.php" ?>

        <!-- Snippet -->
        <h1 class="text-3xl font-semibold mb-8">Mark Attendance</h1>

        <div class="grid grid-cols-1 gap-8 mb-8">

            <div class="min-h-fit p-10 bg-white shadow rounded-lg border-b-4 border-b-primary overflow-x-auto">

                <table id="dTable" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th style="text-align: center;">Number of Students</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php if (isset($batches) && count($batches) > 0): ?>

                            <?php foreach ($batches as $batch): ?>

                                <tr>
                                    <td><?= strtoupper($batch['name']) ?></td>


                                    <td style="text-align: center;">
                                        <?php
                                        $batchID = $batch['id'];
                                        $query = "SELECT COUNT(*) AS total FROM students WHERE batch_id = $batchID";
                                        $result = mysqli_query($connection, $query);

                                        if (mysqli_num_rows($result) > 0) {
                                            $students = mysqli_fetch_assoc($result);
                                        }
                                        ?>

                                        <?= $students['total'] ?? 0 ?>
                                    </td>

                                    <td>

                                        <a href="<?= baseUrl('admin/mark_batch_students.php?batch_id=' . $batch['id']) ?>" class="bg-green-700 hover:bg-green-800 rounded-lg py-2 px-3 w-fit text-white my-3 flex gap-2 items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6" viewBox="0 0 16 16">
                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />

                                            </svg>

                                            <span class="text-lg">Mark Attendance</span>
                                        </a>

                                    </td>
                                </tr>

                            <?php endforeach ?>

                        <?php endif ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Number of Students</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>

            </div>

        </div>



    </div>

    <?php require_once "./templates/footer.php" ?>
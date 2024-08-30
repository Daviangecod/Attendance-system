<?php require_once "./templates/header.php" ?>

<?php   
    $studentID = $_GET['student_id'];
    $batches = [];
    $query = "SELECT * FROM batches";
    $result = mysqli_query($connection, $query);
    
    if(mysqli_num_rows($result) > 0) {
        $batches = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>

<!-- component -->
<div class="min-h-screen bg-gray-50/50">

    <!-- The Sidebar  -->
    <?php require_once "./templates/sidebar.php" ?>

    <div class="p-4 xl:ml-80">


        <!-- The Navigation  -->
        <?php require_once "./templates/navigation.php" ?>

        <!-- Snippet -->
        <h1 class="text-3xl font-semibold mb-8">Approve Student</h1>

        <div class="grid grid-cols-1 gap-8 mb-8 border-b-4 border-b-primary">

            <div class="min-h-fit p-10 bg-white shadow rounded-lg">

                <form action="<?= baseUrl('admin/action/approve_student.php') ?>" method="POST" autocomplete="off">

                    <input type="hidden" name="student" value="<?= $studentID ?>">

                    <div class="mb-3">
                        <label for="studentBatch" class="block mb-3">Assign Student to A batch</label>

                        <select name="batch" id="studentBatch" class="bg-white border border-slate-300 rounded-lg py-3 px-2 w-full placeholder:italic">
                            <option disabled selected>Select a Batch</option>
                            <?php if (count($batches) > 0 && isset($batches)): ?>

                                <?php foreach ($batches as $batch): ?>

                                    <option value="<?= $batch['id'] ?>"><?= strtoupper($batch['name']) ?></option>

                                <?php endforeach ?>


                            <?php endif ?>

                        </select>

                    </div>



                    <button class="py-2 px-3 bg-blue-600 hover:bg-blue-800 transition-all ease-in-out delay-75 rounded-lg text-white">Approve Student</button>

                </form>

            </div>

        </div>

    </div>

    <?php require_once "./templates/footer.php" ?>
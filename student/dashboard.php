<?php require_once "./templates/header.php" ?>

<?php

    $userID = $_SESSION['loginID'];
    $student = [];
    $presence = [];
    $absence = [];
    $batch = [];
    $attendances = [];

    $sQuery = "SELECT * FROM students WHERE user_id = $userID";
    $sResult = mysqli_query($connection, $sQuery);

    if(mysqli_num_rows($sResult) == 1) {
        $student = mysqli_fetch_assoc($sResult);
    }

    $studentID = $student['id'];
    $studentBatch = $student['batch_id'];

    if($studentBatch !== NULL) {
      $bQuery = "SELECT * FROM batches WHERE id = $studentBatch";
      $bResult = mysqli_query($connection, $bQuery);

      if(mysqli_num_rows($bResult) == 1) {
          $batch = mysqli_fetch_assoc($bResult);
      }
    }

    $pQuery = "SELECT COUNT(*) AS total_presence FROM student_attendance WHERE student_id = $studentID AND is_present = 1";
    $pResult = mysqli_query($connection, $pQuery);

    if(mysqli_num_rows($pResult) > 0){
        $presence = mysqli_fetch_assoc($pResult);
    }

    $aQuery = "SELECT COUNT(*) AS total_absence FROM student_attendance WHERE student_id = $studentID AND is_present = 0";
    $aResult = mysqli_query($connection, $aQuery);

    if(mysqli_num_rows($aResult) > 0){
        $absence = mysqli_fetch_assoc($aResult);
    }


    $atQuery = "SELECT * FROM student_attendance WHERE student_id = $studentID ORDER BY id DESC";
    $atResult = mysqli_query($connection, $atQuery);

    if(mysqli_num_rows($atResult) > 0){
        $attendances = mysqli_fetch_all($atResult, MYSQLI_ASSOC);
    }

    $totalPresence = $presence['total_presence'];
    $totalAbsence = $absence['total_absence'];
?>

<!-- component -->
<div class="min-h-screen bg-gray-50/50">

  <!-- The Sidebar  -->
  <?php require_once "./templates/sidebar.php" ?>

  <div class="p-4 xl:ml-80">


    <!-- The Navigation  -->
    <?php require_once "./templates/navigation.php" ?>

    <h1 class="text-3xl font-semibold mb-8">Home</h1>


    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-8">

      <div class="col-span-1 bg-white border-b-4 border-b-primary shadow rounded-lg min-h-[180px] w-full hover:scale-105 transition-all ease-in-out delay-75 py-3 px-8 grid grid-cols-1 gap-y-5 xl:gap-y-0 xl:grid-cols-2 items-center">

        <svg xmlns="http://www.w3.org/2000/svg" class="w-36 mx-auto xl:mx-0 fill-gray-300" viewBox="0 0 16 16">
          <path d="M13.879 10.414a2.501 2.501 0 0 0-3.465 3.465zm.707.707-3.465 3.465a2.501 2.501 0 0 0 3.465-3.465m-4.56-1.096a3.5 3.5 0 1 1 4.949 4.95 3.5 3.5 0 0 1-4.95-4.95ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
        </svg>


        <div class="flex flex-col items-center justify-center">
          <p class="text-xl font-semibold">Total Absence</p>
          <p class="text-6xl font-semibold"><?= $totalAbsence ?? 0 ?></p>
        </div>

      </div>

      <div class="col-span-1 bg-white border-b-4 border-b-primary shadow rounded-lg min-h-[180px] w-full hover:scale-105 transition-all ease-in-out delay-75 py-3 px-8 grid grid-cols-1 gap-y-5 xl:gap-y-0 xl:grid-cols-2 items-center">

        <svg xmlns="http://www.w3.org/2000/svg" class="w-36 mx-auto xl:mx-0 fill-gray-300" viewBox="0 0 16 16">
          <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
          <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
        </svg>


        <div class="flex flex-col items-center justify-center">
          <p class="text-xl font-semibold">Total Presence</p>
          <p class="text-6xl font-semibold"><?= $totalPresence ?? 0 ?></p>
        </div>

      </div>

      <div class="md:col-span-2 lg:col-span-1 bg-white border-b-4 border-b-primary shadow rounded-lg min-h-[180px] w-full hover:scale-105 transition-all ease-in-out delay-75 py-3 px-8 grid grid-cols-1 gap-y-5 xl:gap-y-0 xl:grid-cols-2 items-center">

        <svg xmlns="http://www.w3.org/2000/svg" class="w-36 mx-auto xl:mx-0 fill-gray-300" viewBox="0 0 16 16">
          <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z" />
        </svg>


        <div class="flex flex-col items-center justify-center">
          <p class="text-lg font-semibold mb-4 bg-blue-800 text-white py-1 px-2 rounded-lg">Your Batch</p>
          <p class="text-2xl font-semibold text-wrap"><?= isset($batch['title']) ? strtoupper($batch['title']) : "NO BATCH" ?></p>
        </div>

      </div>

    </div>

    <!-- Snippet -->
    <section class="flex flex-col justify-center antialiased bg-gray-50 text-gray-600 mb-10">
      <div class="h-full">
        <!-- Card -->
        <div class="mx-auto bg-[#093c94] shadow-lg h-48 rounded-lg">
          <div class="px-6 py-5">

            <!-- Card content -->
            <div class="flex-grow truncate">
              <!-- Card header -->
              <div class="w-full sm:flex justify-between items-center mb-3">
                <!-- Title -->
                <h1 class="text-2xl leading-snug font-extrabold text-gray-50 truncate mb-1 sm:mb-0">Welcome Back <?= $_SESSION['fullname'] ?? "Student" ?>!!</h1>
                <!-- Like and comment buttons -->

              </div>
              <!-- Card body -->
              <div class="flex items-start justify-between whitespace-normal">
                <!-- Paragraph -->
                <div class="text-white">
                  <p class="mb-2">Welcome to Eschosys attendance system</p>
                </div>
                <div class="flex items-start">
                  <!-- Icon -->
                  <div class="img">
                    <img src="<?= baseUrl('student/assets/images/girl.png') ?>" alt="" height="250" width="250">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="grid grid-cols-1 mb-10">

      <div class="min-h-fit bg-white shadow rounded-lg border-b-4 border-b-primary py-8 px-8 overflow-x-auto">

        <div class="flex items-center gap-4 mb-8">
          <h2 class="text-3xl font-semibold">Your Attendance</h2>
        </div>

        <table id="dTable" class="display w-full">
          <thead>
            <tr>
              <th>Full Names</th>
              <th>Status</th>
              <th>Marked Date</th>
            </tr>
          </thead>
          <tbody>

            <?php if (isset($attendances) && count($attendances) > 0): ?>

              <?php foreach ($attendances as $attendance): ?>

                <tr>
                  <td><?= $student["first_name"] . " " . $student['last_name'] ?></td>
                  <td>
                    <?php if ($attendance['is_present'] == 0): ?>
                      <span class="rounded-lg text-sm py-2 px-3 text-orange-600 bg-orange-100 border border-orange-600">Absent</span>
                    <?php elseif ($attendance['is_present'] == 1): ?>
                      <span class="rounded-lg text-sm py-2 px-3 text-green-600 bg-green-100 border border-green-600">Present</span>
                    <?php endif ?>
                  </td>
                  <td><?= date('l dS F Y', strtotime($attendance['marked_date'])) ?></td>
                </tr>

              <?php endforeach ?>

            <?php endif ?>

          </tbody>
          <tfoot>
            <tr>
              <th>Full Names</th>
              <th>Status</th>
              <th>Marked Date</th>
            </tr>
          </tfoot>
        </table>

      </div>

    </div>



  </div>

  <?php require_once "./templates/footer.php" ?>
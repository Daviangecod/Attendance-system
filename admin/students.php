<?php require_once "./templates/header.php" ?>

<?php $pageTitle = "Approve Students"; ?>
<?php require_once __DIR__ . '/templates/header.php' ?>

<?php
    $query = "SELECT * FROM students";
    $result = mysqli_query($connection, $query);
    $students = mysqli_fetch_all($result, MYSQLI_ASSOC);;
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

        <table id="dTable" class="dTable display" style="width:100%">
          <thead>
            <tr>
              <th>Full Names</th>
              <th>School</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>

            <?php if (isset($students) && count($students) > 0): ?>

              <?php foreach ($students as $student): ?>

                <tr>
                  <td><?= $student["first_name"] . " " . $student['last_name'] ?></td>
              
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
              <th>School</th>
              <th>Status</th>
            </tr>
          </tfoot>
        </table>

      </div>

    </div>


  </div>

  <?php require_once "./templates/footer.php" ?>
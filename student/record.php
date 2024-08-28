
<?php require_once "./templates/header.php" ?>

<?php
  check_login_users();
?>
<script src="https://cdn.tailwindcss.com"></script>

<!-- component -->
<div class="min-h-screen bg-gray-50/50">

  <!-- The Sidebar  -->
  <?php require_once "./templates/sidebar.php" ?>

  <div class="p-4 xl:ml-80">


    <!-- The Navigation  -->
    <?php require_once "./templates/navigation.php" ?>

    <!-- Snippet -->
    

  </div>

<?php require_once "./templates/footer.php" ?>
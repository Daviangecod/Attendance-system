<?php require_once "./templates/header.php" ?>
<?php
  require_once basePath('middleware/check_login_users.php');
?>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">


 
  <div class="min-h-screen bg-gray-50/50">


    <?php require_once "./templates/sidebar.php" ?>
 

    <div class="p-4 xl:ml-80">

    <?php require_once "./templates/navigation.php" ?>

      <div class="bg-gray-100 flex space-x-4 items-center justify-center h-screen">

        <div class="bg-white p-8 rounded shadow-md w-full max-w-sm">
          <img src="<?= baseUrl('student/assets/images/eschosys.webp') ?>" alt="Logo" class="block mx-auto w-36 mb-3">
          <h2 class="text-2xl font-bold mb-6 text-center">Logout Notice</h2>
          <p class="text-gray-700 mb-6 text-center">Are you sure you want to logout?</p>
          <div class="flex justify-center">
              <a href="./action/logout.php" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40" color="#000000" fill="none">
                  <path d="M15 17.625C14.9264 19.4769 13.3831 21.0494 11.3156 20.9988C10.8346 20.987 10.2401 20.8194 9.05112 20.484C6.18961 19.6768 3.70555 18.3203 3.10956 15.2815C3 14.723 3 14.0944 3 12.8373L3 11.1627C3 9.90561 3 9.27705 3.10956 8.71846C3.70555 5.67965 6.18961 4.32316 9.05112 3.51603C10.2401 3.18064 10.8346 3.01295 11.3156 3.00119C13.3831 2.95061 14.9264 4.52307 15 6.37501" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                  <path d="M21 12H10M21 12C21 11.2998 19.0057 9.99153 18.5 9.5M21 12C21 12.7002 19.0057 14.0085 18.5 14.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>
          </div>
        </div>
      </div>
    </div>

  </div>

<?php require_once "./templates/footer.php" ?>

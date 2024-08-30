<?php session_start() ?>
<?php require_once __DIR__ . '/../vendor/autoload.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="" type="image/x-icon">
  <title>Student Details</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <?php require_once basePath('middleware/check_login_users.php'); ?>
  <?php require_once basePath('middleware/check_student_with_details.php'); ?>
</head>

<body>


  <main class="min-h-screen w-full flex items-center justify-center px-5 md:px-0 bg-blue-50">
    <div class="container mx-auto">
      
      <form action="./action/save_student_details.php" method="POST" class="max-w-lg mx-auto bg-white shadow rounded-lg w-full min-h-fit py-10 px-8">

      <img src="<?= baseUrl('assets/images/eschosys.webp') ?>" alt="Logo" class="block mx-auto w-36 mb-3">
        
        <h1 class="text-4xl font-bold text-center mb-8">Student Personal Details</h1>

        <h3 class="text-center italic text-slate-500 mb-5">Personal Details</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-5">
          <div>
            <label for="firstName">First Name</label>
            <input type="text" name="firstName" id="firstName" class="w-full border border-slate-300 rounded-lg py-3 px-2 placeholder:italic" placeholder="Type your First Name" />
          </div>

          <div>
            <label for="lastName">Last Name</label>
            <input type="text" name="lastName" id="lastName" class="w-full border border-slate-300 rounded-lg py-3 px-2 placeholder:italic" placeholder="Type your Last Name" />
          </div>
        </div>

        <div class="mb-3">
          <label for="school">School of Study</label>
          <input type="text" name="school" id="school" class="w-full border border-slate-300 rounded-lg py-3 px-2 placeholder:italic" placeholder="Type the name of your school" />
        </div>

        <div class="mb-3">
          <label for="dateOfBirth">Date Of Birth</label>
          <input type="date" name="dateOfBirth" id="dateOfBirth" class="w-full border border-slate-300 rounded-lg py-3 px-2 placeholder:italic mb-5" />
        </div>


        <button type="submit" class="py-3 px-2 text-white bg-blue-800 hover:bg-blue-900 w-full rounded-lg transition-all delay-75 ease-in-out">Save</button>

      </form>

    </div>
  </main>



  <?php require_once __DIR__ . '/../templates/footer.php'; ?>
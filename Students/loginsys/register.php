<?php
    // A logged in user cannot access this page
    session_start();
    require "./helper/redirect.php";

    if(isset($_SESSION['loginID'])) {
        redirect('dashboard.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

  <main class="min-h-screen bg-blue-950 px-5 md:px-0">

    <div class="container mx-auto min-h-screen flex flex-col gap-4 items-center justify-center">

        <?php if(isset($_GET['error'])): ?>

            <?php if($_GET['error'] == "emptyvalues"): ?>
                <div class="rounded-lg bg-red-100 text-red-500 border border-red-500 py-3 px-2 text-center w-[500px]">
                    One or more fields are empty
                </div>
            <?php elseif($_GET['error'] == "usernotcreated"): ?>
                <div class="rounded-lg bg-red-100 text-red-500 border border-red-500 py-3 px-2 text-center w-[500px]">
                    User Not Created Successfully
                </div>
            
            <?php endif ?>
            
        <?php endif ?>

        <?php if(isset($_GET['success'])): ?>

            <?php if($_GET['success'] == "usercreated"): ?>
                <div class="rounded-lg bg-green-100 text-green-500 border border-green-500 py-3 px-2 text-center w-[500px]">
                   User Created Successfully
                </div>
            <?php endif ?>

        <?php endif ?>

        <form action="./action/create.php" method="POST" class="bg-white shadow w-[500px] min-h-[280px] rounded-lg py-3 px-5">

            <h3 class="mb-5 text-3xl font-semibold text-center">Register</h3>

            <div class="mb-5">
                 <input type="text" name="username" id="username" class="w-full border rounded-lg py-3 px-3 placeholder:italic" placeholder="Type your Username" />
            </div>


            <div class="mb-5">
                 <input type="password" name="password" id="password" class="w-full border rounded-lg py-3 px-3 placeholder:italic" placeholder="Type your Password" />
            </div>

            <button type="submit" class="w-full py-3 px-2 bg-blue-800 hover:bg-blue-900 text-white rounded transition-all delay-75 ease-in-out">Create Account</button>
        </form>
            

    </div>

  </main>
    
</body>
</html>
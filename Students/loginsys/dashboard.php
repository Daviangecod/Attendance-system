<?php
// Check if user has logged in before they access this page
    session_start();
    require "./helper/redirect.php";

    if(!isset($_SESSION['loginID'])) {
        $error = [
            'error' => "accessfailed"
        ];
        redirect('index.php', $error);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

  <main class="min-h-screen bg-blue-950 px-5 md:px-0">

    <div class="container mx-auto min-h-screen flex flex-col gap-4 items-center justify-center">

        <?php if(isset($_GET['success'])): ?>

            <?php if($_GET['success'] == "loginsuccess"): ?>
                <div class="rounded-lg bg-green-100 text-green-500 border border-green-500 py-3 px-2 text-center w-[500px]">
                Login Successful
                </div>
            <?php endif ?>

        <?php endif ?>

            <div class="bg-white shadow w-[500px] min-h-fit rounded-lg py-6 px-5">
                <h4 class="text-center font-semibold text-3xl">Dashboard</h4>
                <p class="mt-5 mb-10 text-3xl text-center italic">Hello <?= $_SESSION['username'] ?></p>

                <form action="./action/logout.php" method="POST">
                   <button type="submit" class="py-3 px-2 rounded-lg bg-blue-800 text-white w-full hover:bg-blue-900">Logout</button>
                </form>
            </div>      

    </div>

  </main>
    
</body>
</html>
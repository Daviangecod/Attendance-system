<?php

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
    <form action="action.php" method="POST">
        <!-- component -->
<div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
  <div class="container max-w-screen-lg mx-auto">
    <div>
      <h2 class="font-semibold text-xl text-gray-600">Register and be part of our community</h2>
      <p class="text-gray-500 mb-6"></p>

      <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
          <div class="text-gray-600">
            <p class="font-medium text-lg">Personal Details</p>
            <p>Please fill out all the fields.</p>
            <div class="logo">
            <img src="escho.png" alt="Logo" class="logo" height="300" width="250">
            </div>
          </div>

          <div class="lg:col-span-2">
            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
              <div class="md:col-span-5">
                <label for="full_name">Full Name</label>
                <input type="text" name="fullname" id="full_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="Enter your fullname"/>
              </div>

              <div class="md:col-span-5">
                <label for="full_name">Username</label>
                <input type="text" name="username" id="full_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="Enter the username"/>
              </div>

              <div class="md:col-span-5">
                <label for="email">Email Address</label>
                <input type="text" name="email" id="email" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="email@domain.com" />
              </div>

              <div class="md:col-span-3">
                <label for="address">Batch</label>
                <input type="text" name="batch" id="address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="ex:batch1" />
              </div>

              <div class="md:col-span-2">
                <label for="city">Gender</label>
                <input type="text" name="gender" id="city" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="ex:female" />
              </div>

              <div class="md:col-span-2">
                <label for="city">Password</label>
                <input type="password" name="password" id="city" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="Enter the password" />
              </div>

              <div class="md:col-span-5 text-right">
                <div class="inline-flex items-end">
                  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    </form>
</body>
</html>
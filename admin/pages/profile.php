<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
    rel="stylesheet">
</head>
<style>
    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
    }
</style>
<body>
<div class="bg-white w-full flex flex-col gap-5 px-3 md:px-16 lg:px-28 md:flex-row text-[#161931]">
    <aside class="hidden py-4 md:w-1/3 lg:w-1/4 md:block">
        <div class="sticky flex flex-col gap-2 p-4 text-sm border-r border-indigo-100 top-12">

            <h2 class="pl-3 mb-4 text-2xl font-semibold">Settings</h2>

            <a href="../dashboard.php" class="flex items-center px-3 py-2.5 font-bold bg-white  text-indigo-900 border rounded-full">
                Dashboard
            </a>
            <a href="#"
                class="flex items-center px-3 py-2.5 font-semibold  hover:text-indigo-900 hover:border hover:rounded-full">
                Account Settings
            </a>
            <a href="#"
                class="flex items-center px-3 py-2.5 font-semibold hover:text-indigo-900 hover:border hover:rounded-full  ">
                Notifications
            </a>
            <a href="#"
                class="flex items-center px-3 py-2.5 font-semibold hover:text-indigo-900 hover:border hover:rounded-full  ">
                PRO Account
            </a>
        </div>
    </aside>
    <main class="w-full min-h-screen py-1 md:w-2/3 lg:w-3/4">
        <div class="p-2 md:p-4">
            <div class="w-full px-6 pb-8 mt-8 sm:max-w-xl sm:rounded-lg">
                <h2 class="pl-6 text-2xl font-bold sm:text-xl">Public Profile</h2>

                <div class="grid max-w-2xl mx-auto mt-8">
                    <div class="flex flex-col items-center space-y-5 sm:flex-row sm:space-y-0">
                    <img id="picture" src="OIP.jpg" class="object-cover w-40 h-40 p-1 rounded-full ring-2 ring-indigo-300 dark:ring-indigo-500" alt="Picture"> 
    
                        <div class="flex flex-col space-y-5 sm:ml-8">
                        <button id="addButton"  class="py-3.5 px-7 text-base font-medium text-indigo-100 focus:outline-none bg-[#202142] rounded-lg border border-indigo-200 hover:bg-indigo-900 focus:z-10 focus:ring-4 focus:ring-indigo-200 ">
                        Add Picture</button>
                        
                        <button id="deleteButton" class="py-3.5 px-7 text-base font-medium text-indigo-900 focus:outline-none bg-white rounded-lg border border-indigo-200 hover:bg-indigo-100 hover:text-[#202142] focus:z-10 focus:ring-4 focus:ring-indigo-200 ">
                        Delete Picture</button>


                        </div>
                    </div>

                    <div class="items-center mt-8 sm:mt-14 text-[#202142]">

                        <div
                            class="flex flex-col items-center w-full mb-2 space-x-0 space-y-2 sm:flex-row sm:space-x-4 sm:space-y-0 sm:mb-6">
                            <div class="w-full">
                                <label for="first_name"
                                    class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Your
                                    first name</label>
                                <input type="text" id="first_name"
                                    class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                    placeholder="Your first name" value="Jane" required>
                            </div>

                            <div class="w-full">
                                <label for="last_name"
                                    class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Your
                                    last name</label>
                                <input type="text" id="last_name"
                                    class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                    placeholder="Your last name" value="Ferguson" required>
                            </div>

                        </div>

                        <div class="mb-2 sm:mb-6">
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Your
                                email</label>
                            <input type="email" id="email"
                                class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                placeholder="your.email@mail.com" required>
                        </div>

                        <div class="mb-2 sm:mb-6">
                            <label for="profession"
                                class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Profession</label>
                            <input type="text" id="profession"
                                class="bg-indigo-50 border border-indigo-300 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                placeholder="your profession" required>
                        </div>

                        <div class="mb-6">
                            <label for="message"
                                class="block mb-2 text-sm font-medium text-indigo-900 dark:text-white">Bio</label>
                            <textarea id="message" rows="4"
                                class="block p-2.5 w-full text-sm text-indigo-900 bg-indigo-50 rounded-lg border border-indigo-300 focus:ring-indigo-500 focus:border-indigo-500 "
                                placeholder="Write your bio here..."></textarea>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="text-white bg-indigo-700  hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">Save</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<script>


  const addButton = document.getElementById("addButton");
  const deleteButton = document.getElementById("deleteButton");
  const picture = document.getElementById("picture");

  // Function to add a picture
  function addPicture() {
    const input = document.createElement("input");
    input.type = "file";
    input.accept = "image/*";
    input.click();

    input.addEventListener("change", () => {
      const file = input.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = (e) => {
          picture.src = e.target.result;
        }
        reader.readAsDataURL(file);
      }
    });
  }

  // Function to delete picture
  function deletePicture() {
    picture.src = ""; // Clear the image source
  }

  addButton.addEventListener("click", addPicture);
  deleteButton.addEventListener("click", deletePicture);

  </script>
</body>
</html>
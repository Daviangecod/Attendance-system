<?php require_once "./templates/header.php" ?>

<script src="https://cdn.tailwindcss.com"></script>

<!-- component -->
<div class="min-h-screen bg-gray-50/50">

  <!-- The Sidebar  -->
  <?php require_once "./templates/sidebar.php" ?>

  <div class="p-4 xl:ml-80">


    <!-- The Navigation  -->
    <?php require_once "./templates/navigation.php" ?>

    <h1 class="text-3xl font-semibold mb-8">Home</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 my-10">

      <div class="col-span-1 bg-white border-b-4 border-b-primary shadow rounded-lg min-h-[180px] w-full hover:scale-105 transition-all ease-in-out delay-75 py-3 px-8 grid grid-cols-1 gap-y-5 xl:gap-y-0 xl:grid-cols-2 items-center">

        <svg xmlns="http://www.w3.org/2000/svg" class="w-36 mx-auto xl:mx-0 fill-gray-300" viewBox="0 0 16 16">
          <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4" />
        </svg>


        <div class="flex flex-col items-center justify-center">
          <p class="text-xl font-semibold">Total Students</p>
          <p class="text-6xl font-semibold">4</p>
        </div>

      </div>

      <div class="col-span-1 bg-white border-b-4 border-b-primary shadow rounded-lg min-h-[180px] w-full hover:scale-105 transition-all ease-in-out delay-75 py-3 px-8 grid grid-cols-1 gap-y-5 xl:gap-y-0 xl:grid-cols-2 items-center">

        <svg xmlns="http://www.w3.org/2000/svg" class="w-36 mx-auto xl:mx-0 fill-gray-300" viewBox="0 0 16 16">
          <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z" />
        </svg>


        <div class="flex flex-col items-center justify-center">
          <p class="text-xl font-semibold">Total Batches</p>
          <p class="text-6xl font-semibold">4</p>
        </div>

      </div>

      <div class="md:col-span-2 lg:col-span-1 bg-white border-b-4 border-b-primary shadow rounded-lg min-h-[180px] w-full hover:scale-105 transition-all ease-in-out delay-75 py-3 px-8 grid grid-cols-1 gap-y-5 xl:gap-y-0 xl:grid-cols-2 items-center">

        <svg xmlns="http://www.w3.org/2000/svg" class="w-36 mx-auto xl:mx-0 fill-gray-300" viewBox="0 0 16 16">
          <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m0 5.996V14H3s-1 0-1-1 1-4 6-4q.845.002 1.544.107a4.5 4.5 0 0 0-.803.918A11 11 0 0 0 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664zM9 13a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1" />
        </svg>


        <div class="flex flex-col items-center justify-center">
          <p class="text-xl font-semibold">Total Admins</p>
          <p class="text-6xl font-semibold">2</p>
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
                <h1 class="text-2xl leading-snug font-extrabold text-gray-50 truncate mb-1 sm:mb-0">Welcome Student!!</h1>
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




  </div>

  <?php require_once "./templates/footer.php" ?>
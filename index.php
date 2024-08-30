<?php $pageTitle = "Landing Page"; ?>

<?php require_once __DIR__ . '/templates/header.php'; ?>

<main class="bg-blue-50">
    <header class="">
        <div class="container mx-auto flex items-center justify-between py-5 px-5 md:px-0">
            <div class="logo">
                <img src="<?= baseUrl('assets/images/eschosys.webp') ?>" alt="Logo" class="w-36">
            </div>
            <nav>
                <ul class="flex items-center gap-2 md:gap-10">
                    <li><a class="hover:text-[#f57359]" href="<?= baseUrl('auth/register_student.php') ?>">Student Registration</a></li>
                    <li><a class="py-3 px-2 text-white bg-[#f57158] rounded-lg text-center w-40" href="<?= baseUrl('auth/login.php') ?>">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section>
        <div class="container mx-auto py-10 grid grid-cols-1 md:grid-cols-2">
            <div class="flex flex-col justify-center text-center md:text-start">
                <h1 class="text-3xl md:text-6xl font-bold mb-10">Welcome To <br> Eschosys Technology</h1>
                <p class="mb-8">At Eschosys technologies the live of hands-on experience </p>
                <a href="<?= baseUrl('auth/register_student.php') ?>" class="py-3 px-2 text-white bg-[#f57158] rounded-lg text-center w-40 mx-auto md:mx-0">Student Registration</a>
                  
            </div>

            <div class="img">
                <img class="w-[850px]" src="<?= baseUrl('assets/images/b.png') ?>" alt="">
            </div>
        </div>
    </section>

   <section class="py-16">
    <h2 class="sr-only">Main tools</h2>
    <div class="container mx-auto mt-10 flex justify-between items-center gap-14">
            <img class="w-[100px]" src="<?= baseUrl('assets/images/HTML5_logo.png') ?>" alt="HTML Logo">
            <img class="w-[300px]" src="<?= baseUrl('assets/images/tailwindcss-logotype.svg') ?>" alt="Tailwindcss Logo">
            <img class="w-[100px]" src="<?= baseUrl('assets/images/php-logo.svg') ?>" alt="PHP Logo">
            <img class="w-[150px]" src="<?= baseUrl('assets/images/Mysql_logo.png') ?>" alt="MySQL Logo">
        </div>
   </section>
</main>

<?php require_once __DIR__ . '/templates/footer.php'; ?>
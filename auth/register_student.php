<?php $pageTitle = "Student Registration"; ?>
<?php require_once __DIR__ . '/../templates/header.php'; ?>

<main class="min-h-screen flex items-center justify-center bg-blue-50 px-5 md:px-0">
    <div class="container mx-auto">
        <div class="w-full md:w-[500px] mx-auto px-5 py-10 rounded-lg shadow border bg-white">

            <h1 class="text-3xl font-semibold mb-8 text-center">Create a new account</h1>

            <form action="<?= baseUrl('auth/action/create_student.php') ?>" method="POST">

                <div class="mb-3">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" class="border border-slate-300 rounded-lg py-3 px-2 w-full placeholder:italic" placeholder="username@example.com" />

                </div>

                <div class="mb-5">
                    <label for="gender">Gender</label>
                    <select class="border border-slate-300 rounded-lg py-3 px-2 w-full placeholder:italic bg-white" name="gender" id="gender">
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                </div>

                <div class="mb-5">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="border border-slate-300 rounded-lg py-3 px-2 w-full placeholder:italic" placeholder="Type your password" />
                </div>

                <button type="submit" class="py-3 px-2 bg-blue-700 text-white hover:bg-primary-dark w-full rounded-lg transition-all delay-75 ease-in-out mb-5">Register</button>

                <div class="mb-3">
                    <a href="<?= baseUrl() ?>" class="text-center text-primary block hover:underline">Go Back Home</a>
                </div>


            </form>
        </div>


    </div>
</main>

<?php require_once __DIR__ . '/../templates/footer.php'; ?>
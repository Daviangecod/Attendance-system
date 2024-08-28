<?php $pageTitle = "Welcome page"; ?>

<?php require_once __DIR__ . '/templates/header.php'; ?>
<head>
    <link rel="stylesheet" href="assets/css/welcome.css">
</head>

<header>
    <div class="container-list">
        <div class="logo">
            <img src="<?= baseUrl('assets/images/escho.png') ?>" alt="Logo" class="logo">
        </div>
        <nav>
            <ul>
                <li><a href="<?= baseUrl('auth/login_student.php') ?>">Login</a></li>
                <li><a href="<?= baseUrl('auth/register_student.php') ?>">Register</a></li>
                <li><a href="#">About</a></li>
            
            </ul>
        </nav>
        <button class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<section class="hero">
    <div class="container">
        <h1>Welcome</h1>
        <h2>To Eschosys Technology</h2>
        <p>Eschosys technologies <br>
            the live of hands-on experience
        </p>
        
    </div>

</section>
<div class="img">
    <img src="<?= baseUrl('assets/images/b.png') ?>" alt="">
</div>

<?php require_once __DIR__ . '/templates/footer.php'; ?>
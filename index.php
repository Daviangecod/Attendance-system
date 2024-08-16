<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Company</title>
    <link rel="stylesheet" href="welcome.css"> 
</head>
<body>
    <header>
        <div class="container-list">
            <div class="logo">
            <img src="escho.png" alt="Logo" class="logo">
            </div>
            <nav>
                <ul>
                    <li><a href="join.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
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
            <button class="learn-more">Learn More</button>
        </div>
        
    </section>
    <div class="img">
            <img src="vector/b.png" alt="">
        </div>
    <script>
        const menuToggle = document.querySelector('.menu-toggle');
const nav = document.querySelector('nav ul');

menuToggle.addEventListener('click', () => {
    menuToggle.classList.toggle('active');
    nav.classList.toggle('active');
});

    </script> 
</body>
</html>

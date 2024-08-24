<?php
    
   
?>


<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signupAdmin.css">
    <title>Attendance system</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container">
    <div class="form-container sign-in-container">
        <form action="action/auth_admin.php" method="POST" onsubmit = "return validateForm()" onclick="return validateLogin()">

                        <div>
                            <?php
                                // if the get request query key "error"is set
                                
                                if(isset($_GET['error']) && isset($_GET['message'])):
                            
                            ?>

                            <?php
                                // if the error query key has value empty fields

                                if($_GET['error'] == "emptyfields"):
                            
                            ?>

                            <div>
                            
                            <?= $_GET['message']; ?>
                            </div>

                            <?php endif ?>

                            <?php endif ?>
                    </div>

            <h1 class="att">Sign in</h1>
    
            <div class="social-container">
                    <a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#" class="social"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a href="#" class="social"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </div>
                <span>Or use your account</span>    
                <input type="text" placeholder="Username" name="username" required>   
                <input type="password" placeholder="Password" name="password" required> 
                <a href="password/recover.php">Forgot your password?</a>
                <button>Sign In</button>
        </form>
    </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1 class="att">Welcome Back!</h1>
                    <p>
                        To keep connected with us please login <br>with your personal info
                    </p>
                </div>
            </div>
        </div>
    
    </div>
     <script>
        alert('Hello Admin, please sign in with your personal details');

        function validateForm() {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            if (!usrname || !password) {
                alert('Please fill in all fields.');
                return false;
            }
            // Additional validation logic (e.g., password strength) can be added here

            // If all fields are filled, allow form submission
            return true;
        }

        function validateLogin() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Check if username and password are valid (you can customize this logic)
    if (username === 'EschosysTech' && password === 'eschosys@123') {
        // Successful login (redirect or other actions)
        console.log('Login successful!');
        alert('Login succesful!')
    } else {
        // Invalid credentials, display an error message
        document.getElementById('error-message').textContent = 'Invalid username or password.';
    }
}

    </script> 
</body>
</html>

<?php
// // A logged in user cannot access this page
// session_start();
// require "./helper/redirect.php";

// if(isset($_SESSION['loginID'])) {
//     redirect('dashboard.php');
// }
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signupStudents.css">
    <title>Attendance system</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="container" id="container">
       <div class="form-container sign-up-container">
            <form action="action.php" method="POST" onsubmit="return validateForm()">

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

                <h1 class="att">Create Account</h1>

                <input type="hidden" name="role" value="student">

                <div class="social-container">
                <a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#" class="social"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a href="#" class="social"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </div>
                <span>Or use your email for registration</span>
                <input type="text" placeholder="Username" name="username" required>    
                <input type="email" placeholder="Email" name="email" required>    
                <input type="password" placeholder="Password" name="password" required> 
                <button>Sign Up</button>   
        
    </form>
    </div>
    <div class="form-container sign-in-container">
        <form action="login.php" method="POST" onsubmit="return validateForm()" onclick="checkAvailabilty()">

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

            <input type="hidden" name="role" value="student">
    
            <div class="social-container">
                    <a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#" class="social"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a href="#" class="social"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </div>
                <span>Or use your account</span>    
                <input type="text" placeholder="Username" name="username" required>    
                <input type="password" placeholder="Password" name="password" required> 
                <a href="password/forgotPassWd.php">Forgot your password?</a>
                <button>Sign In</button>
        </form>
    </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1 class="att">Welcome Back!</h1>
                    <p>
                        To keep connected with us please login <br>with your personal info
                    </p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1 class="att">Hello, Friend!</h1>
                    <p>Enter your personal details</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    
    </div>
    <script>

        alert('Hello Student');

        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');
    
        signUpButton.addEventListener('click', () =>
        container.classList.add('right-panel-active'));

        signInButton.addEventListener('click', () =>
        container.classList.remove('right-panel-active'));

        function validateForm() {
            const email = document.getElementById('email').value;
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            if (!email || !password || !name) {
                alert('Please fill in all fields.');
                return false;
            }
            // Additional validation logic (e.g., password strength) can be added here

            // If all fields are filled, allow form submission
            return true;
        }

        // function checkAvailability() {
        //     const username = document.getElementById('username').value;
        //     const email = document.getElementById('email').value;

        //     // Send an AJAX request to a PHP file
        //     const xhr = new XMLHttpRequest();
        //     xhr.open('POST', 'checkAvailability.php', true);
        //     xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        //     xhr.onreadystatechange = function () {
        //         if (xhr.readyState === 4 && xhr.status === 200) {
        //             document.getElementById('availability-message').textContent = xhr.responseText;
        //         }
        //     };
        //     xhr.send(`username=${username}&email=${email}`);
        // }

        function checkAvailability(inputField, dataType) {
  var username = document.getElementById('username').value;
  var email = document.getElementById('email').value;

  if (username && email) {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'checkAvailability.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
        var response = xhr.responseText;

        if (response === 'taken') {
          alert(dataType + ' is already taken.');
          inputField.value = ''; // Clear the input field
        } else {
          //  Username or email is available
        }
      }
    };
    xhr.send('username=' + username + '&email=' + email + '&dataType=' + dataType);
  } else {
    alert('Please fill in both username and email fields.');
  }
}
    </script>
</body>
</html>

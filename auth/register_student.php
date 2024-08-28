<?php require_once __DIR__ . '/../templates/header.php'; ?>

<div class="container" id="container">
    <div class="form-container sign-in-container">
        
        <form action="<?= baseUrl('auth/action/create_student.php') ?>" method="POST">

           
                <?php  if (isset($_GET['error'])):  ?>
                    <?php if ($_GET['error'] == "emptyfields"): ?>
                          <div style="background-color: #fa4141; padding: 0.8rem 1rem; border-radius: 10px;">
                                <p style="color:#fff">One or more fields are empty</p>
                          </div>
                    <?php endif ?>
                <?php endif ?>


            <h1 class="att">Register</h1>
            <input type="email" placeholder="Email Address" name="email" required>
            <select name="gender" id="gender" style="width: 100%; padding: 0.8rem 1rem; border-radius: 5px; border:none">
                  <option selected disabled>Select Your Gender</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
            </select>
            <input type="password" placeholder="Password" name="password" required>
    
          
            <button>Register</button>
        </form>
    </div>
    <div class="overlay-container" style="filter: hue-rotate(50deg);">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <h1 class="att" style="color: white">Welcome Back!</h1>
                <p>
                    To keep connected with us please register
                </p>
            </div>
        </div>
    </div>

</div>

<?php require_once __DIR__ . '/../templates/footer.php'; ?>
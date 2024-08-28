<?php

if (!isset($_SESSION['loginID'])) {
        redirect(baseUrl("auth/login_student.php"));
}

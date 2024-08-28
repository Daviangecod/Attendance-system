<?php

function check_login_users()
{
    if (!isset($_SESSION['loginID'])) {
        redirect(baseUrl("auth/login_student.php"));
    }
}

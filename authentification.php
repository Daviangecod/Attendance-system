<?php

// RegisterController.php
public function register(Request $request)
{
    // Validate form data (username, email, password, etc.)

    // Create a new user (admin or student) based on the selected role
    $user = User::create([
        'username' => $request->input('username'),
        'email' => $request->input('email'),
        'password' => Hash::make($request->input('password')),
        'role' => $request->input('role'), // 'admin' or 'student'
    ]);

    // Redirect to the appropriate dashboard
    if ($user->role === 'admin') {
        return redirect('/admin/dashboard');
    } else {
        return redirect('/student/dashboard');
    }
}

?>
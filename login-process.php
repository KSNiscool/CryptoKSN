<?php
// This is a basic example and should not be used in production without proper security measures

// Retrieve username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the username and password are valid (dummy validation for example)
if ($username === 'your_username' && $password === 'your_password') {
    // Authentication successful
    echo "Login successful!";
} else {
    // Authentication failed
    echo "Invalid username or password!";
}
?>

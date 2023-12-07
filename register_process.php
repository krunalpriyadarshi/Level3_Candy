<?php
// Include the database connection file
include 'db_connection.php';

$errorMessages = []; // Initialize an empty array for error messages

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get registration form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];

    // Validate username (alphabetic characters only)
    if (!ctype_alpha($username)) {
        $errorMessages['username'] = "Error: Username should contain only alphabetic characters.";
    }

    // Validate empty fields
    if (empty($username)) {
        $errorMessages['username'] = "Error: Username is required.";
    }

    if (empty($password)) {
        $errorMessages['password'] = "Error: Password is required.";
    }

    if (empty($email)) {
        $errorMessages['email'] = "Error: Email is required.";
    }

    if (empty($firstName)) {
        $errorMessages['firstName'] = "Error: First Name is required.";
    }

    if (empty($lastName)) {
        $errorMessages['lastName'] = "Error: Last Name is required.";
    }

    // If there are no error messages, proceed with registration
    if (empty($errorMessages)) {
        // Avoid SQL injection by using prepared statements
        $insertUserQuery = $conn->prepare("INSERT INTO User (username, password, email, firstName, lastName) 
                                          VALUES (?, ?, ?, ?, ?)");
        $insertUserQuery->bind_param("sssss", $username, $password, $email, $firstName, $lastName);

        if ($insertUserQuery->execute()) {
            // Registration successful, redirect to index.php
            header("Location: index.php");
            exit();
        } else {
            // Registration failed, handle the error
            $errorMessages['registration'] = "Error: Registration failed. Please try again.";
        }
    }
}

// Display the registration page with or without error messages
include 'register.php';
?>

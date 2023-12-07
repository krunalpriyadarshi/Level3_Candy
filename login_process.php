<?php
// Include the database connection file
include 'db_connection.php';

// Initialize error messages array
$errorMessages = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate username
    if (empty($username)) {
        $errorMessages['username'] = "Username is required";
    } elseif (!ctype_alpha($username)) {
        $errorMessages['username'] = "Username should contain only alphabetical characters";
    }

    // Validate password
    if (empty($password)) {
        $errorMessages['password'] = "Password is required";
    } else {
        // Avoid SQL injection by using prepared statements
        $checkUserQuery = $conn->prepare("SELECT * FROM User WHERE username = ?");
        $checkUserQuery->bind_param("s", $username);
        $checkUserQuery->execute();
        $result = $checkUserQuery->get_result();

        if ($result && $result->num_rows > 0) {
            // User exists, check password
            $user = $result->fetch_assoc();
            if ($user['password'] !== $password) {
                $errorMessages['password'] = "Invalid password";
            }
        } elseif (ctype_digit($username)) {
            // Numeric username, show error
            $errorMessages['username'] = "Username should contain only alphabetical characters";
        } else {
            // User does not exist in the database, redirect to register.php
            header("Location: register.php");
            exit();
        }
    }

    // Check if there are any error messages
    if (count($errorMessages) == 0) {
        // No errors, redirect to admin.php
        header("Location: admin.php");
        exit();
    }
}

// Redirect to index.php with error messages
header("Location: index.php?error=" . urlencode(json_encode($errorMessages)));
exit();
?>

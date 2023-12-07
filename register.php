<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .registration-container {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            width: 300px;
        }

        .registration-header {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .registration-form {
            text-align: center;
        }

        .form-input {
            margin-bottom: 10px;
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        .error-message {
            color: red;
            margin-top: 2px;
            margin-bottom: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="registration-container">
        <div class="registration-header">Registration</div>

        <form class="registration-form" action="register_process.php" method="post">
            <div>
                <input class="form-input" type="text" name="username" placeholder="Username">
                <?php
                // Display username error message
                if (isset($errorMessages['username'])) {
                    echo '<div class="error-message">' . $errorMessages['username'] . '</div>';
                }
                ?>
            </div>
            <div>
                <input class="form-input" type="password" name="password" placeholder="Password">
                <?php
                // Display password error message
                if (isset($errorMessages['password'])) {
                    echo '<div class="error-message">' . $errorMessages['password'] . '</div>';
                }
                ?>
            </div>
            <div>
                <input class="form-input" type="email" name="email" placeholder="Email">
                <?php
                // Display email error message
                if (isset($errorMessages['email'])) {
                    echo '<div class="error-message">' . $errorMessages['email'] . '</div>';
                }
                ?>
            </div>
            <div>
                <input class="form-input" type="text" name="firstName" placeholder="First Name">
                <?php
                // Display firstname error message
                if (isset($errorMessages['firstName'])) {
                    echo '<div class="error-message">' . $errorMessages['firstName'] . '</div>';
                }
                ?>
            </div>
            <div>
                <input class="form-input" type="text" name="lastName" placeholder="Last Name">
                <?php
                // Display lastname error message
                if (isset($errorMessages['lastName'])) {
                    echo '<div class="error-message">' . $errorMessages['lastName'] . '</div>';
                }
                ?>
            </div>
            <div>
                <input class="form-input" type="submit" value="Register">
            </div>
        </form>
    </div>
</body>
</html>

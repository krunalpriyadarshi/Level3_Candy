<!-- 
To-do:
    Before checkout, the user should be able to register.
            -> Effective use of Cookies and Sessions.
            -> password encryption/
    navigate through a number of products
    filters on products -> by name, price (asc, desc)
    add products to a cart
    
    At checkout, the user should get a pdf invoice
            -> payment gateway


    @meet:
        Object-Oriented Programming in PHP -> make method and function inside class.
            -> The website should be in compliance with AODA. (learn about it.) -> it is for apperence
            -> Use effective techniques for preventing SQL Injection and XSS and other potential threats (learn and try to implement these.)
            -> Use of APIs/ Use Of REST API
            -> CRUD operation on CandyProducts.

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
        }

        .image-container {
            width: 49%;
            height: 100vh;
            overflow: hidden;
        }

        .login-container {
            width: 51%;
            padding: 20px;
            box-sizing: border-box;
        }

        .login-header {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .login-form {
            text-align: center;
        }

        .form-input {
            margin-bottom: 10px;
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        .form-input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="image-container">
        <img src="Assets\Img\Home.jpg" alt="Image" style="width: 100%; height: 100%; object-fit: cover;">
    </div>
    <div class="login-container">
        <div class="login-header">Login</div>
        <form class="login-form" action="login_process.php" method="post">
            <div>
                <input class="form-input" type="text" name="username" placeholder="Username" required>
            </div>
            <div>
                <input class="form-input" type="password" name="password" placeholder="Password" required>
            </div>
            <div>
                <input class="form-input" type="submit" value="Login">
            </div>
        </form>
    </div>

</body>
</html>

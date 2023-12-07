<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="public/Styles.css">

</head>

<body>
    <?php
    $accessKey = 'SfUzzDLr_kMC9NdvuQyKS6nV4iO4Q3CIFXNNB2r5H_I';
    $apiUrl = 'https://api.unsplash.com/photos/random?client_id='.$accessKey.'&query=galaxy';
    // 50 images per hour "demo"
    $response = @file_get_contents($apiUrl);

    if($response !== false) {
        $data = json_decode($response, true);

        if(isset($data['urls']['regular'])) {
            $imageUrl = $data['urls']['regular'];
            $imageAlt = $data['alt_description'];
        } else {
            $imageUrl = "Assets/Img/home.png";
            $imageAlt = "Fallback Image";
        }
    } else {
        // Handle the error without exposing details to the frontend
        $imageUrl = "Assets/Img/home.png";
        $imageAlt = "Fallback Image";
    }
    ?>
   <style>
    body {
        overflow: hidden;
        margin: 0; 
    }

    .background-container {
        position: fixed;
        top: 0;
        left: 0;
        background-image: url('<?php echo $imageUrl; ?>');
        background-color: #000;
        height: 100vh;
        width: 100vw;
        z-index: -1;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center; 
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
    }

    main {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100vw;
        height: 100vh;
    }

    .login-container {
        background: rgba(255, 255, 255, 1);
        margin: auto;
        padding: 20px;
        width: 350px;
        border-radius: 10px;
        float: right;
    }

    .text-container {
        margin: auto;
        width: 250px;
        text-align: center;
    }

    .form-input {
        margin-top: 15px;
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
    }

    .form-label {
        display: block;
        margin-top: 15px;
        font-weight: bold;
    }

    .error-message {
        color: red;
    }

    .form-submit {
        margin-top: 20px;
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        background-color: #4caf50;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>


    <div class="background-container">

    </div>
    <main>
        <div class="text-container">
            <p>Sign in or create an account</p>
        </div>
        <div class="login-container">
            <h2>Sign In</h2>
            <p>New user? <a href="">Create an account</a></p>

            <form class="login-form" action="login_process.php" method="post">
                <div>
                    <label class="form-label" for="username">Username</label>
                    <input class="form-input" type="text" id="username" name="username" placeholder="Enter your username">
                    <?php
                    // Display username error message
                    if(isset($_GET['error'])) {
                        $errorMessages = json_decode(urldecode($_GET['error']), true);
                        if(isset($errorMessages['username'])) {
                            echo '<div class="error-message">'.$errorMessages['username'].'</div>';
                        }
                    }
                    ?>
                </div>
                <div>
                    <label class="form-label" for="password">Password</label>
                    <input class="form-input" type="password" id="password" name="password" placeholder="Enter your password">
                    <?php
                    // Display password error message
                    if(isset($_GET['error'])) {
                        $errorMessages = json_decode(urldecode($_GET['error']), true);
                        if(isset($errorMessages['password'])) {
                            echo '<div class="error-message">'.$errorMessages['password'].'</div>';
                        }
                    }
                    ?>
                </div>
                <div>
                    <input class="form-submit" type="submit" value="Continue">
                </div>
            </form>
        </div>
    </main>
</body>

</html>

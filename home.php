<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confectionery Delights</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .left-content {
            max-width: 40%;
            margin: auto;
        }

        h1 {
            font-size: 36px;
            color: #333;
            margin-bottom: 10px;
        }

        p {
            font-size: 18px;
            color: #666;
            margin-bottom: 30px;
        }

        .contact-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007BFF;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .contact-button:hover {
            background-color: #0056b3;
        }

        .right-content {
            margin: auto;
            max-width: 45%;
        }

        .right-content img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .quote-content {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-top: 20px;
        }

        .quote-content svg {
            width: 66.878px;
            height: 55.285px;
        }

        .quote {
            font-style: italic;
            font-size: 18px;
            color: #555;
            margin-top: 10px;
        }

        /* New section for displaying products */
        .products-section {
            margin-top: 40px;
            text-align: center;
        }

        .product-card {
            width: 30vw;
            margin: 10px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            text-align: left;
        }

        .product-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            object-position: center;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .product-name {
            font-weight: bold;
            font-size: 18px;
            color: #333;
            margin-bottom: 5px;
        }

        .product-description {
            font-size: 16px;
            color: #666;
            margin-bottom: 10px;
        }

        .product-price {
            font-size: 16px;
            color: #007BFF;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="left-content">
            <h1>Unlock the World of Confectionery Delights!</h1>
            <p>Our tutorials come with delicious examples and fun exercises. Explore the world of candies, chocolates,
                and treats, and become a confectionery expert in no time!</p>
            <a href="#" class="contact-button">Contact Us</a>
        </div>
        <div class="right-content">
            <img src="Assets/Img/eating.jpg" alt="Eating Confectionery">
        </div>
    </div>

    <!-- Additional content -->
    <div class="quote-content">
        <svg xmlns="http://www.w3.org/2000/svg" width="66.878" height="55.285" viewBox="0 0 66.878 55.285">
            <path id="Path_2" data-name="Path 2"
                d="M24.768-187.824q-1.391-1.391-2.782-2.836a21.943,21.943,0,0,1-2.461-3.05,15.664,15.664,0,0,1-1.766-3.638,14.171,14.171,0,0,1-.7-4.6,14.949,14.949,0,0,1,1.177-5.885A15.174,15.174,0,0,1,21.5-212.7a15.749,15.749,0,0,1,4.922-3.317,15.289,15.289,0,0,1,6.153-1.231,13.446,13.446,0,0,1,6.1,1.391,15.145,15.145,0,0,1,4.762,3.692,16.473,16.473,0,0,1,3.05,5.35,19.09,19.09,0,0,1,1.07,6.367,34.991,34.991,0,0,1-2.408,13.162,40.772,40.772,0,0,1-6.26,10.7,50.811,50.811,0,0,1-8.56,8.293,65.36,65.36,0,0,1-9.2,5.939q-1.5.856-2.3-.161t.7-2.622a26.375,26.375,0,0,0,4.066-5.35A27.058,27.058,0,0,0,26.32-176.8a16.868,16.868,0,0,0,.642-6.153A7.626,7.626,0,0,0,24.768-187.824Zm36.382,0q-1.391-1.391-2.782-2.836a21.943,21.943,0,0,1-2.461-3.05,15.664,15.664,0,0,1-1.766-3.638,14.171,14.171,0,0,1-.7-4.6,14.949,14.949,0,0,1,1.177-5.885,15.174,15.174,0,0,1,3.264-4.869,15.749,15.749,0,0,1,4.922-3.317,15.289,15.289,0,0,1,6.153-1.231,13.446,13.446,0,0,1,6.1,1.391,15.145,15.145,0,0,1,4.762,3.692,16.473,16.473,0,0,1,3.05,5.35,19.09,19.09,0,0,1,1.07,6.367,34.991,34.991,0,0,1-2.408,13.162,40.772,40.772,0,0,1-6.26,10.7,50.811,50.811,0,0,1-8.56,8.293,65.36,65.36,0,0,1-9.2,5.939q-1.5.856-2.3-.161t.7-2.622a26.375,26.375,0,0,0,4.066-5.35A27.058,27.058,0,0,0,62.7-176.8a16.868,16.868,0,0,0,.642-6.153A7.626,7.626,0,0,0,61.15-187.824Z"
                transform="translate(-17.064 217.25)" opacity="0.1" />
        </svg>
        <p class="quote">"Sugar, Spice, and Everything Nice – That's Our Promise to You!"</p>
    </div>

    <!-- New section for displaying products -->
    <div class="products-section">
        <h1>Products</h1>
        <?php
        include_once 'db_connection.php';
        include_once 'admin_crud.php';

        //$allCandyProducts = getAllCandyProducts();
        $candyCrud = new CandyProductsCrud($conn);
        $allCandyProducts = $candyCrud->getAllCandyProducts();

        if (count($allCandyProducts) > 0) {
            foreach ($allCandyProducts as $candy) {
                echo '<div class="product-card">';
                //echo $candy['imageURL']."<br>";
                echo '<img class="product-image" src="' . $candy['imageURL'] . '" alt="' . $candy['description'] . '">';
                echo '<div class="product-details">';
                echo '<p class="product-name">' . $candy['productName'] . '</p>';
                echo '<p class="product-description">' . $candy['description'] . '</p>';
                echo '<p class="product-price">$' . $candy['price'] . '</p>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "<p>No candy products available.</p>";
        }
        ?>
    </div>
</body>

</html>

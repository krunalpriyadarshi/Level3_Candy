<?php include_once 'admin_crud.php'; ?>
<?php
if (isset($_GET['deleteCandy'])) {
    $deleteCandyID = $_GET['deleteCandy'];
    if (deleteCandyProduct($deleteCandyID)) {
        echo "<p>Candy deleted successfully!</p>";
        header("Location: admin.php");
    } else {
        echo "<p>Error deleting candy.</p>";
    }
}

if (isset($_GET['updateCandy'])) {
    $updateCandyID = $_GET['updateCandy'];

    // Check if form is submitted for updating candy
    if (isset($_POST['updateCandy'])) {
        $newProductName = $_POST['productName'];
        $newDescription = $_POST['description'];
        $newPrice = $_POST['price'];
        $newImageURL = $_POST['imageURL'];

        // Call the updateCandyProduct function
        if (updateCandyProduct($updateCandyID, $newProductName, $newDescription, $newPrice, $newImageURL)) {
            echo "<p>Candy updated successfully!</p>";
            header("Location: admin.php");
        } else {
            echo "<p>Error updating candy.</p>";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <h1>Admin Candy CRUD Operations</h1>

    <!-- Add Candy Form -->
    <h2  id="sectionHead">Add Candy</h2>
    <form action="admin.php" method="post" id="candyForm">
        <label for="productName">Product Name:</label>
        <input type="text" name="productName" required><br>
        
        <label for="description">Description:</label>
        <textarea name="description" required></textarea><br>
        
        <label for="price">Price:</label>
        <input type="number" name="price" step="0.01" required><br>
        
        <label for="imageURL">Image URL:</label>
        <input type="text" name="imageURL" required><br>
        
        <button type="submit" name="addCandy">Add Candy</button>
    </form>

    <?php
    if (isset($_POST['addCandy'])) {
        $productName = $_POST['productName'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $imageURL = $_POST['imageURL'];

        if (insertCandyProduct($productName, $description, $price, $imageURL)) {
            echo "<p>Candy added successfully!</p>";
        } else {
            echo "<p>Error adding candy.</p>";
        }
    }
    ?>

    <!-- Display All Candy Products -->
    <h2>All Candy Products</h2>
    <?php
    $allCandyProducts = getAllCandyProducts();

    if (count($allCandyProducts) > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Name</th><th>Description</th><th>Price</th><th>Image URL</th><th>Delete</th><th>Update</th></tr>";

        foreach ($allCandyProducts as $candy) {
            echo "<tr>";
            echo "<td>{$candy['productID']}</td>";
            echo "<td>{$candy['productName']}</td>";
            echo "<td>{$candy['description']}</td>";
            echo "<td>\${$candy['price']}</td>";
            echo "<td>{$candy['imageURL']}</td>";
            echo "<td><button onclick=\"deleteCandy({$candy['productID']})\">Delete</button></td>";
            echo "<td><button onclick=\"updateCandy({$candy['productID']}, '{$candy['productName']}', '{$candy['description']}', {$candy['price']}, '{$candy['imageURL']}')\">Update</button></td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No candy products available.</p>";
    }
    ?>

    <script>
        function deleteCandy(productID) {
            var confirmation = confirm("Are you sure you want to delete this candy?");
            if (confirmation) {
                // Call the PHP function to delete candy
                window.location.href = 'admin.php?deleteCandy=' + productID;
            }
        }
        function updateCandy(ID,name,description,price,imageURL){
            console.log({ID,name,description,price,imageURL});
            document.getElementById('sectionHead').innerHTML = "Update Candy"
            document.getElementById('candyForm').productName.value = name;
            document.getElementById('candyForm').description.value = description;
            document.getElementById('candyForm').price.value = price;
            document.getElementById('candyForm').imageURL.value = imageURL;
            document.getElementById('candyForm').addCandy.innerHTML = "Update";

             // Set the button name to 'updateCandy'
            document.getElementById('candyForm').addCandy.name = 'updateCandy';

            // Optionally, you can also set the action URL with a query parameter for updating
            document.getElementById('candyForm').action = 'admin.php?updateCandy=' + ID;
        }
    </script>
</body>
</html>

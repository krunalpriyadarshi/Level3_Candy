<?php
include_once 'db_connection.php';

// Function to insert candy product
function insertCandyProduct($productName, $description, $price, $imageURL) {
    global $conn;
    
    $sql = "INSERT INTO CandyProducts (productName, description, price, imageURL) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssds", $productName, $description, $price, $imageURL);
    
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

// Function to update candy product
function updateCandyProduct($productID, $productName, $description, $price, $imageURL) {
    global $conn;
    
    $sql = "UPDATE CandyProducts SET productName=?, description=?, price=?, imageURL=? WHERE productID=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdsi", $productName, $description, $price, $imageURL, $productID);
    
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

// Function to delete candy product
function deleteCandyProduct($productID) {
    global $conn;
    
    $sql = "DELETE FROM CandyProducts WHERE productID=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $productID);
    
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

// Function to get all candy products
function getAllCandyProducts() {
    global $conn;
    
    $sql = "SELECT * FROM CandyProducts";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return [];
    }
}

// Usage examples:
// insertCandyProduct('New Candy', 'Description of new candy', 5.99, 'assets/img/new_candy.jpg');
// updateCandyProduct(1, 'Updated Candy', 'Updated description', 6.99, 'assets/img/updated_candy.jpg');
// deleteCandyProduct(1);
// $allCandyProducts = getAllCandyProducts();
?>

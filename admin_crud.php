<?php
include_once 'db_connection.php';

class CandyProductsCrud {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function insertCandyProduct($productName, $description, $price, $imageURL) {
        $sql = "INSERT INTO CandyProducts (productName, description, price, imageURL) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssds", $productName, $description, $price, $imageURL);

        return $stmt->execute();
    }

    public function updateCandyProduct($productID, $productName, $description, $price, $imageURL) {
        $sql = "UPDATE CandyProducts SET productName=?, description=?, price=?, imageURL=? WHERE productID=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssdsi", $productName, $description, $price, $imageURL, $productID);

        return $stmt->execute();
    }

    public function deleteCandyProduct($productID) {
        $sql = "DELETE FROM CandyProducts WHERE productID=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $productID);

        return $stmt->execute();
    }

    public function getAllCandyProducts() {
        $sql = "SELECT * FROM CandyProducts";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }
    }
}
?>
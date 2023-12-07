<?php
$host = "localhost";
$username = "root"; // Your database username (default is root for XAMPP)
$password = "1234567890"; // Your database password (default is empty for XAMPP)
$database = "group2_Candy";

// Create connection
$conn = new mysqli($host, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if not exists
$sqlCreateDb = "CREATE DATABASE IF NOT EXISTS $database";
if ($conn->query($sqlCreateDb) === TRUE) {
    if (isset($_GET['showMessage']) && $_GET['showMessage'] == 'true') {
        echo "Database created successfully or already exists.<br>";
    }

    // Select the database
    $conn->select_db($database);

    // Check the number of tables in the database
    $tableCountQuery = "SELECT COUNT(*) AS table_count FROM information_schema.tables WHERE table_schema = '$database'";
    $tableCountResult = $conn->query($tableCountQuery);

    if ($tableCountResult !== false) {
        $row = $tableCountResult->fetch_assoc();
        $tableCount = $row['table_count'];

        if ($tableCount == 0) {
            // No tables exist, execute DDL and DML
            // Execute candyshop_ddl.sql to create tables
            $sqlDdl = file_get_contents('SQL/G2_Candy_DDL.sql');
            if ($conn->multi_query($sqlDdl)) {
                do {
                    // Empty the result set to allow for the next query
                    if ($result = $conn->store_result()) {
                        $result->free();
                    }
                } while ($conn->more_results() && $conn->next_result());
                echo "DDL executed successfully.<br>";
            } else {
                die("Error executing DDL: " . $conn->error);
            }

            // Execute candyshop_dml.sql to insert data
            $sqlDml = file_get_contents('SQL/G2_Candy_DML.sql');
            if ($conn->multi_query($sqlDml)) {
                do {
                    // Empty the result set to allow for the next query
                    if ($result = $conn->store_result()) {
                        $result->free();
                    }
                } while ($conn->more_results() && $conn->next_result());
                echo "DML executed successfully.<br>";
            } else {
                die("Error executing DML: " . $conn->error);
            }
        }
    } else {
        die("Error checking table count: " . $conn->error);
    }
} else {
    die("Error creating database: " . $conn->error);
}
?>

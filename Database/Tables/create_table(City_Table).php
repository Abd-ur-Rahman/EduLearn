<?php
include '../db_connect.php';

// Check if the table already exists
$result = mysqli_query($conn, "SHOW TABLES LIKE 'city_table'");
if (mysqli_num_rows($result) > 0) {
    // Show a custom error message
    echo "The table 'City Table' already exists.";
} else {
    // Create the table
    mysqli_query($conn, "CREATE TABLE City_Table (
      City_ID INT(10) AUTO_INCREMENT PRIMARY KEY,
      City_Name VARCHAR(30) NOT NULL,
      Province VARCHAR(30) NOT NULL,
      Latitude FLOAT(7, 7) NOT NULL,
      Longitude FLOAT(7, 7) NOT NULL

    )");
    echo "The table 'City Table' Created Successfully";
}
?>
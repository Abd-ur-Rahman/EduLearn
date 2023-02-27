<?php
// Connect to the database
include "../db_connect.php";

// Prepare the query
$data1 = "example data 1";
$data2 = "example data 2";
$query = "SELECT * FROM city_table WHERE City_Name = '$data1' AND Province = '$data2'";

// Execute the query
$result_check = mysqli_query($conn, $query);

// Check if any rows were returned
if (mysqli_num_rows($result_check) > 0) {
    // Show a custom error message
    echo "The row already exists in the table.";
} else {
    // Insert the data into the table
    $query = "INSERT INTO city_table (City_Name, Province) VALUES ('$data1', '$data2')";
    mysqli_query($conn, $query);
    echo "Data Inserted Sucessfully";
}
?>
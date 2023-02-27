<?php
include '../db_connect.php';

// Check if the table already exists
$result = mysqli_query($conn, "SHOW TABLES LIKE 'university_table'");
if (mysqli_num_rows($result) > 0) {
    // Show a custom error message
    echo "The table 'University Table' already exists.";
    mysqli_query($conn, "ALTER TABLE `university_table` ADD CONSTRAINT `Test` FOREIGN KEY (`City_ID`) REFERENCES `university_table`(`Uni_ID`) ON DELETE CASCADE ON UPDATE CASCADE;");
} else {
    // Create the table
    mysqli_query($conn, "CREATE TABLE University_Table (
      Uni_ID INT(10) AUTO_INCREMENT PRIMARY KEY,
      Uni_Name VARCHAR(50) NOT NULL,
      Uni_Type VARCHAR(50) NOT NULL,
      Uni_Ranking INT(10) NOT NULL,
      Uni_Website TEXT(300) NOT NULL,
      City_ID INT(10) NOT NULL
    )");
    echo "The table 'City Table' Created Successfully";
    echo "<br>Refresh to change City_ID as a foregin key";
}
?>
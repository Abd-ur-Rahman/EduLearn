<?php
include "../db_connect.php";

if(isset($_POST["import"])) {
    $fileName = $_FILES['file']['tmp_name'];
    // ＄_FILES['file']['tmp_name']

    if($_FILES['file']['size'] > 0) {
        $file = fopen($fileName, "r");

        while(($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            $sqlInsert = "INSERT INTO city_table (City_Name, Province, Latitude, Longitude) VALUES ('" .$column[0] . "','" .$column[1] ."','" .$column[2] ."','" .$column[3] ."')";

            $result = mysqli_query($conn, $sqlInsert);

            if(!empty($result)) {
                echo "CSV Data Imported into the Database";
            } else {
                echo "Problem in importing CSV";
            }
        }
    }
}
?>

<form class = "form-horizental" action="" method = "post" name = "uploadCSV" encrypt = multipart/form-data>

<div>
    <label>Choose CSV File</label>
    <input type="file" name="file" accept=".csv">
    <button type="submit" name = "import">Import</button>
</div>

</form>
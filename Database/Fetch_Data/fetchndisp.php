<?php
$conn = mysqli_connect("localhost", "AbdulRahman", "admin123", "edulearn");
if (!$conn) {
    echo "Failed to Connect to Database";
} else {
    echo "Connect to Database Successful";
}

$sql = "SELECT DISTINCT City_Name  FROM city_table";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DropDown List</title>
    <script src="selectCity.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
    Select City: 
    <select id="city" onchange = "selectCity()">
        <?php while ($rows = mysqli_fetch_array($result)) { ?>
            <option value="<?php echo $rows["City_Name"]; ?>"> <?php echo $rows["City_Name"]; ?> </option>
        <?php } ?>
    </select>

    <table>
        <thead>
            <th style = "width: 30%">City Name</th>
            <th style = "width: 30%">Province</th>
            <th style = "width: 30%">Latitude</th>
            <th style = "width: 30%">Longitude</th>
        </thead>
        <tbody id="show"></tbody>
    </table>
    
</body>
</html>

<style>
.course-title img {
height: 100px;
float: right;
}
@media only screen and (max-width: 768px) {
.course-title img {
display: none;
}
}
</style>
<?php
 $conn = mysqli_connect("localhost", "AbdulRahman", "admin123", "edulearn");
 if (!$conn) {
     echo "Failed to Connect to Database";
 }

 $k = $_POST['id'];
 $k = trim($k);
 $sql = "SELECT * FROM city_table c INNER JOIN university_table u ON c.City_ID = u.City_ID WHERE City_Name = '{$k}'";
 $result = mysqli_query($conn, $sql);

 while ($rows = mysqli_fetch_array($result)) { ?>
    
        <h1> <?php // echo $rows["City_ID"]; ?> </h1>
        <p> <?php // echo $rows["City_Name"]; ?> </p>
        <p> <?php // echo $rows["Province"]; ?> </p>
        <p> <?php // echo $rows["Latitude"]; ?> </p>
        <p> <?php // echo $rows["Longitude"]; ?> </p>
        <p> <?php // echo $rows["Uni_ID"]; ?> </p>
        <p> <?php // echo $rows["Uni_Name"]; ?> </p>
        <p> <?php // echo $rows["Uni_Type"]; ?> </p>
        <p> <?php // echo $rows["Uni_Ranking"]; ?> </p>
        <p> <?php // echo $rows["Uni_Website"]; ?> </p>
        <p> <?php // echo $rows["City_ID"]; ?> </p>


<h1 style="display:inline;"><?php echo $rows['City_Name']; ?></h1>

<?php
} 
// print_r($rows);
?>
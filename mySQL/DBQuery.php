<?php require_once("includes/connection.php")?>
<?php
//3. Perform DB Query
$result = mysqli_query($connection, "SELECT * FROM subjects");
if (!$result){
    die("Database query failed: " . mysqli_error());
}

//4. Use returned Data
while ($row = mysqli_fetch_array($result)) {
    echo $row["menu_name"]." ".$row["position"]."<br />";
}
    //5. Close connection
    mysqli_close($connection);
?>

<?php
$conn = mysqli_connect("localhost", "root", "", "crudkn") or die("Connection Failed");
$sql = "SELECT * From student";
//$sql = "SELECT * From student Where id = {$_POST['id']}";
$result = mysqli_query($conn, $sql) or die("query failed.");
$output = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo json_encode($output);
//echo "<pre>";
//print_r($output);
//echo "</pre>";
?>
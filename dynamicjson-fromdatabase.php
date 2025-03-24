<?php

$conn = mysqli_connect("localhost", "root", "", "crudkn") or die("connection failed.");
$sql = "select * from student";
$result = mysqli_query($conn, $sql) or die("Query failed.");

$output = mysqli_fetch_all($result, MYSQLI_ASSOC);

$json_data = json_encode($output, JSON_PRETTY_PRINT);
// give name to the file
$file_name = "my-". date('d-m-Y'). ".json";
// to create,save file
if(file_put_contents("{$file_name}", $json_data)){
    echo $file_name."file created.";
}else{
    echo "can't insert data in json file.";
}


?>
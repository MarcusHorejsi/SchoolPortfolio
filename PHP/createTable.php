<?php

include 'connection.php';

$conn = Open();

$sql = "CREATE TABLE FormTable (name VARCHAR(30),email VARCHAR(30),phoneNumber varchar(12),gender varchar(5),comment varchar(50),emergencyContanct varchar(30));";

$results = $conn->query($sql);

if (! $results)
{
    die ('Error: '.mysqli_error($conn));
}
else
{
    echo "Data was added.";
}
Close ($conn);
?>
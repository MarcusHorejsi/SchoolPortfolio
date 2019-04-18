<?php
function Open()
{
    $host="localhost";
    $user="root";
    $password="";
    $db = "class";
    $conn = new mysqli ($host, $user, $password, $db)
    or die("Connection failed: %s\n".$conn ->error);
    return $conn;
}
function Close($conn)
{
    $conn -> close();
}
Open();
?>
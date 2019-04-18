<?php
//define variables
$nameErr = $emailErr = "";
$name = $email = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST["name"]))
    {
        $nameErr = "A name is required";
    }
    else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-z]*?$/",$name))//searches $name for the patteren, returns false otherwise
        {
            $nameErr = "Name may only contain letters and spaces";
        }
    }   
}
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST["email"]))
    {
        $emailErr = "An email is required";
    }
    else {
        $email = test_input($_POST["email"]);
        //check to see if email is formated properly
        if (!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $emailErr = "Invaild";
        }
    }   
}
function test_input($data)
{
    $data = trim($data); //removes spaces, tabs, newlines
    $data = stripslashes($data); //removes back slashes
    $data = htmlspecialchars($data);//removes html tags
    return $data;
}
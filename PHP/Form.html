<html>
<head>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
<?php
include 'connection.php';
//define variables and set to empty values
$nameErr = $emailErr=$phoneErr="";
$name=$email=$comment=$gender = $phone=$emer="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (empty($_POST["name"])){
		$nameErr = "Name is required";
	}
	else {
		$name = test_input($_POST["name"]);
		//Check to see if name only contains letters and white space
		if (!preg_match("/^[a-zA-Z ]*$/",$name))
		{
			$nameErr = "Name may only contain letters and spaces";
		} 
	}
	
	if (empty($_POST["email"])){
		$emailErr = "Email is required";
	}
	else {
		$email = test_input($_POST["email"]);
		//Check to see if email is formatted properly.
		if (!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			$emailErr = "This email is invalid";
		} 
	}
	
    if (empty($_POST["comment"])) {
        $comment = "";
    }
    else {
        $comment = test_input($_POST["comment"]);
	}

	if (empty($_POST["gender"])) {
        $gender = "";
    }
    else {
        $gender = test_input($_POST["gender"]);
	}
	
	if (empty($_POST["emer"])) {
        $emer = "";
    }
    else {
        $emer = test_input($_POST["emer"]);
	}
	
	if (empty($_POST["phone"])){
		$phoneErr = "Phone number is required";
	}
	else {
		$phone = test_input($_POST["phone"]);
		if (!preg_match("/^[0-9-]*$/",$phone))
		{
			$phoneErr = "Phone number may only contain numbers and hypens.";
		}
	}
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>

<form method="post"
action="">

Name: <input type="text" name = "name" value="<?php echo $name ?>">
<span class="error">* <?php echo $nameErr;?></span>
<br>
Email: <input type="text" name = "email" value="<?php echo $email ?>">
<span class="error">* <?php echo $emailErr;?></span>
<br>
Enter your phone number:
<input type="tel" id="phone" name="phone" minlength="10" maxlength="12" value="<?php echo $phone ?>">
	   <span class="error">* <?php echo $phoneErr;?></span>
	   Example: 123-456-7890
<br>
<input type="radio" name="gender" value="Male" required> Male
<br>
<input type="radio" name="gender" value="Female"> Female
<br>
<input type="radio" name="gender" value="Other"> Other
<br>
Comment: <textarea name="comment" rows = "2" cols = "25">
<?php echo $comment;?></textarea>
<br />
Emergancy Contact Name: <input type="text" name="emer" maxlength="25">
<br>
<br>
<input type="submit" name="submit" value="Submit">

</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name."<br />";
echo $email."<br />";
echo $phone."<br />";
echo $gender."<br />";
echo $comment."<br />";
echo $emer."<br />";

if (isset($_POST['submit']))
{
	$conn = Open();

	$sql = "INSERT INTO FormTable VALUES ('$name', '$email', '$phone', '$gender', '$comment', '$emer')";

	$results = $conn->query($sql);

	if (! $results)
	{
		die ('Error: '.mysqli_error($conn));
	}
	else
	{
		echo "Data was added.";
	}
	Close($conn);
}
?> 

<a href="output.php"><h3>Show Database</h3></a><hr />

<form action="" method="post">
<input name ="search" type="search">
<input name="button" type="submit" value="Search">
</form>



<?php


	if (isset($_POST['button']))
	{
		$conn = Open();
		$search=$_POST['search'];
		
		

		$sql = "SELECT * FROM formtable WHERE name LIKE '%{$search}%'";

		$results = $conn->query($sql);

		if ($results -> num_rows > 0)
        {
            
            while($row = $results->fetch_assoc())
            {
                echo "<br /><b>Name:</b> ".$row["name"]."<br /><b>Email:</b> ".$row["email"]."<br /><b>Phone Number:</b> ".$row["phoneNumber"]."<br /><b>Gender:</b> ".$row["gender"]."<br /><b>Comment:</b> ".$row["comment"]."<br /><b>Emergency Contact:</b> ".$row["emergencyContanct"]."<br />";
			}
			Close($conn);
        }
        else {
            echo "0 results <br />";
        }
	} 

?>

<hr /><form action="" method="post">
<input name ="remove" type="text">
<input name="buttons" type="submit" value="Delete">
</form>



<?php


	if (isset($_POST['buttons']))
	{
		$conn = Open();
		$remove=$_POST['remove'];

		$sql = "DELETE FROM formtable WHERE name= '{$remove}'";

		echo "Deleted successfully.";
	} 

?>


</body>
</html> 
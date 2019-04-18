<?php
//check connection
include 'connection.php';

$conn = Open();
echo "Connection Successful <br />";

$sql = 'SELECT Model, Price FROM camera'; //Query string
$result = $conn->query($sql);

if ($result -> num_rows > 0)
{
    //output data of each row
    while($row = $result->fetch_assoc())
    {
        echo "Model: ".$row["Model"]." - Price: ".$row["Price"]."<br />";
    }
}
else {
    echo "0 results <br />";
}

echo "Data Retrival Successful \n";

Close($conn);

?>
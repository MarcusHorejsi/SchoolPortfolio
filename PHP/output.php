<html>
    <body>
        <a href="Form.php"><h3>Back to Submission Page</h3><br /></a>

        <?php
        include "connection.php";

        $conn = open();
        $sql = 'SELECT name, email, phoneNumber, gender, comment, emergencyContanct FROM formtable';
        $result = $conn->query($sql);

        if ($result -> num_rows > 0)
        {
            
            while($row = $result->fetch_assoc())
            {
                echo "<br /><b>Name:</b> ".$row["name"]."<br /><b>Email:</b> ".$row["email"]."<br /><b>Phone Number:</b> ".$row["phoneNumber"]."<br /><b>Gender:</b> ".$row["gender"]."<br /><b>Comment:</b> ".$row["comment"]."<br /><b>Emergency Contact:</b> ".$row["emergencyContanct"]."<br />";
            }
        }
        else {
            echo "0 results <br />";
        }

        echo "<br />Data Retrival Successful \n";

        Close($conn);
        ?>
    </body>
</html>
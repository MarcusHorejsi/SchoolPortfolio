        <?php
            echo "Hello World <br />"; //this prints plain text
            $txt = "Hello World!";
            echo $txt."<br />";
            echo "My first program is called ".$txt." ! <br />";
            //Global: defined outside of a function, BUT can only be accessed OUTSIDE of a function
            #Local: defined inside of a function, BUT can only be accessed INSIDE of a function
            $x = 5; //global variable
            /*function varTest() {
                //difining x outside the function will return an error
                echo "Variable x is: ".$x
            }            
            varTest();*/
            echo "Variable x is: ".$x;
            //global keyword os used to access a variable from inside a function
            $y = 0;
            function varTest2() {
                global $y;
                $y = 10;
                echo "<br />".$y." is my first number";
            }
            echo "<br /> x and y make ".$x." and ".$y."<br />";
            date_default_timezone_set("America/Chicago");
            $time = date("H");
            if ($time >=12 && $time<17) { 
                echo "Good Afternoon";
            } 
            elseif ($time >= 17) {  
                echo "Good Night!";  
            } 
            else {   
                echo "Good Morning";  
            } 
        ?>
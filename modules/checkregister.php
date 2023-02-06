<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    { 
        $username = ($_POST['username']);
        $password = ($_POST['password']);
        $fName = ($_POST['fName']);
        $lName = ($_POST['lName']);
        $address1 = ($_POST['address1']);
        $address2 = ($_POST['address2']);
        $email = ($_POST['email']);
        $bool = true;
        $db_name = "deliverydb"; 
        $db_username = "root"; 
        $db_pass = "root"; 
        $db_host = "localhost:3307"; 
        $con = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name") or 
            die(mysqli_error());
            $query = "SELECT * from users";
            $results = mysqli_query($con, $query);
                while($row = mysqli_fetch_array($results)) // assigns username
                    { 
                        $table_users = $row['username'];
                       
                    if($username == $table_users) // if the username is equal to the table of users execute the code
                    { 
                        $bool = false;
                        Print '<script>alert("That username is already taken!");</script>';
                        Print '<script>window.location.assign("http://localhost/project/LE3/home.php");</script>';
                    } 
                } 
            if($bool) // if the username is unique
            { 
                mysqli_query($con, "INSERT INTO users (username, password, email, fName, lName, address1, address2) VALUES 
                ('$username','$password','$email','$fName','$lName','$address1','$address2')");
                Print '<script>alert("Successful Registration!");</script>';
                Print '<script>window.location.assign("http://localhost/project/LE3/home.php");</script>';
            } 
     } 
?>
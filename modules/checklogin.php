<?php
    $username = ($_POST['username']);
    $password = ($_POST['password']);
    $db_name = "deliverydb"; 
    $db_username = "root"; 
    $db_pass = "root"; 
    $db_host = "localhost:3307"; 
    $con = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name") or die(mysqli_error());
    $query = "SELECT * from users WHERE username ='$username'";
    $results = mysqli_query($con, $query);
    $table_users = "";
    $table_password = "";

        if($results != "")//If results is not empty
        {
            while($row = mysqli_fetch_assoc($results)) // loops through the table of users and password
            {
                $table_users = $row['username'];
                $table_password = $row['password'];
            }

            if(($username == $table_users) && ($password == $table_password)) // if there is a match then execute the codes below
                {
                    if($password == $table_password)
                        {   
                            session_start();
                            $_SESSION['user'] = $username;
                            header('Location: /project/LE3/home.php');
                        } 
                    }
                    else // if the password is not correct
                    {
                        Print '<script>alert("Incorrect Password!");</script>';
                        Print '<script>window.location.assign("/project/LE3/home.php");</script>';
                    }
                }
        else // if username is incorrect
            {
                Print '<script>alert("Incorrect Username!");</script>';
                Print '<script>window.location.assign("/project/LE3/home.php");</script>';
            }
        
?>
  
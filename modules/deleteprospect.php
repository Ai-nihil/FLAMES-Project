<?php
    session_start();
        if(isset($_SESSION['user'])) //Session is used to check if a user is logged in 
            { 
                if($_SERVER['REQUEST_METHOD'] == "GET") //GET method
                { 
                    $con = mysqli_connect("localhost:3307", "root", "root", "deliverydb") or die(mysqli_error()); //Connect to server
                    $ProspectID = $_GET['id'];
                    mysqli_query($con, "DELETE FROM prospect WHERE ProspectID = '$ProspectID'");
                    header('Location: /project/LE3/prospects.php');
                }
                else
                    {
                        header('Location: /project/LE3/home.php');
                    }  
            } 
        else
        {
            header('Location: /project/LE3/home.php');
        }   
?>
<?php
    session_start();
    if(isset($_SESSION['user'])){
        if($_SERVER['REQUEST_METHOD'] = "POST")
        { 
            $fName = ($_POST['fName']);
            $lName = ($_POST['lName']);
            $Month = ($_POST['Month']);
            $Day = (int) ($_POST['Day']);

            $bDay = $Month. " ".$Day;
            
            $db_name = "deliverydb"; 
            $db_username = "root"; 
            $db_pass = "root"; 
            $db_host = "localhost:3307";
            $con = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name") or die(mysqli_error());//Used to connect to the server

            $mquery = "SELECT * from zodiac WHERE (zStartMonth = '$Month' || zLastMonth = '$Month');";

            $results2 = mysqli_query($con, $mquery); 

            while($row = mysqli_fetch_array($results2)) { //While loop to assign values 
                $table_zStartMonth = $row['zStartMonth']; 
                $table_zStartDay = $row['zStartDay']; 
                $table_zlastMonth = $row['zLastMonth']; 
                $table_zLastDay = $row['zLastDay']; 
                $table_zID = $row['ZodiacID']; 
                $table_zodiac = $row['zSign']; 
                
                if(($Month == $table_zStartMonth) && ($Day >= $table_zStartDay) || ($Month == $table_zlastMonth) && ($Day <= $table_zLastDay)){
                    $ZodiacID = $table_zID;
                    break;
                }

            }



            mysqli_query($con, "INSERT INTO prospect (FirstName, LastName, bDay, ZodiacID) VALUES ('$fName','$lName','$bDay','$ZodiacID')");
            header('Location: /project/LE3/prospects.php');
            exit;
        }
    else
        {
            header('Location: /project/LE3/home.php');
            exit;
        }
    }
    else
        {
            header('Location: /project/LE3/home.php');
            exit;
        }
    
?>
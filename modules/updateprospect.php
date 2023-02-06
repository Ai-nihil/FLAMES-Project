<?php
    session_start();
        if(isset($_SESSION['user']))
            { 
             if($_SERVER['REQUEST_METHOD'] == "POST")
                { 
                    $con = mysqli_connect("localhost:3307", "root", "root", "deliverydb") or die(mysqli_error()); //mysqli_connects the program to the server
                    $ProspectID = $_SESSION['ProspectID'];
                    $fName = ($_POST['fName']);
                    $lName = ($_POST['lName']);
                    $Month = ($_POST['Month']);
                    $Day = ($_POST['Day']);
                    
                    $bDay = $Month. " ".$Day;
                                    
                    mysqli_query($con, "UPDATE prospect SET FirstName ='$fName', LastName='$lName', bDay ='$bDay', WHERE ProspectID='$ProspectID'") ;
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                } 
            }
        else
            {
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit;
            }
                $user = $_SESSION['user'];
                        $id_exists = false;
?>
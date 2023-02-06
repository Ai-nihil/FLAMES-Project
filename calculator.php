<?php require('modules/main.php'); ?>
<?php include('modules/navbar.php'); ?>
<style>
    <?php include 'CSS/calculator.css'; ?>    
</style>

<?php   
    session_start();
    if (isset($_SESSION['user'])){

    }
    else{
        header ('location: /project/LE3/home.php');
    }
            $db_name = "deliverydb"; 
            $db_username = "root"; 
            $db_pass = "root"; 
            $db_host = "localhost:3307";
            $con = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name") or die(mysqli_error());
            $User1 = "";

            $mquery2 = "SELECT * FROM `prospect`";
            $all_details = mysqli_query($con, $mquery2);

            $ProID = array();
            $FirstName = array();

            while ($display = mysqli_fetch_array(
                $all_details,MYSQLI_ASSOC)):;
                array_push($ProID,$display["ProspectID"]);
                array_push($FirstName,$display["FirstName"]);
            endwhile;
?>

<div class = "w3-container w3-row calculatorarea w3-display-middle" style = "width:100%;" >
    <div class = "w3-half">
    <center>
        <div class = "matchBar"> 
            <center>
            <h1 class="resultstitle">Who to match?</h1><br><br><br><br>

            <form method="POST">
            <label class = "caltitle">Person Name: </label>
            <select name = "Person1" class = "dropboxClass" required >
                <option value="" disabled> </option>
                    <?php
                        for ($x = 0 ; $x < count($ProID); $x++){
                            echo "<option value='".$ProID[$x]."'>".$FirstName [$x]."</option>"; 
                        }
                    ?>
            </select> <br> <br>

            <label class = "caltitle">Person Name: </label>
            <select name = "Person2" class = "dropboxClass" required>
                <option value="" disabled> </option>
                    <?php
                        for ($x = 0 ; $x < count($ProID); $x++){
                                echo "<option value='".$ProID[$x]."'>".$FirstName [$x]."</option>"; 
                        }
                    ?>
            </select> <br><br><br>

            <input type = "submit" class = "formsubmit" name = "submit" value ="MATCH!"><br><br>
                </form>
            
        </div>
        </center>
    </div>

    <div class = "w3-half">
        <center>
        <div class = "resultsBar"> 
            <h1 class="resultstitle">F.L.A.M.E.S Result</h1>
            <?php
                 
                function GetFullName($lname,$fname){
                    return $fname . " " . $lname;
                }

                if (isset($_POST['Person1'])){
                    $User1 = $_POST['Person1'];
                    $User2 = $_POST['Person2'];

                    $mquery3= "SELECT * FROM `prospect` INNER JOIN zodiac ON prospect.ZodiacID = zodiac.ZodiacID WHERE ProspectID = '$User1'";
                    $all_categories3 = mysqli_query($con, $mquery3);

                    while($row = mysqli_fetch_array($all_categories3)) {
                        $U1LName = $row['LastName']; 
                        $U1FName = $row['FirstName']; 
                        $U1bDay = $row['bDay']; 
                        $U1zSign = $row['zSign']; 
                        $U1zSymbol = $row['zSymbol']; 
                        $U1zID = $row['ZodiacID']; 
                    }
                    

                    $mquery4= "SELECT * FROM `prospect` INNER JOIN zodiac ON prospect.ZodiacID = zodiac.ZodiacID WHERE ProspectID = '$User2'";
                    $all_categories4 = mysqli_query($con, $mquery4);

                    while($row = mysqli_fetch_array($all_categories4)) {
                        $U2LName = $row['LastName'];
                        $U2FName = $row['FirstName']; 
                        $U2bDay = $row['bDay'];
                        $U2zSign = $row['zSign']; 
                        $U2zSymbol = $row['zSymbol']; 
                        $U2zID = $row['ZodiacID']; 
                    }

                    $U1Name = GetFullName($U1LName,$U1FName);
                    $U2Name = GetFullName($U2LName,$U2FName);

                    $Person1 = str_split($U1Name);
                    $Person2 = str_split($U2Name);

                    $similar1 = array_intersect($Person1, $Person2);
                    $similar2 = array_intersect($Person2, $Person1);

                    $merge = array_merge($similar1, $similar2);
                    $num = count($merge);
            
                    $mquery5= "SELECT * FROM `calculator` WHERE ZodiacID1 = '$U1zID' && ZodiacID2 = '$U2zID'";
                    $results2 = mysqli_query($con, $mquery5);
                    
                    while($row = mysqli_fetch_assoc($results2))
                    {
                        $Compatible = $row['Result'];
                    }

                    echo "</br> <p class='resultstitle3'>$U1FName $U1LName is <u><i> $U1zSign($U1zSymbol)</u></i> </br> $U2FName $U2LName is <u><i> $U2zSign($U2zSymbol)</u></i></br><p>";

                    if($num == 6 || ($num % 6) == 0){
                            echo "<p class='resultstitle4'>Soulmates<p>";
                    }elseif($num == 5 || ($num % 5) == 0){
                            echo "<p class='resultstitle4'>Engaged<p>";
                    }elseif($num == 4 || ($num % 4) == 0){
                            echo "<p class='resultstitle4'>Married<p>";
                    }elseif($num == 3 || ($num % 3) == 0){
                            echo "<p class='resultstitle4'>Anger<p>";
                    }elseif($num == 2 || ($num % 2) == 0){
                            echo "<p class='resultstitle4'>Lovers<p>";
                    }elseif($num == 1 || ($num % 1) == 0){
                            echo "<p class='resultstitle4'>Friends<p>";
                    }  
                    
                    echo "<p class='resultstitle3'>and they are</br><p>";
                    echo "<p class='resultstitle4'>$Compatible<p>";
                    
                }

                else{
                    echo "</br></br></br></br></br></br><br></br></br></br></br></br></br>";
                }
                unset($_POST);
            ?>
       
        </div>
        </center>
    </div>  
</div>
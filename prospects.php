<?php require('modules/main.php'); ?>
<?php include('modules/navbar.php'); ?>

<?php error_reporting(0);//removes all errors
        session_start();//Starts the session
            if(isset($_SESSION['user'])){ // Checks if the users is logged in
                
            } else{
                    header('Location: /project/LE3/home.php');
                    exit;
            }
?>
 <div class = "w3-row prospectMain">
        <div class = "w3-twothird w3-container">
            <center>
            <div class = "prospectTable">
            
            <table class = "container" width="100%"><!-- Table used to show candidate's details-->
    
            <tr>
            <th>Candidates ID</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Birthday</th>
            <th>Zodiac</th>
            <th>Delete</th>
            </tr>
            <?php
                $con = mysqli_connect("localhost:3307", "root", "root", "deliverydb") or die(mysqli_error());//Connects the program to the server
                $query = mysqli_query($con, "SELECT * FROM prospect INNER JOIN zodiac ON prospect.ZodiacID = zodiac.ZodiacID");
                while($row = mysqli_fetch_array($query)) {
                    Print "<tr>";
                    Print '<td align="center">'. $row['ProspectID'] ."</td>";
                    Print '<td align="center">'. $row['LastName'] . "</td>";
                    Print '<td align="center">'. $row['FirstName'] ."</td>";
                    Print '<td align="center">'. $row['bDay'] ."</td>";
                    Print '<td align="center">'. $row['zSign'] ."</td>";  
                    Print '<td align="center"><a href="#" onclick="myFunction('.$row['ProspectID'].')">delete</a> </td>';
                    Print "</tr>";
                }
            ?>
            </table>
            
        <script>
        function myFunction(id)
        {
          var r = confirm("Are you sure you want to delete this record?");
          if (r == true) {
                window.location.assign("modules/deleteprospect.php?id=" + id);
            }
            }
        </script>
    
         </div>
         <center>
        </div>
            <br>
            <div class = "w3-third w3-container">
                <div class = "prospectForm">
                    <center>
                        <br/><br/>
                        <h1 class = "registerFormTitle">Add A Person</h1>
                        <form class = "registerForm" action = "modules/checkprospect.php" method="POST">
                        <input class = "registerFormInput" type = "text" name = "fName" required = "required" placeholder = "First Name" /><br/>
                        <input class = "registerFormInput" type = "text" name = "lName" required = "required" placeholder = "Last Name" /><br/>
                        <h4 class="subTitle">Enter birthday</h4>

                        <div>
                        <select class = "registerFormInput" name = "Month" class = "select" id = "month" required>
                                <option value = "" disabled = "disabled" selected = " ">Enter Month</option>
                                <option value = "January">January</option>
                                <option value = "February">February</option>
                                <option value = "March">March</option>
                                <option value = "April">April</option>
                                <option value = "May">May</option>
                                <option value = "June">June</option>
                                <option value = "July">July</option>
                                <option value = "August">August</option>
                                <option value = "September">September</option>
                                <option value = "October">October</option>
                                <option value = "November">November</option>
                                <option value = "December">December</option>
                            
                            </select><br><br>
                            <select class = "registerFormInput" name = "Day" class="select" id = "day" required>
                            <option value = "" disabled = "disabled" selected = " ">Enter Day</option>
                                <option value = "1"> 1 </option>
                                <option value = "2"> 2 </option>
                                <option value = "3"> 3 </option>
                                <option value = "4"> 4 </option>
                                <option value = "5"> 5 </option>
                                <option value = "6"> 6 </option>
                                <option value = "7"> 7 </option>
                                <option value = "8"> 8 </option>
                                <option value = "9"> 9 </option>
                                <option value = "10"> 10 </option>
                                <option value = "11"> 11 </option>
                                <option value = "12"> 12 </option>
                                <option value = "13"> 13 </option>
                                <option value = "14"> 14 </option>
                                <option value = "15"> 15 </option>
                                <option value = "16"> 16 </option>
                                <option value = "17"> 17 </option>
                                <option value = "18"> 18 </option>
                                <option value = "19"> 19 </option>
                                <option value = "20"> 20 </option>
                                <option value = "21"> 21 </option>
                                <option value = "22"> 22 </option>
                                <option value = "23"> 23 </option>
                                <option value = "24"> 24 </option>
                                <option value = "25"> 25 </option>
                                <option value = "26"> 26 </option>
                                <option value = "27"> 27 </option>
                                <option value = "28"> 28 </option>
                                <option value = "29"> 29 </option>
                                <option value = "30"> 30 </option>
                                <option value = "31"> 31 </option>
                            </select><br><br>
                        </div>

                        <input class =  "registerSubmitForm"  type="submit" value="Submit"/>
                        </form>
                        <br/><br/>
                    </center>
                </div>
            </div>
            </div>
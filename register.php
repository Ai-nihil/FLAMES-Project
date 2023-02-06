<?php require('modules/main.php'); ?>
<script>
$(document).ready(function(){
    $("#rightside").hide();}
  );
</script>
<?php include('modules/navbar.php'); ?>



<div class = "registerFormBar">
  <center>
            <h1 class = "registerFormTitle">Registration Form</h1>
            <form class = "registerForm" action="modules/checkregister.php" method="POST">
            <input class = "registerFormInput" type = "text" name = "fName" required = "required" placeholder = "First Name" /><br/>
            <input class = "registerFormInput" type = "text" name = "lName" required = "required" placeholder = "Last Name" /><br/>
            <input class = "registerFormInput" type  ="text" name = "address1" required = "required" placeholder = "Address Line 1" /><br/>
            <input class = "registerFormInput" type = "text" name = "address2" required = "required" placeholder = "Address Line 2" /><br/>
            <input class = "registerFormInput" type = "text" name = "city" required = "required" placeholder = "City" /><br/>
            <input class = "registerFormInput" type = "text" name = "state" required = "required" placeholder = "State / Province" /><br/>
            <input class = "registerFormInput" type = "text" name = "email" required = "required" placeholder="E-Mail"/><br/>
            <input class = "registerFormInput" type =" text" name = "username" required = "required" placeholder="Username"/><br/>
            <input class = "registerFormInput" type = "password" name = "password" required = "required" placeholder="Password" /><br/>
            <input class =  "registerSubmitForm"  type = "submit" value = "Register"/>
            </form>
    </center>
</div>



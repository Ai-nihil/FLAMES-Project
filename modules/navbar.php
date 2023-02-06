<div class="navbar navbar-expand-lg navbar-light fixed-top" id="cssnavbar">
    <a id = "csstitle" href = "home.php">
        <img src = "https://i.ibb.co/b1dKkqF/Screenshot-2023-02-01-040105.png" width = "210" height = "90">    
    </a>

    <div id = "rightside">
            <?php error_reporting(0);
                    session_start(); //session_start will start the session
                        if(isset($_SESSION['user'])){ //isset checks if the user is logged in
                        include('modules/choice.php');
                        }
                        else{
                        include('modules/login.php');
                        }
                        $user = $_SESSION['user']; //user value is assigned here
            ?>

    </div>

</div>
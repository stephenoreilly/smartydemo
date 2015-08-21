<?php
    $link = mysqli_connect(getenv('IP'), "stevo11850", "", "sample_db", 3306);
    
     session_start();
    $sessionid=$_SESSION['id'];
?>
<?php
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);
    
    $link = new mysqli($server, $username, $password, $db);

 $query="CREATE TABLE users3 (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        password VARCHAR(50),
        reg_date TIMESTAMP
            );";



    $res =mysqli_query($link,$query);
    if(!$res){
        echo "error";
    }
    else{
        echo "no error";
    }
     session_start();
     $sessionid=$_SESSION['id'];
?>
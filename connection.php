<?php
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);
    
    $link = new mysqli($server, $username, $password, $db);

 $query="CREATE TABLE shoppingcart (
    
    item_id INT(6) UNSIGNED NOT NULL,
    user_id INT(6) UNSIGNED NOT NULL,
    amount INT(6) UNSIGNED,
    PRIMARY KEY (item_id, user_id)

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
<?php
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);
    
    $link = new mysqli($server, $username, $password, $db);

 $query="
ALTER TABLE shoppingcart
    ADD FOREIGN KEY (user_id)
    REFERENCES users3(id);
    ALTER TABLE shoppingcart
    ADD FOREIGN KEY (item_id)
    REFERENCES items(id);";




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
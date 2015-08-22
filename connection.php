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
            );


CREATE TABLE items (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    price DECIMAL(10,2),
    description VARCHAR(50),
    reg_date TIMESTAMP
    );
CREATE TABLE shoppingcart (
    
    item_id INT(6) UNSIGNED NOT NULL,
    user_id INT(6) UNSIGNED NOT NULL,
    amount INT(6) UNSIGNED,
    PRIMARY KEY (item_id, user_id)

);
ALTER TABLE shoppingcart
    ADD FOREIGN KEY (user_id)
    REFERENCES users3(id);
    ALTER TABLE shoppingcart
    ADD FOREIGN KEY (item_id)
    REFERENCES items(id);";



    mysqli_query($link,$query);
     session_start();
     $sessionid=$_SESSION['id'];
?>
<?php
    require('connection.php');
    require('initialize_shop.php');
    $query="INSERT INTO users2 (name, email, password)
                            VALUES ('Beth','$email','$securePass');";
                mysqli_query($link,$query);
?>
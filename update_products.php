<?php
    require('connection.php');
    require('initialize_shop.php');
    $error="";
    if($_POST['name']){
        $name=mysqli_real_escape_string($link,$_POST['name']);
        $description=mysqli_real_escape_string($link,$_POST['description']);
        $price=(float)mysqli_real_escape_string($link,$_POST['price']);
        $query="SELECT * FROM items WHERE name='$name'";
        $result=mysqli_query($link,$query);
        $row=mysqli_fetch_array($result);
        if($row) $error.= "That product already exists"."<br/>";
        if(!$_POST['price']){
            $error.="Must enter a price"."<br/>";
        }
        if(!$_POST['description']){
            $error.="Must enter a description"."<br/>";
        }
        else
        {
            $query="INSERT INTO items (name, price, description)
                        VALUES ('$name',$price,'$description');";
            mysqli_query($link,$query);
            $error.="Product added successfully";
        }
    }
?>
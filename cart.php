<?php
    session_start();
    require_once('connection.php');
    $sessionid=$_SESSION['id'];
    $query="SELECT * FROM shoppingcart INNER JOIN items ON shoppingcart.item_id = items.id AND user_id=$sessionid";
    $result=mysqli_query($link,$query);
    $index = 0;
    $cart=[];
    while($row = mysqli_fetch_assoc($result)) 
    {
         $cart[$index] = $row;
         $index++;
    };
    $total=0;
     
    foreach ($cart as $item) {
        $total+=$item['amount']*$item['price'];
    };
?>
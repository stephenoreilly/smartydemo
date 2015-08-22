<?php
    require('connection.php');
    require('shop_classes.php');
    
    if(!isset($shop)){
       $shop = new Shop;
       $cart = new ShoppingCart;
    };
    
    $query="SELECT * FROM items;";
    $result=mysqli_query($link,$query);
    $index = 0;
    $resultsArray=[];
    while($row = mysqli_fetch_assoc($result)) // loop to give you the data in an associative array so you can use it however.
    {
         $resultsArray[$index] = $row;
         $index++;
    };

    foreach ($resultsArray as $item) {
        $shop->addItem(new Item($item['id'],$item['name'],$item['description'],$item['price']));
    };
   
?>
<?php
    require_once('shop_classes.php');
    require_once('connection.php');
    if($_POST['remove']){
        $id=mysqli_real_escape_string($link,$_POST['remove']);
         $query="DELETE FROM shoppingcart
                    WHERE item_id='$id' AND user_id=$sessionid;";
         mysqli_query($link,$query);
         header("Location:mainpage.php"); 
    }
    elseif($_POST['product']){
        $id=mysqli_real_escape_string($link,$_POST['product']);
        $amount=mysqli_real_escape_string($link,$_POST['amount']);
        $query="SELECT * FROM shoppingcart WHERE item_id='$id' AND user_id=$sessionid";
        $result=mysqli_query($link,$query);
        $row=mysqli_fetch_array($result);
        if($row){
            $query="UPDATE shoppingcart
                        SET amount=$amount
                        WHERE item_id='$id' AND user_id=$sessionid";
            mysqli_query($link,$query);
            
        }
        else{
             $query="INSERT INTO shoppingcart (item_id, user_id, amount)
                        VALUES ($id,$sessionid,$amount);";
             mysqli_query($link,$query);
            
        }
    
         $query="SELECT * FROM shoppingcart INNER JOIN items ON shoppingcart.item_id = items.id";
        $result=mysqli_query($link,$query);
        $index = 0;
        $cart=[];
        while($row = mysqli_fetch_assoc($result)) 
        {
             $cart[$index] = $row;
             $index++;
        };
        
     header("Location:mainpage.php");  
    }
?>
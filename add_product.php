<?php    
  /*  require('connection.php');
    require('initialize_shop.php');
    $query="SELECT name FROM items WHERE "
    $query="INSERT INTO users2 (name, email, password)
                            VALUES ('Beth','$email','$securePass');";
    mysqli_query($link,$query);
*/
    require('smarty_header.php');
    require('update_products.php');
    $arr=array("name","price","description");
    $smarty->assign('formTextItems',array("name","description"));
    $smarty->assign('formNumberItems',array("price"));
    $smarty->assign('errors',$error);
    $smarty->display("add_product.tpl"); 

?> 
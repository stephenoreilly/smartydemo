<?php    
    require('smarty_header.php');
    require('update_products.php');
    $arr=array("name","price","description");
    $smarty->assign('formTextItems',array("name","description"));
    $smarty->assign('formNumberItems',array("price"));
    $smarty->assign('errors',$error);
    
    $smarty->assign('title','Add Product');
    $smarty->display("templates/add_product.tpl"); 

?> 
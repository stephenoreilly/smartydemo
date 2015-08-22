<?php
    include("connection.php");
    if($_SESSION['id']) {
        
        require_once('initialize_shop.php');
        ob_flush();
        flush();
        unset($cart);
        require('cart.php');
        
        require('smarty_header.php');
        $smarty->assign('cart',$cart);
        $smarty->assign('total',$total);
        $smarty->assign('items',$shop->items);
        $smarty->assign('title','My Shop');
        $smarty->display('templates/mainpage.tpl');
        

    }
    else{
      header("Location:index.php");
    }
?>
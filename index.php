<?php
    include('login.php');
    require('smarty_header.php');
    $smarty->assign('title','Login');
    
    $errors=$_SESSION['error'];
    $_SESSION['error']='';
    $loginemail=$_SESSION['loginemail'];
    $_SESSION['loginemail']='';
    $email=$_SESSION['email'];
    $_SESSION['email']='';
    $smarty->assign('errors',$errors);
    $smarty->assign('loginemail',$loginemail);
    $smarty->assign('email',$email);
    $smarty->display('index.tpl');
    
   
?>
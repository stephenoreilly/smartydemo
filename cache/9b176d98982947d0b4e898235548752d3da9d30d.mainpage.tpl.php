<?php
/*%%SmartyHeaderCode:177878168055d831ec508842_07596148%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b176d98982947d0b4e898235548752d3da9d30d' => 
    array (
      0 => '/home/ubuntu/workspace/smarty/templates/mainpage.tpl',
      1 => 1440231902,
      2 => 'file',
    ),
    '4a4efbb76ffe2f58bbfd8c3c66f6c54ddee39f3f' => 
    array (
      0 => '/home/ubuntu/workspace/smarty/templates/header.tpl',
      1 => 1440109733,
      2 => 'file',
    ),
    '64b15c6efb2782a967b8581e86949315cbaf40d2' => 
    array (
      0 => '/home/ubuntu/workspace/smarty/templates/cart.tpl',
      1 => 1440230618,
      2 => 'file',
    ),
    '15792aba2aac6fcec5af959bbe2f7d1ca733c665' => 
    array (
      0 => '/home/ubuntu/workspace/smarty/templates/footer.tpl',
      1 => 1440109657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177878168055d831ec508842_07596148',
  'tpl_function' => 
  array (
  ),
  'version' => '3.1.28-dev/44',
  'unifunc' => 'content_55d85d2e598851_00089410',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55d85d2e598851_00089410')) {
function content_55d85d2e598851_00089410 ($_smarty_tpl) {
?>
<html> 
<head> 
  <title>My Shop</title> 
  <link rel="stylesheet" type="text/css" href="style.css">

</head> 
<body>
<form action="login.php" method="post">
    <input class="logout" name="submit" type="submit" value="Log Out"></input>
</form>
        <div class="bodyContainer">
            <div class="basket">
    <h2>Cart</h2>
        <p>Total: $0.00</p>
</div>
            <h1>Items in My Shop</h1>
                        <a href="add_product.php">Add Product</a> 
        </div>
    
</body> 
</html><?php }
}
?>
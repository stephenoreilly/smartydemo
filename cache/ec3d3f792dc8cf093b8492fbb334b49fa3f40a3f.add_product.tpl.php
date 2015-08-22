<?php
/*%%SmartyHeaderCode:61078396055d8237c5ca801_41060444%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec3d3f792dc8cf093b8492fbb334b49fa3f40a3f' => 
    array (
      0 => '/home/ubuntu/workspace/smarty/templates/add_product.tpl',
      1 => 1440199895,
      2 => 'file',
    ),
    '4a4efbb76ffe2f58bbfd8c3c66f6c54ddee39f3f' => 
    array (
      0 => '/home/ubuntu/workspace/smarty/templates/header.tpl',
      1 => 1440109733,
      2 => 'file',
    ),
    '15792aba2aac6fcec5af959bbe2f7d1ca733c665' => 
    array (
      0 => '/home/ubuntu/workspace/smarty/templates/footer.tpl',
      1 => 1440109657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61078396055d8237c5ca801_41060444',
  'tpl_function' => 
  array (
  ),
  'version' => '3.1.28-dev/44',
  'unifunc' => 'content_55d8239a123ad7_15807948',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55d8239a123ad7_15807948')) {
function content_55d8239a123ad7_15807948 ($_smarty_tpl) {
?>
<html> 
<head> 
  <title>My Page Title</title> 
  <link rel="stylesheet" type="text/css" href="style.css">

</head> 
<body> 

        <div class="bodyContainer">
            <div class="formWrapper">
                <p>Product added successfully</p>
                <h1>Add Product</h1>
                <form method="post">
                                            <label class="formElement" for=name>Name</label>
                        <input class="formElement" type="text" name=name size="50"/>
                        <br/><br/>
                                            <label class="formElement" for=description>Description</label>
                        <input class="formElement" type="text" name=description size="50"/>
                        <br/><br/>
                                                                <label class="formElement" for=price>Price</label>
                        <br/>
                        <input class="formElement" type="number" step="0.01"  name=price size="50" />
                        <br/><br/>
                                        <input class="formElement" type="submit" value="Submit" />
                    <br/>
                    <a href="mainpage.php">Home</a> 
                </form>
            </div>
        </div>

</body> 
</html><?php }
}
?>
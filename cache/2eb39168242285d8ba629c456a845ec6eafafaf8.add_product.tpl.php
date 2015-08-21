<?php
/*%%SmartyHeaderCode:12817103555d7b4d9d892c5_81332720%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2eb39168242285d8ba629c456a845ec6eafafaf8' => 
    array (
      0 => '/home/ubuntu/workspace/smarty/add_product.tpl',
      1 => 1440199895,
      2 => 'file',
    ),
    '318d9bfadce76f36893d5729faab15bc350fa81b' => 
    array (
      0 => '/home/ubuntu/workspace/smarty/header.tpl',
      1 => 1440109733,
      2 => 'file',
    ),
    'ceca6480a74158770f63869eb09596e096c7d331' => 
    array (
      0 => '/home/ubuntu/workspace/smarty/footer.tpl',
      1 => 1440109657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12817103555d7b4d9d892c5_81332720',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'formTextItems' => 0,
    'v' => 0,
    'formNumberItems' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/44',
  'unifunc' => 'content_55d7b4d9dc5c44_00637729',
  'cache_lifetime' => 0,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55d7b4d9dc5c44_00637729')) {
function content_55d7b4d9dc5c44_00637729 ($_smarty_tpl) {
?>
<html> 
<head> 
  <title>My Page Title</title> 
  <link rel="stylesheet" type="text/css" href="style.css">

</head> 
<body> 

        <div class="bodyContainer">
            <div class="formWrapper">
                <p></p>
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
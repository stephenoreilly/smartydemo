<?php /* Smarty version 3.1.28-dev/44, created on 2015-08-22 07:23:24
         compiled from "/home/ubuntu/workspace/smarty/templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:58329416655d8236c4201a3_18062955%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a4efbb76ffe2f58bbfd8c3c66f6c54ddee39f3f' => 
    array (
      0 => '/home/ubuntu/workspace/smarty/templates/header.tpl',
      1 => 1440109733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58329416655d8236c4201a3_18062955',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/44',
  'unifunc' => 'content_55d8236c427359_29126262',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55d8236c427359_29126262')) {
function content_55d8236c427359_29126262 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '58329416655d8236c4201a3_18062955';
?>
<html> 
<head> 
  <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? "Default Page Title" : $tmp);?>
</title> 
  <link rel="stylesheet" type="text/css" href="style.css">

</head> 
<body><?php }
}
?>
<?php /* Smarty version 3.1.28-dev/44, created on 2015-08-20 22:28:55
         compiled from "/home/ubuntu/workspace/smarty/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19846112555d654a79889c6_01598892%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '318d9bfadce76f36893d5729faab15bc350fa81b' => 
    array (
      0 => '/home/ubuntu/workspace/smarty/header.tpl',
      1 => 1440109733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19846112555d654a79889c6_01598892',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/44',
  'unifunc' => 'content_55d654a79a2d73_71524296',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55d654a79a2d73_71524296')) {
function content_55d654a79a2d73_71524296 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19846112555d654a79889c6_01598892';
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
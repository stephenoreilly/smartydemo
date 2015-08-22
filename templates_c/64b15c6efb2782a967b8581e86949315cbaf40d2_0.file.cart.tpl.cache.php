<?php /* Smarty version 3.1.28-dev/44, created on 2015-08-22 08:04:05
         compiled from "/home/ubuntu/workspace/smarty/templates/cart.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:170541066455d82cf590e5d9_06262996%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64b15c6efb2782a967b8581e86949315cbaf40d2' => 
    array (
      0 => '/home/ubuntu/workspace/smarty/templates/cart.tpl',
      1 => 1440230618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170541066455d82cf590e5d9_06262996',
  'variables' => 
  array (
    'cart' => 0,
    'product' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/44',
  'unifunc' => 'content_55d82cf59250d0_11660600',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55d82cf59250d0_11660600')) {
function content_55d82cf59250d0_11660600 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '170541066455d82cf590e5d9_06262996';
?>
<div class="basket">
    <h2>Cart</h2>
    <?php
$_from = $_smarty_tpl->tpl_vars['cart']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_product_0_saved_item = isset($_smarty_tpl->tpl_vars['product']) ? $_smarty_tpl->tpl_vars['product'] : false;
$_smarty_tpl->tpl_vars['product'] = new Smarty_Variable();
$__foreach_product_0_total = $_smarty_tpl->_count($_from);
if ($__foreach_product_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$__foreach_product_0_saved_local_item = $_smarty_tpl->tpl_vars['product'];
?>
        <form action="update_cart.php" method="post">
            <?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
 - 
            <input class="remove" name="submit" type="submit" value="x" />
            Amount: <?php echo $_smarty_tpl->tpl_vars['product']->value['amount'];?>

            <input type="hidden" name="remove" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['item_id'];?>
">
        </form>
    <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_0_saved_local_item;
}
}
if ($__foreach_product_0_saved_item) {
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_0_saved_item;
}
?>
    <p>Total: $<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['total']->value);?>
</p>
</div><?php }
}
?>
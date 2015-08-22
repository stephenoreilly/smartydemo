<?php /* Smarty version 3.1.28-dev/44, created on 2015-08-22 08:25:16
         compiled from "/home/ubuntu/workspace/smarty/templates/mainpage.tpl" */ ?>
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
  ),
  'nocache_hash' => '177878168055d831ec508842_07596148',
  'variables' => 
  array (
    'title' => 0,
    'items' => 0,
    'product' => 0,
    'num' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/44',
  'unifunc' => 'content_55d831ec544cd7_26214119',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55d831ec544cd7_26214119')) {
function content_55d831ec544cd7_26214119 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '177878168055d831ec508842_07596148';
ob_start();
echo $_smarty_tpl->tpl_vars['title']->value;
$_tmp1=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>$_tmp1), 0);
?>

<form action="login.php" method="post">
    <input class="logout" name="submit" type="submit" value="Log Out"></input>
</form>
        <div class="bodyContainer">
            <?php echo $_smarty_tpl->getSubTemplate ("cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            <h1>Items in My Shop</h1>
            <?php
$_from = $_smarty_tpl->tpl_vars['items']->value;
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
                <div class="product">
                    <div class="name">Name: <?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</div>
                    <div class="price">Price: $<?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
</div>
                    <div class="description">Description: <?php echo $_smarty_tpl->tpl_vars['product']->value->description;?>
</div>
                    <form action="update_cart.php" method="post">
                            <label class="add" for="<?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
"></label>
                            <select name="amount" >
                              <option value="1" selected>1</option>
                                <?php $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['num']->step = 1;$_smarty_tpl->tpl_vars['num']->total = (int) ceil(($_smarty_tpl->tpl_vars['num']->step > 0 ? 20+1 - (2) : 2-(20)+1)/abs($_smarty_tpl->tpl_vars['num']->step));
if ($_smarty_tpl->tpl_vars['num']->total > 0) {
for ($_smarty_tpl->tpl_vars['num']->value = 2, $_smarty_tpl->tpl_vars['num']->iteration = 1;$_smarty_tpl->tpl_vars['num']->iteration <= $_smarty_tpl->tpl_vars['num']->total;$_smarty_tpl->tpl_vars['num']->value += $_smarty_tpl->tpl_vars['num']->step, $_smarty_tpl->tpl_vars['num']->iteration++) {
$_smarty_tpl->tpl_vars['num']->first = $_smarty_tpl->tpl_vars['num']->iteration == 1;$_smarty_tpl->tpl_vars['num']->last = $_smarty_tpl->tpl_vars['num']->iteration == $_smarty_tpl->tpl_vars['num']->total;?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</option>
                                <?php }} ?>
                            </select>
                            <input type="hidden" name="product" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">
                            <input class="add" name="submit" type="submit" value="Add to cart" />
                        <br/>
                    </form>
                </div>
            <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_0_saved_local_item;
}
}
if ($__foreach_product_0_saved_item) {
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_0_saved_item;
}
?>
            <a href="add_product.php">Add Product</a> 
        </div>
    
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
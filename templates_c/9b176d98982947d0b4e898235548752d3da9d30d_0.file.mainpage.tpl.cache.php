<?php /* Smarty version 3.1.28-dev/44, created on 2015-08-22 07:23:33
         compiled from "/home/ubuntu/workspace/smarty/templates/mainpage.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:116142609955d82375560758_00346524%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b176d98982947d0b4e898235548752d3da9d30d' => 
    array (
      0 => '/home/ubuntu/workspace/smarty/templates/mainpage.tpl',
      1 => 1440200229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116142609955d82375560758_00346524',
  'variables' => 
  array (
    'cart' => 0,
    'product' => 0,
    'total' => 0,
    'items' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/44',
  'unifunc' => 'content_55d823755c14e8_63096048',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55d823755c14e8_63096048')) {
function content_55d823755c14e8_63096048 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '116142609955d82375560758_00346524';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>"My Page Title"), 0);
?>
 
    <input class="logout" type="submit" value="Log Out"></input>
        <div class="bodyContainer">
            <div class="basket">
                <h2>Basket</h2>
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
            </div>
            <h1>Items in My Shop</h1>
            <?php
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_product_1_saved_item = isset($_smarty_tpl->tpl_vars['product']) ? $_smarty_tpl->tpl_vars['product'] : false;
$_smarty_tpl->tpl_vars['product'] = new Smarty_Variable();
$__foreach_product_1_total = $_smarty_tpl->_count($_from);
if ($__foreach_product_1_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$__foreach_product_1_saved_local_item = $_smarty_tpl->tpl_vars['product'];
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
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                            <input type="hidden" name="product" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">
                            <input class="add" name="submit" type="submit" value="Add to cart" />
                        <br/>
                    </form>
                </div>
            <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_1_saved_local_item;
}
}
if ($__foreach_product_1_saved_item) {
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_1_saved_item;
}
?>
            <a href="add_product.php">Add Product</a> 
        </div>
     
 <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/
jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(".logout").click(function(){
            window.location="index.php?logout=1";
        })
<?php echo '</script'; ?>
>  
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
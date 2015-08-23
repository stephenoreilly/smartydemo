<?php /* Smarty version 3.1.28-dev/44, created on 2015-08-23 19:25:20
         compiled from "/home/ubuntu/workspace/smarty/templates/add_product.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:115377730155da1e20981359_37636743%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec3d3f792dc8cf093b8492fbb334b49fa3f40a3f' => 
    array (
      0 => '/home/ubuntu/workspace/smarty/templates/add_product.tpl',
      1 => 1440351247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115377730155da1e20981359_37636743',
  'variables' => 
  array (
    'title' => 0,
    'errors' => 0,
    'formTextItems' => 0,
    'v' => 0,
    'formNumberItems' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/44',
  'unifunc' => 'content_55da1e20ab0478_70724577',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55da1e20ab0478_70724577')) {
function content_55da1e20ab0478_70724577 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/ubuntu/workspace/smarty/libs/plugins/modifier.capitalize.php';

$_smarty_tpl->properties['nocache_hash'] = '115377730155da1e20981359_37636743';
ob_start();
echo $_smarty_tpl->tpl_vars['title']->value;
$_tmp1=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>$_tmp1), 0);
?>


        <div class="bodyContainer">
            <div class="formWrapper">
                <p><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
</p>
                <form method="post">
                    <h1>Add Product</h1>
                    <?php
$_from = $_smarty_tpl->tpl_vars['formTextItems']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_0_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_0_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$__foreach_v_0_total = $_smarty_tpl->_count($_from);
if ($__foreach_v_0_total) {
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$__foreach_v_0_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
                        <label class="formElement" for=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['v']->value);?>
</label>
                        <input class="formElement addProd" type="text" name=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
 size="50"/>
                        <br/><br/>
                    <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
if ($__foreach_v_0_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_0_saved_key;
}
?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['formNumberItems']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_1_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_1_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$__foreach_v_1_total = $_smarty_tpl->_count($_from);
if ($__foreach_v_1_total) {
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$__foreach_v_1_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
                        <label class="formElement" for=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['v']->value);?>
</label>
                        <br/>
                        <input class="formElement addProd" type="number" step="0.01"  name=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
 size="50" />
                        <br/><br/>
                    <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved_local_item;
}
}
if ($__foreach_v_1_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved_item;
}
if ($__foreach_v_1_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_1_saved_key;
}
?>
                    <input class="formElement" type="submit" value="Submit" />
                    <br/>
                    <br/>
                    <a href="mainpage.php">My Shop</a> 
                </form>
            </div>
        </div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
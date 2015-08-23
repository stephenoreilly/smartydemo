<?php /* Smarty version 3.1.28-dev/44, created on 2015-08-23 17:28:17
         compiled from "/home/ubuntu/workspace/smarty/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:126835873455da02b1507467_27924361%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc4e55df2392fda8231058bbb0c0f34f4f7420a1' => 
    array (
      0 => '/home/ubuntu/workspace/smarty/templates/index.tpl',
      1 => 1440243508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126835873455da02b1507467_27924361',
  'variables' => 
  array (
    'title' => 0,
    'errors' => 0,
    'loginemail' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/44',
  'unifunc' => 'content_55da02b165c434_66855951',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55da02b165c434_66855951')) {
function content_55da02b165c434_66855951 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '126835873455da02b1507467_27924361';
ob_start();
echo $_smarty_tpl->tpl_vars['title']->value;
$_tmp1=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>$_tmp1), 0);
?>

        <div class="bodyContainer">
            <div class="formWrapper"> 
                <h1>My Shop</h1>
                <p>Please Log In or <br/>Register to check out My Shop</p>
                <p><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
</p>
                 <form action="login.php" method="post">
                     <h2>Login</h2>
                     <input type="email" name="loginemail" placeholder="Email" value="<?php echo $_smarty_tpl->tpl_vars['loginemail']->value;?>
"/>
                     <br/><br/>
                     <input type="password" name="loginpassword" placeholder="Password"/>
                     <br/><br/>
                     <input name="submit" type="submit" value="Log In"></input>
                 </form>
                <form action="login.php" method="post">
                    <h2>Register</h2>
                    <input type="email" name="email" placeholder="Enter email address" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"/>
                    <br/><br/>
                    <input type="password" name="password"  placeholder="Enter password"/>
                    <br/>
                    <br/>
                    <input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lg marginTop" />
                </form>
            </div>
        </div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
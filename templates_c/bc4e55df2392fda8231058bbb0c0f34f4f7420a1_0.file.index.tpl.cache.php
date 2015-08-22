<?php /* Smarty version 3.1.28-dev/44, created on 2015-08-22 07:23:24
         compiled from "/home/ubuntu/workspace/smarty/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:26806468455d8236c403e52_95696249%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc4e55df2392fda8231058bbb0c0f34f4f7420a1' => 
    array (
      0 => '/home/ubuntu/workspace/smarty/templates/index.tpl',
      1 => 1440199603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26806468455d8236c403e52_95696249',
  'variables' => 
  array (
    'title' => 0,
    'errors' => 0,
    'loginemail' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/44',
  'unifunc' => 'content_55d8236c41bf69_90929055',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55d8236c41bf69_90929055')) {
function content_55d8236c41bf69_90929055 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '26806468455d8236c403e52_95696249';
ob_start();
echo $_smarty_tpl->tpl_vars['title']->value;
$_tmp1=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>$_tmp1), 0);
?>

        <div class="bodyContainer">
            <div class="formWrapper"> 
                <p><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
</p>
                 <h1>Login</h1>
                 <form action="login.php" method="post">
                     <input type="email" name="loginemail" placeholder="Email" value="<?php echo $_smarty_tpl->tpl_vars['loginemail']->value;?>
"/>
                     <br/><br/>
                     <input type="password" name="loginpassword" placeholder="Password"/>
                     <br/><br/>
                     <input name="submit" type="submit" value="Log In"></input>
                 </form>
                 <h1>Register</h1>
                <form action="login.php" method="post">
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
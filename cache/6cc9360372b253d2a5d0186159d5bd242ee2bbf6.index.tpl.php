<?php
/*%%SmartyHeaderCode:26708267455d7b3b5b4ef41_01209836%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cc9360372b253d2a5d0186159d5bd242ee2bbf6' => 
    array (
      0 => '/home/ubuntu/workspace/smarty/index.tpl',
      1 => 1440199603,
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
  'nocache_hash' => '26708267455d7b3b5b4ef41_01209836',
  'tpl_function' => 
  array (
  ),
  'version' => '3.1.28-dev/44',
  'unifunc' => 'content_55d7b6f15d5562_29922295',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55d7b6f15d5562_29922295')) {
function content_55d7b6f15d5562_29922295 ($_smarty_tpl) {
?>
<html> 
<head> 
  <title>Login</title> 
  <link rel="stylesheet" type="text/css" href="style.css">

</head> 
<body>
        <div class="bodyContainer">
            <div class="formWrapper"> 
                <p></p>
                 <h1>Login</h1>
                 <form action="login.php" method="post">
                     <input type="email" name="loginemail" placeholder="Email" value="test3@test.com"/>
                     <br/><br/>
                     <input type="password" name="loginpassword" placeholder="Password"/>
                     <br/><br/>
                     <input name="submit" type="submit" value="Log In"></input>
                 </form>
                 <h1>Register</h1>
                <form action="login.php" method="post">
                    <input type="email" name="email" placeholder="Enter email address" value=""/>
                    <br/><br/>
                    <input type="password" name="password"  placeholder="Enter password"/>
                    <br/>
                    <br/>
                    <input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lg marginTop" />
                </form>
            </div>
        </div>
</body> 
</html><?php }
}
?>
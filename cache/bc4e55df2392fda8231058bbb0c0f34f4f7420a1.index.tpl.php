<?php
/*%%SmartyHeaderCode:165097067155da1e96854630_53968214%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc4e55df2392fda8231058bbb0c0f34f4f7420a1' => 
    array (
      0 => '/home/ubuntu/workspace/smarty/templates/index.tpl',
      1 => 1440358036,
      2 => 'file',
    ),
    '4a4efbb76ffe2f58bbfd8c3c66f6c54ddee39f3f' => 
    array (
      0 => '/home/ubuntu/workspace/smarty/templates/header.tpl',
      1 => 1440109733,
      2 => 'file',
    ),
    '15792aba2aac6fcec5af959bbe2f7d1ca733c665' => 
    array (
      0 => '/home/ubuntu/workspace/smarty/templates/footer.tpl',
      1 => 1440109657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165097067155da1e96854630_53968214',
  'tpl_function' => 
  array (
  ),
  'version' => '3.1.28-dev/44',
  'unifunc' => 'content_55da1ec4044174_48616475',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55da1ec4044174_48616475')) {
function content_55da1ec4044174_48616475 ($_smarty_tpl) {
?>
<html> 
<head> 
  <title>Login Page</title> 
  <link rel="stylesheet" type="text/css" href="style.css">

</head> 
<body>
    <a class="logo" href="https://stephen-oreilly.herokuapp.com/">Stephen O'Reilly</a>
        <div class="bodyContainer">
            <div class="formWrapper"> 
                <h1>My Shop</h1>
                <p>Please Log In or <br/>Register to check out My Shop</p>
                <p></p>
                 <form action="login.php" method="post">
                     <h2>Login</h2>
                     <input type="email" name="loginemail" placeholder="Email" value=""/>
                     <br/><br/>
                     <input type="password" name="loginpassword" placeholder="Password"/>
                     <br/><br/>
                     <input name="submit" type="submit" value="Log In"></input>
                 </form>
                <form action="login.php" method="post">
                    <h2>Register</h2>
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
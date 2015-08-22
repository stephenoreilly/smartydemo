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
    '4a4efbb76ffe2f58bbfd8c3c66f6c54ddee39f3f' => 
    array (
      0 => '/home/ubuntu/workspace/smarty/templates/header.tpl',
      1 => 1440109733,
      2 => 'file',
    ),
    '64b15c6efb2782a967b8581e86949315cbaf40d2' => 
    array (
      0 => '/home/ubuntu/workspace/smarty/templates/cart.tpl',
      1 => 1440230618,
      2 => 'file',
    ),
    '15792aba2aac6fcec5af959bbe2f7d1ca733c665' => 
    array (
      0 => '/home/ubuntu/workspace/smarty/templates/footer.tpl',
      1 => 1440109657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177878168055d831ec508842_07596148',
  'tpl_function' => 
  array (
  ),
  'version' => '3.1.28-dev/44',
  'unifunc' => 'content_55d83261a3a973_56852136',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55d83261a3a973_56852136')) {
function content_55d83261a3a973_56852136 ($_smarty_tpl) {
?>
<html> 
<head> 
  <title>My Shop</title> 
  <link rel="stylesheet" type="text/css" href="style.css">

</head> 
<body>
<form action="login.php" method="post">
    <input class="logout" name="submit" type="submit" value="Log Out"></input>
</form>
        <div class="bodyContainer">
            <div class="basket">
    <h2>Cart</h2>
            <form action="update_cart.php" method="post">
            Eggs - 
            <input class="remove" name="submit" type="submit" value="x" />
            Amount: 1
            <input type="hidden" name="remove" value="1">
        </form>
            <form action="update_cart.php" method="post">
            Bread - 
            <input class="remove" name="submit" type="submit" value="x" />
            Amount: 5
            <input type="hidden" name="remove" value="2">
        </form>
            <form action="update_cart.php" method="post">
            Bananas - 
            <input class="remove" name="submit" type="submit" value="x" />
            Amount: 8
            <input type="hidden" name="remove" value="7">
        </form>
            <form action="update_cart.php" method="post">
            Rice - 
            <input class="remove" name="submit" type="submit" value="x" />
            Amount: 10
            <input type="hidden" name="remove" value="8">
        </form>
        <p>Total: $45.60</p>
</div>
            <h1>Items in My Shop</h1>
                            <div class="product">
                    <div class="name">Name: Eggs</div>
                    <div class="price">Price: $2.15</div>
                    <div class="description">Description: Free Range Eggs</div>
                    <form action="update_cart.php" method="post">
                            <label class="add" for="Eggs"></label>
                            <select name="amount" >
                              <option value="1" selected>1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                            </select>
                            <input type="hidden" name="product" value="1">
                            <input class="add" name="submit" type="submit" value="Add to cart" />
                        <br/>
                    </form>
                </div>
                            <div class="product">
                    <div class="name">Name: Bread</div>
                    <div class="price">Price: $1.15</div>
                    <div class="description">Description: Fresh from the oven</div>
                    <form action="update_cart.php" method="post">
                            <label class="add" for="Bread"></label>
                            <select name="amount" >
                              <option value="1" selected>1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                            </select>
                            <input type="hidden" name="product" value="2">
                            <input class="add" name="submit" type="submit" value="Add to cart" />
                        <br/>
                    </form>
                </div>
                            <div class="product">
                    <div class="name">Name: Cake</div>
                    <div class="price">Price: $4.15</div>
                    <div class="description">Description: Very very tastey</div>
                    <form action="update_cart.php" method="post">
                            <label class="add" for="Cake"></label>
                            <select name="amount" >
                              <option value="1" selected>1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                            </select>
                            <input type="hidden" name="product" value="3">
                            <input class="add" name="submit" type="submit" value="Add to cart" />
                        <br/>
                    </form>
                </div>
                            <div class="product">
                    <div class="name">Name: Peanuts</div>
                    <div class="price">Price: $3.50</div>
                    <div class="description">Description: Really awesome</div>
                    <form action="update_cart.php" method="post">
                            <label class="add" for="Peanuts"></label>
                            <select name="amount" >
                              <option value="1" selected>1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                            </select>
                            <input type="hidden" name="product" value="4">
                            <input class="add" name="submit" type="submit" value="Add to cart" />
                        <br/>
                    </form>
                </div>
                            <div class="product">
                    <div class="name">Name: Oranges</div>
                    <div class="price">Price: $1.20</div>
                    <div class="description">Description: Nice and Juicy</div>
                    <form action="update_cart.php" method="post">
                            <label class="add" for="Oranges"></label>
                            <select name="amount" >
                              <option value="1" selected>1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                            </select>
                            <input type="hidden" name="product" value="5">
                            <input class="add" name="submit" type="submit" value="Add to cart" />
                        <br/>
                    </form>
                </div>
                            <div class="product">
                    <div class="name">Name: Apples</div>
                    <div class="price">Price: $1.10</div>
                    <div class="description">Description: Lovely and green</div>
                    <form action="update_cart.php" method="post">
                            <label class="add" for="Apples"></label>
                            <select name="amount" >
                              <option value="1" selected>1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                            </select>
                            <input type="hidden" name="product" value="6">
                            <input class="add" name="submit" type="submit" value="Add to cart" />
                        <br/>
                    </form>
                </div>
                            <div class="product">
                    <div class="name">Name: Bananas</div>
                    <div class="price">Price: $0.90</div>
                    <div class="description">Description: Nice and ripe</div>
                    <form action="update_cart.php" method="post">
                            <label class="add" for="Bananas"></label>
                            <select name="amount" >
                              <option value="1" selected>1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                            </select>
                            <input type="hidden" name="product" value="7">
                            <input class="add" name="submit" type="submit" value="Add to cart" />
                        <br/>
                    </form>
                </div>
                            <div class="product">
                    <div class="name">Name: Rice</div>
                    <div class="price">Price: $3.05</div>
                    <div class="description">Description: It's not too bad</div>
                    <form action="update_cart.php" method="post">
                            <label class="add" for="Rice"></label>
                            <select name="amount" >
                              <option value="1" selected>1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                            </select>
                            <input type="hidden" name="product" value="8">
                            <input class="add" name="submit" type="submit" value="Add to cart" />
                        <br/>
                    </form>
                </div>
                        <a href="add_product.php">Add Product</a> 
        </div>
    
</body> 
</html><?php }
}
?>
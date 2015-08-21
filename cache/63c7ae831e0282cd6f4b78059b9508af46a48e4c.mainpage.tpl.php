<?php
/*%%SmartyHeaderCode:19565162155d7b629d87e19_50897259%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63c7ae831e0282cd6f4b78059b9508af46a48e4c' => 
    array (
      0 => '/home/ubuntu/workspace/smarty/mainpage.tpl',
      1 => 1440200229,
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
  'nocache_hash' => '19565162155d7b629d87e19_50897259',
  'tpl_function' => 
  array (
  ),
  'version' => '3.1.28-dev/44',
  'unifunc' => 'content_55d7b6eae78985_04606288',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55d7b6eae78985_04606288')) {
function content_55d7b6eae78985_04606288 ($_smarty_tpl) {
?>
<html> 
<head> 
  <title>My Page Title</title> 
  <link rel="stylesheet" type="text/css" href="style.css">

</head> 
<body> 
    <input class="logout" type="submit" value="Log Out"></input>
        <div class="bodyContainer">
            <div class="basket">
                <h2>Basket</h2>
                                    <form action="update_cart.php" method="post">
                        Eggs - 
                        <input class="remove" name="submit" type="submit" value="x" />
                        Amount: 3
                        <input type="hidden" name="remove" value="1">
                    </form>
                                    <form action="update_cart.php" method="post">
                        Bread - 
                        <input class="remove" name="submit" type="submit" value="x" />
                        Amount: 4
                        <input type="hidden" name="remove" value="2">
                    </form>
                                    <form action="update_cart.php" method="post">
                        Bananas - 
                        <input class="remove" name="submit" type="submit" value="x" />
                        Amount: 4
                        <input type="hidden" name="remove" value="7">
                    </form>
                                <p>Total: $14.65</p>
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
                            </select>
                            <input type="hidden" name="product" value="7">
                            <input class="add" name="submit" type="submit" value="Add to cart" />
                        <br/>
                    </form>
                </div>
                        <a href="add_product.php">Add Product</a> 
        </div>
     
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/
jquery.min.js"></script>
<script>
    $(".logout").click(function(){
            window.location="index.php?logout=1";
        })
</script>  
</body> 
</html><?php }
}
?>
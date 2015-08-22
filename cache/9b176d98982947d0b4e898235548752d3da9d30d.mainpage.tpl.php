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
  'nocache_hash' => '116142609955d82375560758_00346524',
  'tpl_function' => 
  array (
  ),
  'version' => '3.1.28-dev/44',
  'unifunc' => 'content_55d823cb1dcba1_72699278',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55d823cb1dcba1_72699278')) {
function content_55d823cb1dcba1_72699278 ($_smarty_tpl) {
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
                                <p>Total: $0.00</p>
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
                            </select>
                            <input type="hidden" name="product" value="8">
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
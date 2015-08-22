{include file="header.tpl" title={$title} }
<form action="login.php" method="post">
    <input class="logout" name="submit" type="submit" value="Log Out"></input>
</form>
        <div class="bodyContainer">
            {include file="cart.tpl" }
            <h1>Items in My Shop</h1>
            {foreach from=$items item=product}
                <div class="product">
                    <div class="name">Name: {$product->name}</div>
                    <div class="price">Price: ${$product->price}</div>
                    <div class="description">Description: {$product->description}</div>
                    <form action="update_cart.php" method="post">
                            <label class="add" for="{$product->name}"></label>
                            <select name="amount" >
                              <option value="1" selected>1</option>
                                {for $num=2 to 20}
                                    <option value="{$num}">{$num}</option>
                                {/for}
                            </select>
                            <input type="hidden" name="product" value="{$product->id}">
                            <input class="add" name="submit" type="submit" value="Add to cart" />
                        <br/>
                    </form>
                </div>
            {/foreach}
            <a href="add_product.php">Add Product</a> 
        </div>
    
{include file="footer.tpl"}
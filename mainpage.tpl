{include file="header.tpl" title="My Page Title"} 
    <input class="logout" type="submit" value="Log Out"></input>
        <div class="bodyContainer">
            <div class="basket">
                <h2>Basket</h2>
                {foreach from=$cart item=product}
                    <form action="update_cart.php" method="post">
                        {$product['name']} - 
                        <input class="remove" name="submit" type="submit" value="x" />
                        Amount: {$product['amount']}
                        <input type="hidden" name="remove" value="{$product['item_id']}">
                    </form>
                {/foreach}
                <p>Total: ${$total|string_format:"%.2f"}</p>
            </div>
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
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                            <input type="hidden" name="product" value="{$product->id}">
                            <input class="add" name="submit" type="submit" value="Add to cart" />
                        <br/>
                    </form>
                </div>
            {/foreach}
            <a href="add_product.php">Add Product</a> 
        </div>
     
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/
jquery.min.js"></script>
<script>
    $(".logout").click(function(){
            window.location="index.php?logout=1";
        })
</script>  
{include file="footer.tpl"}
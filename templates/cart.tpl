<div class="basket">
    <h2>Cart</h2>
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
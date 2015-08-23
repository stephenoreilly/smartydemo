{include file="header.tpl" title={$title} }

        <div class="bodyContainer">
            <div class="formWrapper">
                <p>{$errors}</p>
                <form method="post">
                    <h1>Add Product</h1>
                    {foreach from=$formTextItems key=k item=v}
                        <label class="formElement" for={$v}>{$v|capitalize}</label>
                        <input class="formElement addProd" type="text" name={$v} size="50"/>
                        <br/><br/>
                    {/foreach}
                    {foreach from=$formNumberItems key=k item=v}
                        <label class="formElement" for={$v}>{$v|capitalize}</label>
                        <br/>
                        <input class="formElement addProd" type="number" step="0.01"  name={$v} size="50" />
                        <br/><br/>
                    {/foreach}
                    <input class="formElement" type="submit" value="Submit" />
                    <br/>
                    <br/>
                    <a href="mainpage.php">Home</a> 
                </form>
            </div>
        </div>

{include file="footer.tpl"}
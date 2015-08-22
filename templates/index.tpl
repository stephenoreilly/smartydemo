{include file="header.tpl" title={$title} }
        <div class="bodyContainer">
            <div class="formWrapper"> 
                <h1>My Shop</h1>
                <p>Please Log In or <br/>Register to check out My Shop</p>
                <p>{$errors}</p>
                 <form action="login.php" method="post">
                     <h2>Login</h2>
                     <input type="email" name="loginemail" placeholder="Email" value="{$loginemail}"/>
                     <br/><br/>
                     <input type="password" name="loginpassword" placeholder="Password"/>
                     <br/><br/>
                     <input name="submit" type="submit" value="Log In"></input>
                 </form>
                 <h2>Register</h2>
                <form action="login.php" method="post">
                    <h2>Register</h2>
                    <input type="email" name="email" placeholder="Enter email address" value="{$email}"/>
                    <br/><br/>
                    <input type="password" name="password"  placeholder="Enter password"/>
                    <br/>
                    <br/>
                    <input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lg marginTop" />
                </form>
            </div>
        </div>
{include file="footer.tpl"}
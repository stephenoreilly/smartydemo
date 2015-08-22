{include file="header.tpl" title={$title} }
        <div class="bodyContainer">
            <div class="formWrapper"> 
                <p>{$errors}</p>
                 <h1>Login</h1>
                 <form action="login.php" method="post">
                     <input type="email" name="loginemail" placeholder="Email" value="{$loginemail}"/>
                     <br/><br/>
                     <input type="password" name="loginpassword" placeholder="Password"/>
                     <br/><br/>
                     <input name="submit" type="submit" value="Log In"></input>
                 </form>
                 <h1>Register</h1>
                <form action="login.php" method="post">
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
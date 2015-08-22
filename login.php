<?php
    include("connection.php");
    if($_GET['logout']==1 && $_SESSION['id']) {
        $message="You have been logged out";
        session_destroy();
    }
    if($_POST['submit']=="Sign Up"){
        $_SESSION['error']='';
        $_SESSION['email']=$_POST['email'];
        if(!$_POST['email']) $error.="<br/>Please enter your email";
        else if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) $error.="<br/>Please enter a vaild email";
        if(!$_POST['password']) $error.="<br/>Please enter your password";
        else{
            if(strlen($_POST['password'])<8)$error.="<br/>Password length too short";
            if(!preg_match("'[A-Z]'",$_POST['password']))$error.="<br/>Please include at least one capital letter in your password";
        }
        if($error){
            $error= "There were errors in your sign up details".$error;
            $_SESSION['error']  = $error;
            header("Location:index.php");
        }
        else{
            $email=mysqli_real_escape_string($link,$_POST['email']);
            $password=$_POST['password'];
            $securePass=md5(md5($email).$password);
            $query="SELECT * FROM users3 WHERE email='$email'";        
            $result = mysqli_query($link,$query);
            $row=mysqli_fetch_array($result);
            $results= sizeof($row);
            if($results) {
                $error= "That email address is already registered. Do you want to register instead?";
                $_SESSION['error']  = $error;
                header("Location:index.php");
            }
            else{
                $query="INSERT INTO users3 (name, email, password)
                            VALUES ('Beth','$email','$securePass');";
                mysqli_query($link,$query);
                echo "You've been signed up";
                $_SESSION['id']=mysqli_insert_id($link);
                $_SESSION['error']  = '';
                header("Location:mainpage.php");
            }
            $securePass='';
        }
        
    }
    if($_POST['submit']=="Log In"){
        $email=mysqli_real_escape_string($link,$_POST['loginemail']);
        $_SESSION['loginemail']=$_POST['loginemail'];
        $password=$_POST['loginpassword'];
        $securePass=md5(md5($email).$password);
        $email=mysqli_real_escape_string($link,$_POST['loginemail']);
        $query="SELECT * FROM users3 WHERE email='$email' AND password='$securePass'";
        $securePass='';
        $result=mysqli_query($link,$query);
        $row=mysqli_fetch_array($result);
        if($row){
          $_SESSION['id']=$row['id']; 
          $_SESSION['error']  = $error;
          header("Location:mainpage.php");
        }
        else{
            $error= "We could not find the user in the database. Please try again";
            $_SESSION['error']  = '';
            header("Location:index.php");
        }
        
    }
    
?>
<?php

require_once 'core/init.php';
if(Input::exists()){
    echo  Input::get('username'), Input::get('password');
   
}else{
    echo 'not submitted';
}
?>
<html>
<head>
    <title> Transparent Login Form Design </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">   
</head>
    <body>
    <div class="login-box">
    <img src="img/avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form action="" method="post">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="#">Forget Password</a>    
            </form>
        
        
        </div>
    
    </body>
</html>


<?php
require_once 'core/init.php';
if(!Session::exists('user')){
    Redirect::to('login.php');
}




$msg = null;
if(Input::exists('post')){
    
    
    try {
  
   
    $username = Input::get('username');
    $password = Input::get('password');
    

    $db = DB::getInstance()->insert('login', array(
        'username' => $username,
        'password' => $password,
        
));
$msg = "successfully added";
    echo $msg;
    } catch (Exception $ex) {
        echo $ex;

    }
        
   
        
    }


?>
<!DOCTYPE html >
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="Viewport" content="width=device-width">
        
        <title>BOOKSHOP MANAGEMENT SYSTEM</title>
        <link href="css/public.css" media="all" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="header">
            <hi>MANAGE BOOKS</hi>
        </div>
        <div id="main">
            <div id="navigation">
              
                <ul>
                    
                    
                   
                </ul>
                &nbsp;
            </div>
            <div id="page">
              <form action="" method="post">
                        <p>username</p>
                        <input type="text" name="username" placeholder="Enter Username" maxlength="30" required="required">
                        <p>password</p>
                        <input type="password" name="password" placeholder="Enter password" maxlength="30" required="required" >
                       
                       
                     
                        <input type="submit" name="submit" value="ADD">

            </form>
             
            </div>
        </div>
        <div id="footer">Copyright 2018, BMS</div>
    </body>
    
</html>





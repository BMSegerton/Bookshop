<?php
require_once 'core/init.php';
if(!Session::exists('user')){
    Redirect::to('login.php');
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
            <hi>BOOKSHOP MANAGEMENT SYSTEM</hi>
        </div>
        <div id="main">
            <div id="navigation">
                <ul>
                   
                  
                   
                </ul>
                &nbsp;
            </div>
            <div id="page">
                <h2>Admin Menu</h2>
                <p>Welcome to Admin area</p>
                <ul>
                    <li><a href="add_books.php">Add Books</a></li>
                    <li><a href="delete_books.php">Delete Books</a></li>
                    <li><a href="view_books.php">View Books</a></li>
                    <li><a href="login.php">log Out</a></li>
                    <li><a href="addUsers">Add users</a></li>
                </ul>
            </div>
        </div>
        <div id="footer">Copyright 2018, BMS</div>
    </body>
    
</html>


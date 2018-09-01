<?php
require_once 'core/init.php';
?>

<!DOCTYPE html >
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="Viewport" content="width=device-width">
        
        <title>BOOKSHOP MANAGEMENT SYSTEM</title>
        <link href="css/public.css" media="all" rel="stylesheet" type="text/css">
        <link href="css/style.css" media="all" rel="stylesheet" type="text/css">
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
                 <div id="myOverlay" class="overlay">
            <span class="closebtn" onclick="closeSearch()" title="Close Overlay">x</span>
            <div class="overlay-content">
              <form action="action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>
            </div> 
                
               
                
               
                </ul>
            </div>
        </div>
        <div id="footer">Copyright 2018, BMS</div>
    </body>
    
</html>


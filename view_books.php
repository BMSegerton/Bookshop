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
            <hi>MANAGE BOOKS</hi>
        </div>
        <div id="main">
            <div id="navigation">
              
                <ul>
                    
                    
                   
                </ul>
                &nbsp;
            </div>
            <div id="page">
              <table >
                    <tr>
                        <th width="170">Isbn</th>
                        <th width="200">Author</th>
                        <th width="250">Title</th>
                        <th width="350">Description</th>
                        <th width="60">price</th>
                    </tr>
                </table>
               
                <?php 
                $books = DB::getInstance()->query("SELECT * FROM books");
                echo '<table border="4" bgcolor="#efefef">';
                
                if($books->count()){
                    foreach ($books->results() as $books){
                    echo "<tr><td>\n" .$books->isbn ."</td><td>\n" .$books->author ."</td><td>\n" .$books->title . "</td><td>\n" .$books->description ."</td><td>\n" .$books->price ." \n</td></tr>" ;
                }
                }
                echo '</table>';
                ?>   
             
            </div>
        </div>
        <div id="footer">Copyright 2018, BMS</div>
    </body>
    
</html>
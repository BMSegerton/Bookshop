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
              <table>
                    <tr>
                        <th>isbn</th>
                        <th>author</th>
                        
                    </tr>
                </table>
               
                <?php 
                $books = DB::getInstance()->query("SELECT * FROM books");
                echo '<table>';
                
                if($books->count()){
                    foreach ($books->results() as $books){
                    echo "<tr><td>\n" .$books->isbn ."</td><td>\n" .$books->author . " \n</td></tr>" ;
                }
                }
                echo '</table>';
                ?>   
             
            </div>
        </div>
        <div id="footer">Copyright 2018, BMS</div>
    </body>
    
</html>
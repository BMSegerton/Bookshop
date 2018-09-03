<?php
require_once 'core/init.php';
if(!Session::exists('user')){
    Redirect::to('login.php');
}




$msg = null;
if(Input::exists('post')){
    
    
    try {
  
   
    $isbn = Input::get('isbn');
    $author = Input::get('author');
    $title = Input::get('title');
    $category = Input::get('category');
    $price = Input::get('price');
   
    $db = DB::getInstance()->delete('books', array(
        'isbn', '=', $isbn
       
));
$msg = "successfully deleted";
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
                        <p>isbn</p>
                        <input type="text" name="isbn" placeholder="Enter isbn" maxlength="13" required="required">
                        <p>author</p>
                        <input type="text" name="author" placeholder="Enter author" maxlength="30"  >
                        <p>title</p>
                        <input type="text" name="title" placeholder="Enter title" maxlength="60" >
                        <p>Category</p>
                        <input type="text" name="category" placeholder="Enter category"  >
                       
                        <p>price</p>
                        <input type="text" name="price" placeholder="Enter price" >
                        <p>description</p>
                        <textarea name="description" cols="20" rows="4" required="required"> </textarea>
                        <input type="submit" name="submit" value="DELETE">

            </form>
             
            </div>
        </div>
        <div id="footer">Copyright 2018, BMS</div>
    </body>
    
</html>





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
    $category= Input::get('categories');
    $price = Input::get('price');
     $year_published = Input::get('year_published');
    $description = Input::get('description');
   
   

    $db = DB::getInstance()->insert('books', array(
        'isbn' => $isbn,
        'author' => $author,
        'title' => $title,
        'catid' => $category,
        'price' => $price,
        'description' => $description,
        'year_published' => $year_published
));

   
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
                        <input type="text" name="author" placeholder="Enter author" maxlength="30" required="required" >
                        <p>title</p>
                        <input type="text" name="title" placeholder="Enter title" maxlength="60" required="required">
                        <p>Category</p>
                        <select name="categories">
                            <?php  $db = DB::getInstance()->query(' SELECT * FROM categories');        
                             if($db->count() == 0){
                                 echo "no categories";
                             }  else {
                                 foreach ($db->results() as $result){
                                     echo "<option value = '$result->catid'>";
                                     echo"$result->catname";
                                      echo "</option>";
                                 }
                                
                             }
                             echo"</select>";
                            ?>
                       
                       
                        <p>price</p>
                        <input type="text" name="price" placeholder="Enter price"  required="required">
                         <p>Year Published</p>
                        <input type="text" name="year_published" placeholder="Enter Year of Publication" maxlength="4" required="required">
                        <p>description</p>
                        <textarea name="description" cols="20" rows="4" required="required"> </textarea>
                       
                        <input type="submit" name="submit" value="ADD">

            </form>
             <?php echo $msg;
            
             ?>
                
            </div>
        </div>
        <div id="footer">Copyright 2018, BMS</div>
    </body>
    
</html>





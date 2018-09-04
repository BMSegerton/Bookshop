<?php
require_once 'core/init.php';


if(!Session::exists('user')){
    Redirect::to('login.php');
}









?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>EGERTON BOOKSHOP MANAGEMENT SYSTEM</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/bootstrap/css/theme.css" rel="stylesheet">
    <link rel='stylesheet' href="css/bootstrap/css/main.css"/>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	<!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top justify-content-between" >
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"  aria-controls="navbar">
             
              <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">EGERTON BOOKSHOP MANAGEMENT SYSTEM</a>
          
          
        </div>
        <div id="navbar" class="navbar-collapse collapse">
           
          <ul class="nav navbar-nav">
              
          
            <li ><a href="index.php">Home</a></li>
            <li ><a href="about.html">About</a></li>
            <li ><a href="">Contact</a></li>
            
            
          </ul>
            
            
                 
            
           
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    

    <div class="container theme-showcase" role="main">
        
        
<style>
   .jumbotron{
    text-align: center;
    }
    .form-inline{
        float: right;
        justify-content: center;
        padding-top: 8px;
    }
    .navbar-inverse{
        background-color: #20630F
    }
</style>


 <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h3></h3>
        <p>
            <table  class="table table-bordered" >
            <thead class="thead-dark">
                    <tr>
                        <th width="250">Isbn</th>
                        <th width="150">Author</th>
                        <th width="150">Title</th>
                        <th width="280">Description</th>
                        <th width="100">price</th>
                    </tr>
                    </thead>
                </table>
         <?php 
         if(Input::exists('post')){
    
    
                try {


                $search = Input::get('Search');

                
                $db = DB::getInstance()->get('books', array(

                   'title', '=', $search

            ));
                 echo '<table class="table" >';
                 if($db->count() == 0){
                     echo" <p> SORRY THAT TITLE IS NOT AVAILBLE </p>";
                 }  else {
                     
                 
                     
                     
                    foreach ($db->results() as $results){
                    echo "<tr><td>\n" .$results->isbn ."</td><td>\n" .$results->author ."</td><td>\n" .$results->title . "</td><td>\n" .$results->description ."</td><td>\n" .$results->price ." \n</td></tr>" ;
                 }}
                 
                } catch (Exception $ex) {
                    echo $ex;
                    

                }



                }
                  echo '</table>';

                     ?>
        </p>
        
      </div>









    
    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="css/bootstrap/javascript/Javascript/bootstrap.min.js"></script>
    <script src="css/bootstrap/javascript/Javascript/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>


  </body>
</html>




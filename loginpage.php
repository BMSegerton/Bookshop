<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> my first page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    </head>
    <body style="background-color:  #00ccff" >
	
	<div class="container-fluid" style="width:400px;margin-top:100px">
	<centre>  
	<div class="card">
	<div class="card-body">
	<img src="hbpen.jpg" class="card-img-top" style="height:200px" class="img-rounded" alt="Card image cap">
	<form class="form-group" action='connectDatabase.php' method="POST">
	<label> Username : </label> 
	<input type="text" name="username" class="form-control" placeholder="enter username" Required> <br>
	<label> Password: </label> 
	<input type="password" name="password" class="form-control" placeholder=" enter password"Required> <br>
	<input type="submit" name="login_submit" class=btn btn-default"> 
	
	</form>
	</div>
	</div>
	</centre> 
	</div>
        <?php

	

       
        ?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajaxgoogleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    </body>
</html>


    
    


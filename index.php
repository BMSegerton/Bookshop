<?php
require_once 'core/init.php';

$books = DB::getInstance()->query('SELECT * FROM books');

if(!$books->count()){
    echo 'No DATA FOUND';
} else {
    foreach ($books->results() as $books){
        echo  $books-> isbn  ;
         echo $books-> author;
          echo $books-> title, '<br>';
           echo $books-> price, '<br>';
            echo $books-> description, '<br>';
    }
    }


    


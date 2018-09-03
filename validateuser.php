<?php
require_once 'core/init.php';
$user = new User();
if(Input::exists()){
    $login = $user->login(Input::get('username'), Input::get('password'));
    
    if($login){
        Redirect::to('Admin.php');
    } else {
        echo '<p><h1>Sorry logging in failed  </h1></p>';
    }
}
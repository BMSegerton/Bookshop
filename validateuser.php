<?php
require_once 'core/init.php';
$user = new User();
if(Input::exists()){
    $login = $user->login(Input::get('username'), Input::get('password'));
    
    if($login){
        Redirect::to('Admin.php');
    } else {
        echo '<p>Sorry logging in failed  </p>';
    }
}
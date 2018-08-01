 <?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Redirect
 *
 * @author NUR
 */
class Redirect {
    public static function to($location = null){
        if($location){
            header('Location: ' . $location);
            exit();
        }
    }
}

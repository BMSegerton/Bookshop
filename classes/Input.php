<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of INPUT
 *
 * @author NUR
 */
class Input {
    public static function exists($type = 'post'){
        switch ($type){
            case 'post';
                return(!empty($_POST))? true : false;
                
                
            case 'get':
                return(!empty($_GET)) ? true: FALSE;
                
            default :
                return false;
               
                
        }
    }
    public static function get($item){
        if(isset($_POST[$item])){
            return $_POST[$item];
            
        }elseif (isset ($_GET[$item])) {
            return $_GET[$item];
            
        }
        return '';
    } 
}

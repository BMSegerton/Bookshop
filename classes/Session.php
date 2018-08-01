<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Session
 *
 * @author NUR
 */
class Session {
    public static function exists($name){
        return (isset($_SESSION[$name])) ? true: FALSE;
    }

    public static function put($name, $value){
        return $_SESSION[$name] = $value;
    }
    public static function get($name){
        return $_SESSION[$name];
    }

    public static function delete($name){
        if(self::exists($name)){
            unset($_SESSION[$name]);
    }
}
}

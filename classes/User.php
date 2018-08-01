<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author NUR
 */

require_once 'core/init.php';


class User{
    private $_db;
    private$_data;
    private $_sessionName;
    public function __construct() {
        $this->_db = DB::getInstance();
        $this->_sessionName = Config::get('session/session_name');
    }
    public function find($user=null){
        if($user){
            $field = 'username';
            $data = $this->_db->get('login', array($field, '=', $user));
            if($data->count()){
                $this->_data = $data->first();
                
                return TRUE;
            }
        }
        return FALSE;
    }

    public function login($username=null, $password=null){
        $user = $this->find($username);
        if($user){
            if($this->data()->password ===$password) {
                Session::put($this->_sessionName, $this->data()->username);
                return TRUE;
            }
        }
        return FALSE;
    }
    private function data(){
        return $this->_data;
    }


}
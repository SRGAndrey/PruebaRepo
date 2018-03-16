<?php

class User{
    public $id;
    public $username;
    public $userpassword;
    
    public function User($id,$username, $userpassword){
        $this->username = $username;
        $this->userpassword = $userpassword;
        $this->id = $id;
        
    }
    
    
}

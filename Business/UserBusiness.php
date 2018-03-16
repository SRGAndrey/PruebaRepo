<?php
include '../Data/UserData.php';

class UserBusiness {
    private $userData;
    
    public function UserBusiness(){
        $this->userData = new UserData();
    }
    
    public function isUser($user){
        $result = $this->userData->isUser($user);
        return $result;
    }
    
}

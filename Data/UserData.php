<?php
include '../Domain/User.php';

class UserData {
    
    private $server;
    private $user;
    private $password;
    private $db;
    private $isActive;
    
    public function UserData(){
        $this->isActive = false;
        $this->server = "localhost";
        $this->user = "root";
        $this->password = "";
        $this->db = "1phptest";
    }
    
    public function isUser($user){
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $query = mysqli_query( $conn, "SELECT COUNT(*) as total FROM user WHERE name ='"
                .$user->name."' AND password = ".$user->password."");
        $result = mysqli_query($conn, $query);
        mysqli_close($conn);        
        $array = mysqli_fetch_array($result);
        if($array['total'] == 1){
            return true;
        }else{
            return false;
        }                   
    }

}
    
    
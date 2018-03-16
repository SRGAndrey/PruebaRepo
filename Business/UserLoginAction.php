<?php
include '../Business/UserBusiness.php';
$name = $_POST['txtName'];
$password = $_POST['txtPassword'];

if(strlen($name)> 0 && strlen($password) > 0){
    
    if(!is_numeric($name)){
        
        $user = new UserData(0,(String)$name,(String)$password);
        $userBusiness = new UserBusiness();
        $result = $userBusiness->isUser($user);
        if($result == true){
            header("location: ../Presentation/login.php?sucess=login");
        }else{
            header("location: ../Presentation/login.php?error=not_user");  
        }
        
    }else{
        header("location: ../Presentation/login.php?error=number_form");
    }
    
}else{
    header("location: ../Presentation/login.php?error=empty_field");
    
}


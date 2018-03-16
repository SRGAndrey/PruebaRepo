<?php
include './PersonBusiness.php';

$name = $_GET['txtName'];
$age = $_GET['txtAge'];
$wage = $_GET['txtWage'];

if(strlen($name)> 0 && strlen($age) > 0 && strlen($wage) > 0){
    
    if(is_numeric($age) && is_numeric($wage)){
        
        $person = new Person(1,(String)$name,(int)$age,(int)$wage);
        $personBusiness = new PersonBusiness();
        $result = $personBusiness->insert($person);
        
        
        
        
        
        
        
         header("location: ../Presentation/Insert_Person.php?sucess=sucess");
        
    }else{
        header("location: ../Presentation/Insert_Person.php?error=number_form");
    }
    
}else{
    header("location: ../Presentation/Insert_Person.php?error=empty_field");
    
}

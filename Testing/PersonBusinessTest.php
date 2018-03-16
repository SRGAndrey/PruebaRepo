<?php

include '../Business/PersonBusiness.php';

$person = new PersonBusiness();
$res = $person->getAllRegisteredPersons();
foreach($res as $current){
    echo $current->toString() . "<br>";
}
?>

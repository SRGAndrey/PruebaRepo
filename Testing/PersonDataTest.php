<?php
include '../Data/PersonData.php';

$personData = new PersonData();

$persons = $personData->getPersons();

$personDataInsert = new Person(0,'Maria',45,300);
$personInsert = $personData->insert($personDataInsert);



foreach ($persons as $currentPerson) {
    echo $currentPerson->toString() . "<br>";
}





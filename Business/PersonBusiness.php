<?php
include '../Data/PersonData.php';


class PersonBusiness {
    private $personData;
    
    public function PersonBusiness(){
        $this->personData = new PersonData();
    }
    
    public function getAllRegisteredPersons(){
        $result = $this->personData->getPersons();
        return $result;
    }
    public function insert($person){
        $result = $this->personData->insert($person);
        return $result;        
    }
}

?>

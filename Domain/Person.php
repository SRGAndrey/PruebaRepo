<?php

class Person {
    
    public $id;
    public $name;
    public $age;
    public $wage;
    
    public function Person($id, $name, $age, $wage){
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->wage = $wage;
    }
 
    
    public function toString(){
        $text = $this->id . "-> " . $this->name;
        return $text;
    }
    
}

?>

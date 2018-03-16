<?php

class Person {
    
    public $id;
    public $name;
    public $age;
    public $weight;
    
    public function Person($id, $name, $age, $weight){
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->weight = $weight;
    }
 
    
    public function toString(){
        $text = $this->id . "-> " . $this->name;
        return $text;
    }
    
}

?>

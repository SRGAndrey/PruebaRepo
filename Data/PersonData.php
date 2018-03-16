<?php
include '../Domain/Person.php';

class PersonData {
    
    private $server;
    private $user;
    private $password;
    private $db;
    
    private $connection;
    private $isActive;
    
    public function PersonData(){
        $this->isActive = false;
        $this->server = "localhost";
        $this->user = "root";
        $this->password = "";
        $this->db = "1phptest";
    }
    
    public function getPersons(){
        //crear la conexion
        $conn = mysqli_connect($this->server, $this->user, $this->password, 
                $this->db);//puerto por defecto 3306
        
        //el primer parametro es la conexion con la bd
        //el segundo parametro es la consulta
        $result = mysqli_query($conn, "SELECT * FROM PERSON");
        mysqli_close($conn);
        
        //RECORRER EL RESULTADO PARA INSERTARLO EN UN ARREGLO
        $array = [];
        while($row = mysqli_fetch_array($result)){
            $currentPerson = new Person($row['id'], $row['name'], $row['age'], 
                    $row['wage']);
            array_push($array, $currentPerson);
        }
        return $array;
    }
    public function insert($person){
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $query = mysqli_query( $conn, "call insert_person('".$person->name."',"
                . "".$person->age.",".$person->wage." )");
        $result = mysqli_query($conn, $query);
        mysqli_close($conn);
        return $result;                
    }
    
    
    
}

?>

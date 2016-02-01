<?php
class JedDB{
    private $host="localhost";
    private $username="root";
    private $password="root";
    private $dbname="CRUD";
    private $conn;

public function __construct(){
    $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->username,$this->password);
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
public function showData($table){
    $sql="SELECT * FROM $table";
    $q = $this->conn->query($sql) or die ("Failed");
        while ($r = $q->fetch(PDO::FETCH_ASSOC)) {
            $data[]=$r;
        }
        return $data;
        }
public function getById($id,$table){
    $sql="SELECT * FROM $table WHERE id =:id";
    $q = $this->conn->prepare($sql);
    $q->execute(array(':id'=>$id));
    $data= $q->fetch(PDO::FETCH_ASSOC);
    return $data;
}
public function update($id,$name,$address,$age,$contact,$table){
    $sql = "UPDATE $table SET name=:name,address=:address,age=:age,contact=:contact WHERE id=:id";
    $q = $this->conn->prepare($sql);
    $q->execute(array(':id'=>$id,':name'=>$name,':address'=>$address,':age'=>$age,':contact'=>$contact));
    return true;
}
public function insertData($name,$address,$age,$contact,$table){
    $sql= "INSERT INTO $table SET name=:name,address=:address,age=:age,contact=:contact";
    $q = $this->conn->prepare($sql);
    $q->execute(array(':name'=>$name,':address'=>$address,':age'=>$age,':contact'=>$contact));
    return true;
}
public function deleteData($id,$table){
    $sql = "DELETE FROM $table WHERE id =:id";
    $q= $this->conn->prepare($sql);
    $q->execute(array(':id'=>$id));
    return true;
}
}
?>
<?php
class crud{
    private $db;
    public function __construct($db){
        $this->db = $db;
    }
    public function select($table){
        $array = array();
        $query = "SELECT * FROM ".$table."";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                $array[] = $row;
            }
            return $array;
        }
        }
    public function lastRecord($table,$id){
        $array = array();
        $query = "SELECT * FROM ".$table." ORDER BY ".$id." DESC LIMIT 1";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $editrow = $stmt->fetch(PDO::FETCH_ASSOC);
        return $editrow;
        }
    public function getID($id,$table,$idName) {
        $stmt = $this->db->prepare("select * from ".$table." where ".$idName."=:id");
        $stmt->execute(array(":id" => $id));
        $editrow = $stmt->fetch(PDO::FETCH_ASSOC);
        return $editrow;
    }
    public function insert($table_name,$data){
        try {
        $string = "INSERT INTO ".$table_name." (";
        $string .= implode(",", array_keys($data)) .') VALUES (';
        $string .= "'" . implode("','", array_values($data)) ."')";
        $stmt = $this->db->prepare($string);
        $stmt->execute();
        return true;
        } 
        catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }
    public function getOption($table,$col_value){
        $array = array();
        $query = "SELECT * FROM ".$table." ORDER BY ".$col_value." ASC";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                $array[] = $row;
            }
                return $array;
        }
    }
    public function countRows($table){
         $array = array();
        $query = "SELECT * FROM ".$table."";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $no = $stmt->rowCount($query);
        return $no;
        
    }
}
?>
<?php
    include "classes/DB.php";

    abstract class Main {
        protected $table;

        abstract public function insert();

        // READ DATA
        public function readAll(){
            $sql = "SELECT * FROM $this->table";
            $stmt = DB::prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } 
 
        // DELETE DATA
        public function delete($id){
            $sql = "DELETE FROM $this->table WHERE id=:id";
            $stmt = DB::prepare($sql);
            $stmt->bindParam(':id', $id);
            return $stmt->execute();
        }
    }
?>
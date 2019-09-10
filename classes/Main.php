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
public function delete(array $id) {
$placeholders = trim(str_repeat('?,', count($id)), ',');
$sql = "DELETE FROM $this->table WHERE id IN ($placeholders)";
$stmt = DB::prepare($sql);
return $stmt->execute($id);
}
}
?>
<?php

require_once "connection.php";

class ModelUsers {
  static public function MdlShowUsers($table, $item, $value) {
    $stmt =  Conecction::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");
    $stmt -> bindParam(":".$item, $value, PDO::PARAM_STR);
    $stmt -> execute();

    return $stmt -> fetch();
  }
}
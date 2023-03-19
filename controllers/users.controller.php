<?php

class UsersController {
  //Ingreso de usuario
  public function ctrUserLogin() {
    if(isset($_POST['user']) && isset($_POST['pass'])) {
      if(preg_match('/^[a-zA-Z0-9]+$/', $_POST['userInserted']) &&
        preg_match('/^[a-zA-Z0-9]+$/', $_POST['passInserted'])) 
      {
        //Table from MySQL
        $table = "users";
        //Field from MySQL
        $item = "username";
        //Value from the login form
        $value = $_POST['userInserted'];

        $response = ModelUsers::MdlShowUsers($table, $item, $value);
      }
    }
  }

}
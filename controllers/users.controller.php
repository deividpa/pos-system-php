<?php

class UsersController {
  //Ingreso de usuario
  public function ctrUserLogin() {
    if(isset($_POST['userInserted']) && isset($_POST['passInserted'])) {
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

        if($response['username'] == $_POST['userInserted'] && $response['password'] == $_POST['passInserted']) 
        {
          
        }
      } else {
        echo "Datos ingresados son inválidos";
      }
    } else {
      echo "Por favor ingrese el usuario y la contraseña";
    }
  }

}
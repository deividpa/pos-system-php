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
        //Validate if there is a data response from the db with those credentials
        if(is_array($response)) {
          if($response['username'] == $_POST['userInserted'] && $response['password'] == $_POST['passInserted']) 
          {
            $_SESSION['startSession'] = "ok";
            echo "Sesión creada para usuario: " . $response['username'];
            echo "<script>
                    window.location = 'main'
                  </script>";
          } else {
            echo '<div class="alert alert-warning mt-3">No existe ningún usuario con estas credenciales.</div>';
          }
        } else {
          echo "<div class='alert alert-warning mt-3'>No existe ningún usuario con estas credenciales.</div>";
        }

        
      } else {
        //preg_match incorrect
        echo "El usuario y la contraseña no deben contener carácteres especiales";
      }
    } else {
      //isset is not true
      echo "Por favor ingrese el usuario y la contraseña";
    }
  }

}
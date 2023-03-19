<?php

class Conecction {
  public function connect() {
    $link = new PDO("mysql:host=localhost;dbname=pos", 
                      "root", 
                        "");
    $link->exec("set names utf-8"); 

    return $link;
  }
}
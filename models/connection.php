<?php


class Conecction {
  public static function connect() {
    $link = new PDO("mysql:host=127.0.0.1; port=3307; dbname=pos", 
                      "root", 
                        "");
    $link->exec("set names utf8"); 

    return $link;
  }
}
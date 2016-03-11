<?php

class Model{

  public function getDBConnection() {
      return new PDO('mysql:host=localhost;dbname=databasename, root, password');
  }
}

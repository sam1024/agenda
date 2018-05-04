<?php

  class Conexion {

    protected $conex;

    function __construct() {
      include_once 'config.php';
      try {
        $this->conex = new PDO("mysql:host=$SERVER; dbname=$DB", $USER, $PASS);
        $this->conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->conex->exec("SET CHARACTER SET utf8mb4");
      } catch(Exception $ex) {
        echo "ERROR: " . $ex->getMessage();
      }

    }

    public function __destruct() {
      $this->conex = null;
    }

  }

?>

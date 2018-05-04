<?php
  session_start();

  include_once 'Conexion.php';

  class Register extends Conexion {

    private $nombre;
    private $user;
    private $pass;
    private $query;

    function __construct($nombre, $user, $pass){
      parent::__construct();
      $this->nombre = $nombre;
      $this->user = $user;
      $this->pass = $pass;
      $this->altaUsers();
    }

    private function altaUsers() {
      $this->query = $this->conex->prepare("INSERT INTO usuarios VALUES(?, ?, ?, ?)");
      if ($this->query->execute(array(null, $this->nombre, $this->user, $this->pass))) {
        header("location: login.html");
      } else {
        echo "ERROR: Al trartar de aguardar los datos";
      }
    }

  }

  $register = new Register($_POST['nombre'], $_POST['user'], sha1($_POST['pass']));

?>

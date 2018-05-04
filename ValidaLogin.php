<?php
  session_start();
  include 'Conexion.php';

  class ValidaLogin extends Conexion {

    private $user;
    private $pass;
    private $query;

    function __construct($user, $pass) {
      parent::__construct();
      $this->user = $user;
      $this->pass = $pass;
      $this->valida();
    }

    private function valida() {
      $this->query = $this->conex->prepare("SELECT id, user, pass FROM usuarios WHERE user = ? AND pass = ?");
      $this->query->execute(array($this->user, $this->pass));
      $result = $this->query->fetchAll();
      if(count($result) != 0) {
        foreach ($result as $key => $datos) {
          $_SESSION['id'] = $datos['id'];
          $_SESSION['user'] = $datos['user'];
        }
        echo "1";
      } else {
        echo "0";
      }
    }

  }

  $validalogin = new ValidaLogin($_POST['user'], sha1($_POST['pass']));

?>

<?php
  include_once 'Conexion.php';

  class  VerificaUser extends Conexion {

    private $user;
    private $query;
    private $result;

    function __construct($user) {
      parent::__construct();
      $this->user = $user;
      $this->verifica();
    }

    private function verifica() {
      $this->query = $this->conex->prepare("SELECT id FROM usuarios WHERE user = ?");
      $this->query->execute(array($this->user));
      $this->result = $this->query->fetchAll();
      if (count($this->result) != 0) {
        echo "1";
      } else {
        echo "0";
      }
    }

  }

  $verificauser = new VerificaUser($_POST['user']);

?>

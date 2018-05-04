<?php
include_once 'Conexion.php';

  class DatosContactos extends Conexion {

    private $query;

    function __construct() {
      parent::__construct();
    }

    public function listContactos($id) {
      $this->query = $this->conex->prepare("SELECT id, nombre, tel, dire, correo FROM contactos WHERE id = ?");
      $this->query->execute(array($id));
      return $this->query->fetchAll();
    }

  }

?>

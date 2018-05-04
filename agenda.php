<?php
  session_start();
  if(!isset($_SESSION['id'])) {
    header("location: login.html");
  } else {
    require 'DatosContactos.php';
    $datos = new DatosContactos();
    $result = $datos->listContactos($_SESSION['id']);
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Agenda</title>
    <link rel="stylesheet" href="css/agenda.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
  </head>
  <body>
    <main>

      <div class="container" id="div_cards">
        <!--table>
          <thead>
            <tr>
              <th>NOMBRE</th>
              <th>TELEFONO</th>
              <th>DIRECCIÓN</th>
              <th>CORREO</th>
              <th>ACCIONES</th>
            </tr>
          </thead>
          <tbody>

                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <div class='icons'>
                      <span class='fas fa-edit'></span>
                      <span class='fas fa-trash-alt'></span>
                    </div>
                  </td>
                </tr>
         <tbody>
        <table-->
        <?php
          foreach ($result as $key => $datos) {
            echo '
                <div class="card">
                  <p class="datos_contact">Nombre: ' . $datos['nombre'] . ' </p>
                  <p class="datos_contact">Télefono: ' . $datos['tel'] . '   </p>
                  <p class="datos_contact">Dirección: ' . $datos['dire'] . '  </p>
                  <p class="datos_contact">Corre: ' . $datos['correo'] . '  </p>
                  <div class="icons">
                    <a href="updatecontacto.php?id=' . $datos['id'] . '"><span class="fas fa-edit"></span></a>
                    <a href="DeleteContacto.php?id=' . $datos['id'] . '"><span class="fas fa-trash-alt"></span></a>
                  </div>
                </div>';
              }
            ?>
      </div>
        <div class="div_icon"><a href="add_contact.php"><span id="add_icon" class="fas fa-pencil-alt"></span></a></div>
      </div>
    </main>
    <script type="text/javascript" src="js/jQuery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/agenda.js"></script>
  </body>
</html>

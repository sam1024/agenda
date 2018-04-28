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

                <div class="card">
                  <p class="datos_contact">Nombre: </p>
                  <p class="datos_contact">Télefono:  </p>
                  <p class="datos_contact">Dirección: </p>
                  <p class="datos_contact">Corre: </p>
                  <div class="icons">
                    <a href="updatecontacto.php?id=' . $contacto['id'] . '"><span class="fas fa-edit"></span></a>
                    <a href="DeleteContacto.php?id=' . $contacto['id'] . '"><span class="fas fa-trash-alt"></span></a>
                  </div>
                </div>
      </div>
        <div class="div_icon"><a href="add_contact.php"><span id="add_icon" class="fas fa-pencil-alt"></span></a></div>
      </div>
    </main>
    <script type="text/javascript" src="js/jQuery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/agenda.js"></script>
  </body>
</html>

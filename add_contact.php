<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Agregar Contacto</title>
    <link rel="stylesheet" href="css/add_contact.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
  </head>
  <body>
    <header>
      <div class="container">
        <span id="icon_menu" class="fas fa-bars"></span>
        <nav>
          <ul>
            <li><span class="fas fa-users"></span><a href="agenda.php" class="link_menu">Contactos</a></li>
            <li><span class="fas fa-sign-out-alt"></span><a href="cerrar_sesion.php" class="link_menu">Cerrar sesión</a></li>
          </ul>
        </nav>
        <h2>Agenda de </h2>
      </div>
    </header>
    <main>
      <div class="container">
        <p>Datos del contacto</p>
        <h2 id="msj"></h2>
        <form action="TransaccionesContacto.php" method="post" id="form">
          <input type="text" id="nombre" name="nombre" class="input_field" placeholder="Nombre" autofocus>
          <input type="text" id="tel" name="tel" class="input_field" placeholder="Telefono">
          <input type="text" id="direccion" name="direccion" class="input_field" placeholder="Direccion">
          <input type="email" id="email" name="email" class="input_field" placeholder="Correo">
          <input type="hidden" name="id" value="0">
          <button type="submit" id="btn_save" name="button" class="btns">Guardar</button>
        </form>
      </div>
    </main>
    <script type="text/javascript" src="js/jQuery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/add_contact.js"></script>
  </body>
</html>

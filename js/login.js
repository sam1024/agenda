$("#form").submit(function(e) {
  if ($("#user").val() === "") {
    swal(
      "AVISO!!",
      "El campo usuario no puede ser vacio",
      "warning"
    );
    e.preventDefault();//CON ESTO EVITO QUE QUE EL FORMULARIO SE MANDE
    $("#user").focus();
  } else if ($("#pass").val() === "") {
    swal(
      "AVISO!!",
      "El campo contraseña no puede ser vacio",
      "warning"
    );
    $("#pass").focus();
    e.preventDefault();
  } else {
    login($("#user").val(), $("#pass").val());
    e.preventDefault();
  }
});

function login(user, pass) {
  $.post('./ValidaLogin.php' , { //ESTO LE DICE QUE ENVIAREMOS VARIABLES POR EL METODO POST
    user: $("#user").val(),
    pass: $("#pass").val(),
    beforeSend: function() { //ESTO MUESTRA UN MENSAJE EN LA PAGINA MIENTRAS SE PROCESA LA SOLICITUD
      $("#msj").html("Validando...");
    }
  }, function(resp) { //CON ESTA FUNCION RECIBIMOS LA RESPUESTA POR PARTE DEL SERVIDOR
    if (resp === "0") {
        $("#msj").html("Inicio de sesión no válido");
        console.log(resp);
    } else if(resp === "1") {
      location.href = 'agenda.php';
    } else {
      $("#msj").html("ERROR: " + resp);
    }

  });
}

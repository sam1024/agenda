$("#form_register").submit(function(e) {
  if ($("#nombre").val() === "") {
    swal(
      "AVISO!!!",
      "El campo nombre no puede ser vacio",
      "warning"
    );
    $("#nombre").focus();
    e.preventDefault();
  } else if ($("#user").val() === "") {
    swal(
      "AVISO!!!",
      "El campo usuario no puede ser vacio",
      "warning"
    );
    e.preventDefault();
  } else if ($("#pass").val() === "") {
    swal(
      "AVISO!!!",
      "El campo Contraseña no puede ser vacio",
      "warning"
    );
    e.preventDefault();
  } else if ($("#pass2").val() === "") {
    swal(
      "AVISO!!!",
      "Debes verificar la Contraseña",
      "warning"
    );
  } else if ($("#pass").val() !== $("#pass2").val()) {
    swal(
      "AVISO!!!",
      "Las Contraseñas no coinciden",
      "warning"
    );
    e.preventDefault();
  }
});

function verificaUser(user) {
  console.log(user);
  $.post('VerificaUser.php' , {
    user: user,
    beforeSend: function() {
      $("#msj").html("Validando...");
    }
  }, function(resp) {
    if (resp === "0") {
      console.log("resp " + resp);
      $("#msj").html("Nombre disponible").addClass("disp");
    } else {
      console.log("resp " + resp);
      $("#msj").html("Nombre no disponible").addClass("ocupado");
    }

  });
}

$("#icon_menu").on("click", function() {
  $("nav").toggleClass("abrir_cerrar");
});

$("form").submit(function(event) {
  if ($("#nombre").val() === "" ) {
    showMsj("El campo nombre no puede ser vacio");
    event.preventDefault();
  } else if ($("#tel").val() === "" ) {
    showMsj("El campo télefono no puede ser vacio");
    event.preventDefault();
  }
});

function showMsj(msj) {
  $("#msj").css("display", "block");
  $("#msj").html(msj).fadeOut(2500);
}

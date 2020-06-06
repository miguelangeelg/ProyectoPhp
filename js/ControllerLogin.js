$("#frmLogin").submit( function (e) {
    e.preventDefault();
    var documento = $("#txtDocumento").val();
    // var clave     =  $("#txtClave").val();
    $.ajax({
        url:"../controller/ctrUsuario.php",
        type:"POST",
        data:{documento,"tipoPeticion":1},
        success: function (response) {
            console.log(response)
          }
    })//FIN AJAX

  } );
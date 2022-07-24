function Eliminar(correo)
{

  var opcion = confirm("¿Está completamente seguro de que quiso presionar el botón de eliminar?");
  if (opcion == true) {

      $.ajax({
        type: 'POST',
        url: '../Controller/UsuariosController.php',
        data:{
          "Funcion" : "EliminarUsuario",
          "Correo" : correo
        },
        success: function(data){
          location.reload();
        },
        error: function(){
          alert('Error');
        }
      });

  }

}
$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});

function Eliminar(correo)
{

  var opcion = confirm("¿Está seguro de que desea eliminar a este usuario?");
  if (opcion == true) {

      $.ajax({
        type: 'POST',
        url: '../Controller/ClientesController.php',
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

/* function Eliminar(comentario)
{

  var opcion = confirm("¿Está seguro de que desea eliminar este comentario?");
  if (opcion == true) {

      $.ajax({
        type: 'POST',
        url: '../Controller/ComentarioController.php',
        data:{
          "FuncionC" : "EliminarComentario",
          "comentario" : comentario
        },
        success: function(data){
          location.reload();
        },
        error: function(){
          alert('Error');
        }
      });

  }
*/
  

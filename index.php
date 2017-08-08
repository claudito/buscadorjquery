<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Busqueda Ajax</title>
<!-- Optimizar el sitio en dispositivos móviles -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Importar CSS de Bootstrap  -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<!-- Importar Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Importar Funciones JavaScript de Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>

function buscar() {
    var textoBusqueda = $("input#busqueda").val();
 
     if (textoBusqueda != "") {
        $.post("buscar.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
            $("#resultadoBusqueda").html(mensaje);
         }); 
     } 
     else 
	{ 
	loadTabla(1);
	};
};


function loadTabla(page){
    var parametros = {"action":"ajax","page":page};
    $("#loader").fadeIn('slow');
    $.ajax({
      url:'lista.php',
      data: parametros,
       beforeSend: function(objeto){
      $("#loader").html("cargando...");
      },
      success:function(data){
        $("#resultadoBusqueda").html(data).fadeIn('slow');
        $("#loader").html("");
      }
    })
  }


</script>

</head>
<body>
<div class="container-fluid">
<div class="row">

<div class="col-md-2">
<form accept-charset="utf-8" method="POST">
<input type="text" name="busqueda" id="busqueda" value=""  autocomplete="off" onKeyUp="buscar();"  
 placeholder="Buscar"  class="form-control" />
</form>

</div>

<div class="col-md-10">
<div id="loader"></div>
<div id="resultadoBusqueda"></div><!-- Datos ajax Final -->


</div>

</div>
</div>

<script>
loadTabla(1);
</script>

</body>
</html>
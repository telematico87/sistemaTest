<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<title>Ingresa al Sistemas Test</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm">
      <img src="<?php echo base_url('img/portada.png'); ?>" width="" height="" alt=""/>
    </div>
    <div class="col-sm" align="center">
    	 <img src="<?php echo base_url('img/logotipo.png'); ?>" width="" height="" alt=""/>
    	 <h3 align="center">Iniciar Sesión </h3>
      <form action="" method="POST">
  <label for="nombre" >Numero de Documento:</label><br>
  <input type="text" id="ndocumento" name="ndocumento"><br>
  <label for="clave">Contraseña:</label><br>
  <input type="text" id="clave" name="clave">
</br>
</br>
  <input type="submit" value="Ingresar" id="boton" class="btn btn-danger" name="boton">
  </br>
  <span> <a> Olvide mi contraseña  </a> </span>
  </br>
  <span>¿Primera vez en Redrilsa?</span>
  </br>
</form>
    <form action="<?php echo base_url(); ?>index.php/Sistema/registrar" method="POST">
     <input type="submit" value="Registrarse" id="boton" style="background-color:#787878;color:white" name="boton">
    </form>
    </div>
    
  </div>
</div>

</body>

<script type="text/javascript">
    //Funcion que envia a cambiarcontrasena y valida si sson identicas
  $('#boton').click(function(e) {  
    var ndocumento=$("#ndocumento").val();
    var clave=$("#clave").val();
    if(ndocumento=='' && clave==''){
      alert("Introduzca los campos obligatorios");
      return false;
    }
  });

</script>
</html>

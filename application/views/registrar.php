
  <?php 
  


  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<title>Registrarse</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
	<div class="container" align="center">
  <div class="row">
    <div class="col-sm">
      <img src="<?php echo base_url('img/portada.png'); ?>" width="" height="" alt=""/>
    </div>
    <div class="col-sm">
    	<img src="<?php echo base_url('img/logotipo.png'); ?>" width="" height="" alt=""/>
  <h3> Registrarse </h3>
<form action="<?php echo base_url(); ?>index.php/Sistema/validarRegistrar"  method="POST">
  
  <label for="nombre">Nacionalidad:</label><br>
  
<select id="nacionalidad" name="nacionalidad">
  <?php foreach ($comboNacionalidad as $tmp) {?>
<option value='<?php echo $tmp['idnacionalidad'];?>'><?php echo $tmp['nombre'];?></option>
<?php }?>
</select>
    </br>
  <label for="clave">Tipo de Documento:</label><br>
  <select id="tipodocumento" name="tipodocumento" width="90%">
  <?php foreach ($comboTipoDocumento as $tmp) {?>
<option value='<?php echo $tmp['idtipodocumento'];?>'><?php echo $tmp['nombre'];?></option>
<?php }?>
</select>

   </br>
   <label for="nombre">Numero de Documento:</label><br>
  <input type="text" id="ndocumento" name="ndocumento"><br>
  <label for="clave">Nombres:</label><br>
  <input type="text" id="nombres" name="nombres">
   </br>
  <label for="clave">Apellido Paterno:</label><br>
  <input type="text" id="apaterno" name="apaterno">
  </br>
   <label for="nombre">Apellido Materno:</label><br>
  <input type="text" id="amaterno" name="amaterno"><br>
  <label for="clave">Contraseña:</label><br>
  <input type="text" id="clave1" name="clave1">
  </br>
    <label for="clave">confirmar Contraseña:</label><br>
  <input type="text" id="clave2" name="clave2">
  </br>
    <div class="form-check">
    <input type="checkbox" class="form-check-input" id="check" >
   <label class="form-check-label" for="exampleCheck1">Acepto los terminos y condiciones</label>
   </div>
   </br>
  <input type="submit" value="Registrar" id="botonr"  class="btn btn-danger" name="botonr">
    </br>
    <span> <a href="<?php echo base_url(); ?>index.php/Sistema/">Ingresar</a></span>
   </div>

   <input type="hiden" class="form-check-input" id="auxCheck" value='0' >
</form>
</body>

<script type="text/javascript">
  
  //Funcion que envia a cambiarcontrasena y valida si sson identicas
  $('#botonr').click(function(e) {  

    var nacionalidad=$("#nacionalidad").val();
    var tipodocumento=$("#tipodocumento").val();
    var ndocumento=$("#ndocumento").val();
    var nombres=$("#nombres").val();
    var apaterno=$("#apaterno").val();
    var amaterno=$("#amaterno").val();
    var clave1=$("#clave1").val();
    var clave2=$("#clave2").val();
    var check=$("#check").val();
    var terminos =$("#auxCheck").val();
    if($.trim(clave1)!=$.trim(clave2)){
    	alert("las contraseñas no coinciden");
    	return false;
    }

    
    if(nacionalidad==''|| tipodocumento==''|| ndocumento==''|| nombres==''|| apaterno==''|| amaterno==''|| clave1==''|| clave2==''){
      alert("Introduzca los campos obligatorios");
      return false;
    }
    if(terminos==0){
        alert("Debe aceptar los terminos y condiciones");
    	return false;
    }
  });

$(":checkbox").change(function() {
	var valor =$("#auxCheck").val();
	if(valor==0)
     $("#auxCheck").val(1);
    else
      $("#auxCheck").val(0);	
     });
</script>
</html>

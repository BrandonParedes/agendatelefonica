<!DOCTYPE html>
<html>
<center>


<head>
<title>Agenda telefónica</title>


<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">


<script type="text/javascript">
  function ConfirmarActualizar()
  {
    var respuesta = confirm("¿Deseas actualizar el contacto?");

    if (respuesta == true) 
    {
      return true;
    }
    else
    {
      return false;
    }
  }
</script>



</head>
 



<body>

  <h1>Modificar contacto</h1>

 <?php

  $i=1;
  foreach($data as $row)
  {

  ?>

	<form method="post">

		<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td>Nombre </td>
    <td><input type="text" name="nombre" value="<?php echo $row->nombre; ?>"/></td>
  </tr>

  <tr>
    <td>Telefono </td>
    <td><input type="text" name="telefono" value="<?php echo $row->telefono; ?>"/></td>
  </tr>

  <tr>
    <td>Direccion </td>
    <td><input type="text" name="direccion" value="<?php echo $row->direccion; ?>"/></td>
  </tr>

  <tr>
    <td>Correo </td>
    <td><input type="text" name="correo" value="<?php echo $row->correo; ?>"/></td>
  </tr>

  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="update" value="Actualizar" onclick="return ConfirmarActualizar();"/></td>
  </tr>
</table>
	</form>

	<?php 
} 
?>

</body>

</center>
</html>
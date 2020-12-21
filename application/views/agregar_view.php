<!DOCTYPE html>  
<html>
<center>

<head>
<title>Agenda telefónica</title>


<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">


</head>
 
<body>
  
  <br><br>
  <h1>Agenda telefónica</h1>
  <h2>Nuevo contacto</h2><br><br>

	<form method="post">
    
		<table width="600" border="1" cellspacing="5" cellpadding="5">

  <tr>
    <td>Nombre: </td>
    <td><input type="text" name="nombre"/></td>
  </tr>

  <tr>
    <td>Teléfono: </td>
    <td><input type="text" name="telefono"/></td>
  </tr>

  <tr>
    <td>Dirección: </td>
    <td><input type="text" name="direccion"/></td>
  </tr>

  <tr>
    <td>Correo electrónico: </td>
    <td><input type="email" name="correo"/></td>
  </tr>

  <tr>
    <td colspan="2" align="center"><input type="submit" name="save" value="Registrar"/></td>
  </tr>

  </table>
  

	</form>


<table>
  <tr><br>
    <td colspan="2" align="center"><a href='mostrarcontacto'><input type="button" name="search" value="Lista de contactos"/></a></td>
  </tr>
</table>


</body>



</center>


</html>


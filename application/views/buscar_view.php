
<!DOCTYPE html>
<html>
<center>

<head>
<title>Agenda telefónica</title>


<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">


<script type="text/javascript">
  function ConfirmarEliminado()
  {
    var respuesta = confirm("¿Deseas eliminar el contacto?");

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

  <h1>Lista de contactos</h1>

<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>No. Registro</th>
    <th>Nombre</th>
    <th>Telefono</th>
    <th>Dirección</th>
    <th>Correo electrónico</th>
   <th>Actualizar</th>
   <th>Eliminar</th>
  </tr>
  <?php

  $i=1;

  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->nombre."</td>";
  echo "<td>".$row->telefono."</td>";
  echo "<td>".$row->direccion."</td>";
  echo "<td>".$row->correo."</td>";
  echo "<td><a href='actualizarcontacto?id=".$row->id."'>Actualizar</a></td>";
  echo "<td><a href='eliminarcontacto?id=".$row->id."'onclick='return ConfirmarEliminado();'>Eliminar</a></td>";
  echo "</tr>";

  $i++;

  }
   ?>

   

</table>
 
<table>
  <tr><br>
    <td colspan="2" align="center"><a href='nuevocontacto'><input type="button" name="back" value="Regresar"/></a></td>
  </tr>
</table>

</body>


</center>
</html>

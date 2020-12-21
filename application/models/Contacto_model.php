<?php
class Contacto_model extends CI_Model 
{
	/*								Nuevo contacto										*/
	function gregistros($data)
	{
          $this->db->insert('tb_contacto',$data);
          return $this->db->insert_id();
	}
	



	/*								Mostrar contactos										*/
	function buscar_view()
	{
	$query=$this->db->query("select * from tb_contacto");
	return $query->result();
	}





	/*								Contacto especifico										*/
    function fbuscar($id)
	{
	$query=$this->db->query("select * from tb_contacto where id='".$id."'");
	return $query->result();
	}





	/*								Actualizar contacto										*/
	function actualizar_view($nombre,$telefono,$direccion,$correo,$id)
	{
	$query=$this->db->query("update tb_contacto SET nombre= '$nombre', telefono= '$telefono', direccion= '$direccion', correo= '$correo' where id='".$id."'");
	}





	/*								Eliminar contacto										*/
	function eliminarregistro($id)
	{
	$this->db->query("delete from tb_contacto where id='".$id."'");
	}



}
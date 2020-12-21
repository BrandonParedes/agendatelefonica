<?php 

class Contacto extends CI_Controller 
{	
	/*										Constructor										*/
	public function __construct()
	{
	parent::__construct(); 

	$this->load->database(); //Cargar base de datos
	$this->load->model('Contacto_model'); //Cargar modelo
	$this->load->helper("url");
	}




    /*								Funcion guardar contacto					CREATE					*/
	public function nuevocontacto()
	{
		$this->load->view('agregar_view');
		if($this->input->post('save'))
		{
		    $data['nombre']=$this->input->post('nombre');
			$data['telefono']=$this->input->post('telefono');
			$data['direccion']=$this->input->post('direccion');
			$data['correo']=$this->input->post('correo');

			//AGREGAR MENSSAGE BOX CON JS
			$user=$this->Contacto_model->gregistros($data);

			if($user>0)
			{
			        echo "Contacto agregado con exito";
			}
			else{
					echo "No se pudo agregar";
			}
		}
	}




	
	/*								Funcion mostrar contactos						READ				*/
	public function mostrarcontacto()
	{
	$result['data']=$this->Contacto_model->buscar_view();
	$this->load->view('buscar_view',$result);
 	}






 	
 	/*								Funcion actualizar contacto						UPDATE				*/
	public function actualizarcontacto()
	{
		$id=$this->input->get('id');
		$result['data']=$this->Contacto_model->fbuscar($id);
		$this->load->view('actualizar_view',$result);

		if($this->input->post('update'))
		{
			$nombre=$this->input->post('nombre');
			$telefono=$this->input->post('telefono');
			$direccion=$this->input->post('direccion');
			$correo=$this->input->post('correo');

			$this->Contacto_model->actualizar_view($nombre,$telefono,$direccion,$correo,$id);
			//Mensaje con JS
			//echo "Actualizado con exito";

			$result['data']=$this->Contacto_model->buscar_view();
			$this->load->view('buscar_view',$result);
		}

	}






	/*								Funcion eliminar contacto						DELETE		     	*/
   public function eliminarcontacto()
	{
	$id=$this->input->get('id');
	$this->Contacto_model->eliminarregistro($id);
	//Mensaje con JS
	//echo "Registro eliminado correctamente";
	}



}

?>
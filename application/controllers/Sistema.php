
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sistema extends CI_Controller {

	/****************************************************************************
  Nombre: Sistema.php
  Proposito:  controlador general
  REVISIONES:
  Ver        Date        Autor            Description
  ---------  ----------  ---------------  ------------------------------------
  1.0        21/09/2020  Ali Mendoza      Se ha creado el contraldor
 * ************************************************************************** */

	public function __contruct(){
    	parent::__contruct();
        $this->load->helper('form');
    	$this->load->helper('url');
     	$this->load->library('form_validation');
     	$this->load->library('encrypt');
    }
	
	public function index()
	{  
		/*if(!$this->session->set_userdata('usuario')){
			redirect('welcome');
		}
        */

       if(isset($_POST['clave'])){
		$this->load->model('usuarios_model');
		$ndocumento=$_POST['ndocumento'];
        $clave=md5($_POST['clave']);
		if($this->usuarios_model->login($ndocumento,$clave)){
			//$this->session->set_userdata('usuario',$ndoucmento);
		   $this->principal();
		
		}else{
			$this->load->view('error');
		
		}
	   }else{
	   	$this->load->view('login');
	   }
       //
       
	}

   public function destruirSesion(){

   	$this->session->sess_destroy();
   	 redirect('index');
   }

   public function registrar()
	{
	   $this->load->model('usuarios_model');
	   $comboNacionalidad=$this->usuarios_model->comboNacionalidad();

	    $this->load->model('usuarios_model');
	   $comboTipoDocumento=$this->usuarios_model->comboTipoDocumento();


	  $this->load->view('registrar',array("comboNacionalidad" => json_decode($comboNacionalidad,true),"comboTipoDocumento" => json_decode($comboTipoDocumento,true)));
	}


	public function validarRegistrar(){
		 
		
		$this->form_validation->set_rules('nacionalidad', 'Nacionalidad', 'required|trim');
  		$this->form_validation->set_rules('tipodocumento', 'tipo de documento','required|trim');
  		$this->form_validation->set_rules('ndocumento', 'numero de documento','required|trim');
		$this->form_validation->set_rules('nombres', 'nombres', 'required');
		$this->form_validation->set_rules('apaterno', 'Apellido Paterno', 'required|trim');
  		$this->form_validation->set_rules('amaterno', 'Apellido Materno','required|trim');
		$this->form_validation->set_rules('clave1', 'Contraseña', 'required');
		$this->form_validation->set_rules('clave2', 'Repetir Contraseña', 'required');

		
		$this->load->model('usuarios_model');
       if($this->form_validation->run())
  		{

   			$encrypted_password = md5(($this->input->post('clave1')));
   			$data = array(
    		'nombre'  => $this->input->post('nombres'),
    		'clave'  => $encrypted_password,
    		'tipo' => 'administrador',
    		'amaterno' =>  $this->input->post('amaterno'),
    		'apaterno' =>  $this->input->post('apaterno'),
    		'idtipodocumento' =>  $this->input->post('tipodocumento'),
    		'idnacionalidad' =>  $this->input->post('nacionalidad'),
    		'ndocumento' =>  $this->input->post('ndocumento'),
   		     );
   			$id =$this->usuarios_model->insertar($data);
   			 $this->principal();
		}
	}

	public function principal(){
	 		$this->load->model('usuarios_model');
	   		$listaUsuarios=$this->usuarios_model->listaUsuarios();

		   $this->load->view('principal',array("listaUsuarios" => json_decode($listaUsuarios,true)));

	}
}
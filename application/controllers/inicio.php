<?php 
if (! defined('BASEPATH')) exit ('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("inicio_model");
	}

	public function index() {
	
		$this ->load->view("inicio_view");
	}
	
	public function login() {
		$user = $this -> input -> post("user");
		$pass = $this -> input -> post("pass");
		
		// echo "User: ".$user;
		// echo " Pass: ".$pass;
		
		if (empty($user) && empty($pass)):
			redirect("inicio");
		endif;
		
		$query=$this->inicio_model->validarLogin($user,$pass);
		
		if ($query):
			$data = array(
				"loginTrue"=>TRUE;
				"privi"=>$query[0]->privilegio,
				"user"=>$query[0]->user,	
				"activo"=>$query[0]->activo,
				"id"=>$query[0]->id_user
			);
			$this->session->set_userdata($data);
			 redirect("panel");
		else:
			echo "mal";
		endif;
			

	}		

}

/* End Of file inicio.php */
/* Location: ./appplie fdffefe….. */
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index($error=''){
		$data = array();
		$data['error'] = ($error == 'mdp')?'Verifier votre mot de passe':'';
		$this->load->view('login',$data);
	}		

	public function entrer(){
		$this->load->model('user');
		$name = $this->input->post('name');
		$mdp = $this->input->post('mdp');
		$idUser = $this->user->testLogin($name,$mdp);
		if($idUser == 0) redirect(site_url('login/index/mdp'));
		else {
			$_SESSION['idUser'] = $idUser;
			redirect(site_url('accueil'));
		}
	}
}
?>

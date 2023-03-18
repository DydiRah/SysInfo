<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {
	public function index($page = 'infoSociete',$data = array()){
        $this->load->view('inc/header');
        $this->load->view('accueil/'.$page,$data);
        $this->load->view('inc/footer');
	}		

	public function ajoutInfo(){
		
		redirect(site_url('accueil/index/infoSociete'));
	}
}
?>

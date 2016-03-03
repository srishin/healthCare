<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		// $this->load->view('partials/header');
		// $this->load->view('partials/footer');
		$this->load->view('index');
	}

	public function signup(){
		$this->load->view('signup');
	}	

	public function doLogin(){
		 $usrCredentials = array(
            'name' => $this->input->post('name'),
            'password' => $this->input->post('pwd')
        );

		echo var_dump($usrCredentials);
	}

}

?>
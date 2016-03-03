<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {
	
	public function index()
	{
		$this->load->view('partials/patientheader');
		
		$this->load->view('partials/footer');

	}
}

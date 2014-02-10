<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
		//$this->load->library('session');
		$this->load->model('Viewmodel');
	}

	public function index()
	{		
		$this->Viewmodel->displayPage('add_goal');
	}
}
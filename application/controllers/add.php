<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
		$this->load->model('Viewmodel');
	}
	public function index($type = "")
	{		
		//echo 'action/'+$type;
		$this->Viewmodel->displayPage('goals');
	}
	public function goal() {
		$this->db->insert('goals', $_POST);
	}
}
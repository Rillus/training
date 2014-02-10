<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Action extends CI_Controller {
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
		$this->Viewmodel->displayPage('action');
	}
	public function action($type) {
		echo 'here';
		$this->Viewmodel->displayPage('action/'+$type);
	}
}
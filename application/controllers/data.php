<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data extends CI_Controller {
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
		$this->Viewmodel->displayPage('add_goal1');
	}
	public function get($goalId) {
		$this->db->where('goal_id', $goalId);
		$datapoints = $this->db->get('milestones');
		
		$data['data'] = $datapoints;
		
		$this->Viewmodel->displayPage('data', $data);
	}
}
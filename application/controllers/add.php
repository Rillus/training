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
		$this->Viewmodel->displayPage('add_goal1');
	}
	public function goal() {
		$this->db->insert('goals', $_POST);
	}
	public function milestone($type, $goalId) {
		$this->db->where('type', $type);
		$actions = $this->db->get('actions', 1);
		$action = $actions->row();

		$actionArray = array (
			'type' => $action->type,
			'val1_unit' => $action->val1_unit,
			'conjunctive' => $action->conjunctive,
			'val2_unit' => $action->val2_unit
		);

		$data['type'] = $type;
		$data['action'] = $actionArray;
		$data['goalId'] = $goalId;

		$this->Viewmodel->displayPage('milestone/'.$type, $data);
	}
	public function update() {
		//print_r($_POST);
		$this->db->insert('milestones', $_POST);
	}
}
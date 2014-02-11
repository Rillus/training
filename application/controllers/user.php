<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
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
	public function id($id) {
		$this->db->where('user_id', $id);
		$data['goals'] = $this->db->get('goals');
		
		$actions = $this->db->get('actions');
		foreach($actions->result() as $action){
			$actionArray[$action->type] = array (
				'val1_unit' => $action->val1_unit,
				'val2_unit' => $action->val2_unit
			);
		}
		$data['actions'] = $actionArray;

		$this->Viewmodel->displayPage('goals', $data);
	}
}
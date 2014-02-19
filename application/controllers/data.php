<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('date');
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
		$this->db->order_by('date');
		$datapoints = $this->db->get('milestones');
		
		$data['data'] = $datapoints;

		$this->db->where('id', $goalId);
		$goal = $this->db->get('goals', 1);
		$goal = $goal->row();

		$goalArray = array (
			'val1' => $goal->val1,
			'val2' => $goal->val2,
			'start_date' => $goal->start_date,
			'end_date' => $goal->end_date
		);
		$data['goal'] = $goalArray;

		$actions = $this->db->get('actions');
		foreach($actions->result() as $action){
			$actionArray[$action->id] = array (
				'type' => $action->type,
				'val1_unit' => $action->val1_unit,
				'conjunctive' => $action->conjunctive,
				'val2_unit' => $action->val2_unit,
			);
		}
		// print_r($goalArray);
		// print_r($actionArray);
		// print_r($data['data']);
		$data['actions'] = $actionArray;

		$this->Viewmodel->displayPage('data', $data);
	}
}
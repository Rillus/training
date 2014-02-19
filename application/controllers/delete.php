<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Delete extends CI_Controller {
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
	public function deleter($id, $userId) {
		$this->db->where('id', $id);
		$this->db->where('user_id', $userId);
		$this->db->delete('goals');

		$this->db->where('goal_id', $id);
		$this->db->where('user_id', $userId);
		$this->db->delete('milestones');
		echo "refresh";
	}
	public function update() {
		print_r($_POST);
		//$this->db->insert('milestones', $_POST);
	}
}
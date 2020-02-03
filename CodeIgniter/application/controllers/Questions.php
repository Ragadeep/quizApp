<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questions extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
	}

	public function quizdisplay()
	{
		$this->load->model('quizmodel');
		$this->data['questions'] = $this->quizmodel->getQuestions();
		$this->load->view('play_quiz', $this->data);
	}

	public function resultdisplay()
	{
		$this->data['checks'] = array(
			'ques1' => $this->input->post('quizid1'),
			'ques2' => $this->input->post('quizid2'),
			'ques3' => $this->input->post('quizid3'), 
		);

		$this->load->model('quizmodel');
		$this->data['results'] = $this->quizmodel->getQuestions();
		$this->load->view('result_display', $this->data);
	}

	//Insert Data
	public function insertdata()
	{
		$this->load->view('insert_data');
	}

	public function form_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', "First Name", 'required|alpha');
		$this->form_validation->set_rules('last_name', "Last Name", 'required|alpha');
		if ($this->form_validation->run()) {
			//true
			$this->load->model('form_model');
			$data = array(
				"first_name"	=>$this->input->post("first_name"),
				"last_name"	=>$this->input->post("last_name"),
				"email"	=>$this->input->post("email"),
				"mobile_number"	=>$this->input->post("mobile_number")
			);

			$this->form_model->insert_data($data);

			redirect(base_url() . "index.php/Questions/inserted");
		}
		else{
			//False
			$this->insertdata();
		}
	}

	public function inserted(){
		$this->insertdata();
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('home');
	}
<<<<<<< HEAD


	public function newlist() 
	{
		$this->load->database();
		$this->load->model('model');
		$data  = array('users' => $this->model->query(),
			'rowcount' => $this->model->rowcount(),
			'month' => NULL
		);
		$this->load->view('templates/header');
		$this->load->view('newlist', $data);
	}

	public function filter() 
	{
		$this->load->database();
		$this->load->model('model');
		$monthnumber = $this->input->get('month');
		$page = $this->input->get('submit-input');
	
		$month = date('Y-m', strtotime($monthnumber));
		$rowsperpage = 2;
		$y=0;
		$x=1;

		while($x<$page) {
			$y = $y + $rowsperpage;
			++$x;
		};
		if ($y==-1) {
			$y=0;
		};
	
		$offset = $y;
		$limit = $rowsperpage;
		echo $monthnumber;
		$data  = array(
			'users' => $this->model->filter($month,$offset,$limit),
			'rowcount' => $this->model->filterrow($month),
			'month' => $monthnumber
		);
	
		$this->load->view('templates/header');
		$this->load->view('newlist', $data);

	}

























=======
>>>>>>> 084d25c9888b3f15be14f44055d22951f71fc155
	public function setup()
	{
		$this->load->view('templates/header');
		$this->load->view('setup');
	}
<<<<<<< HEAD
=======


>>>>>>> 058b14a142c799d6ff2efe51138ba477dd0a87b1
	public function account()
	{
		$this->load->view('templates/header');
		$this->load->view('account');
	}
	public function user()
	{
		$this->load->database();
		$this->load->model('model');
		$data = array('user' => $this->model->useraccount($_SESSION['id']));
		$this->load->view('templates/header');
		$this->load->view('user',$data);
	}
	public function add(){
		$this->load->database();
		$this->load->model('model');
		$firstname  =   $this->input->post('firstname');
		$middlename  = $this->input->post('middlename');
		$lastname  =  $this->input->post('lastname');
		$pin  =  $this->input->post('pin');
		$data   =  array(
			'firstname' => $firstname,
			'middlename' => $middlename,
			'lastname' => $lastname,
			'pin' => password_hash($pin,PASSWORD_DEFAULT),
		);
			
		$result   = $this->model->save_account($data);
		header('Location:  '  . base_url(''));
	}
	public function login(){
		$this->load->database();
		$this->load->model('model');
		$account  = $this->input->post('account');
		$pin  =  $this->input->post('pin');
		$valid = $this->model->check_valid($account,$pin);
		if ($valid==TRUE) {
			$result = $this->model->information($account);
			
			
			$newdata = array(
			        'logged_in' => TRUE,
			        'id' => $result[0]->id,
				);
			$this->session->set_userdata($newdata);
			header('location:'.base_url(). 'user'); 
		}
	}
<<<<<<< HEAD
	public function list()
	{
=======

	public function list()
	{

>>>>>>> 058b14a142c799d6ff2efe51138ba477dd0a87b1
		$this->load->database();
		$this->load->model('model');
		$test = $this->input->get('maturity');
		$name = $this->input->get('name');
		$pages=$this->input->get('submit-input');
		$error = isset($pages);
		$testerror = isset($test);
		if (!$error){
			$pages=1;
		};

		$offset=0;
		$y=1;
		while ($y!=$pages) {
			$offset=$offset+2;
			$y = $y+1;
		};
		$y=0;
		$limit=$offset+2;
		
		$data  = array('users' => $this->model->view_all_users($limit, $offset),
						'rowcount' => $this->model->rowcount());
<<<<<<< HEAD
		$this->load->view('templates/header');
		$this->load->view('tables', $data);
	}
=======

		$this->load->view('templates/header');
		$this->load->view('list', $data);
	}

>>>>>>> 058b14a142c799d6ff2efe51138ba477dd0a87b1
	
	public function entry() {
		$this->load->database();
		$this->load->model('model');
		$data = array(
				'branch' => $this->model->get_branch(),
				'part' => $this->model->get_part(),
		);		
		$this->load->view('templates/header');
		$this->load->view('blank', $data);
	}
	public function autocomplete() {
		$this->load->database();
		$this->load->model('model');
		$search = $this->input->get('term');
		$users = $this->model->search($search);
		$lastnames =  array();
		foreach ($users as $lastname) {
			array_push($lastnames, $lastname['lastname']);
		}
		
		
	
		$this->output
        			->set_content_type('application/json')
					->set_output(json_encode($lastnames));
	}


	public function autocomplete() {
		$this->load->database();
		$this->load->model('model');
		$search = $this->input->get('term');
		$users = $this->model->search($search);
		$lastnames =  array();
		foreach ($users as $lastname) {
			array_push($lastnames, $lastname['lastname']);
		}
		
		
	

		$this->output
        			->set_content_type('application/json')
					->set_output(json_encode($lastnames));
	}



	public function save(){
		$this->load->database();
		$this->load->model('model');
		
		$this->form_validation->set_rules('pnid','Pin ID','required');
		$this->form_validation->set_rules('branchid','Branch ID','required');
		$this->form_validation->set_rules('account','Account','required|alpha');
		$this->form_validation->set_rules('amount','Amount','required|decimal|greater_than_equal_to[0]');
		$this->form_validation->set_rules('maturity','maturity','required');
		$pnid =   $this->input->post('pnid');
		$branchid  = $this->input->post('branchid');
		$account  =  $this->input->post('account');
		$amount  =  $this->input->post('amount');
		$maturity  =  $this->input->post('maturity');
		$isValidated  =  $this->form_validation->run();
	
		if ($isValidated) {
			$data   =  array(
				'branch' => $branchid,
				'part' => $pnid,
				'amount' => $amount,
				'account' => $account,
				'maturity' => $maturity,
				'status' => "not paid"
			);
		
			$result   = $this->model->save($data);
			$response   =  array(
				'message' => 'User successfully saved!!'
			);
			$this->output
        			->set_content_type('application/json')
					->set_output(json_encode($response));
			
		} else {
			$this->form_validation->set_error_delimiters(null, null);
			$errors  =  array(
				'part' =>form_error('pnid'),
				'branch' => form_error('branchid'),
				'maturity' => form_error('maturity'),
				'account' => form_error('account'),
				'amount' => form_error('amount')		
			);
			
			$this->output->set_status_header(422);
				$this->output
        			->set_content_type('application/json')
					->set_output(json_encode($errors));
		}
	}
}
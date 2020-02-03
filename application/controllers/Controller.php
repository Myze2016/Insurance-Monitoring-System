<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('home');
	}



	public function setup()
	{
		$this->load->view('templates/header');
		$this->load->view('setup');
	}

	public function updatedate() 
	{

		$this->load->database();
		$this->load->model('model');
		$date = $this->input->get('changepicker');
		$id = $this->input->get('hiddenvalue');
		$this->model->updatedate($id, $date);
		$this->model->deletebyinsuranceid($id);
		header('location:'.base_url(). 'controller/filter'); 
	}


	

	public function redirect() {
		$this->load->database();
		$this->load->model('model');
		$id = $this->input->get('notification-id');
		$month= $this->input->get('month');

	
		$data  = array(
			'users' => $this->model->redirect($id),
			'rowcount' => 1,
			'notification' => $this->model->getnotifications($month),
			'month' => $month,
			'currentpage' => 1
		);
				$this->load->view('templates/header');
		$this->load->view('newlist', $data);
	
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

	public function account()
	{
		$this->load->view('templates/header');
		$this->load->view('account');
	}

	public function login(){
		$this->load->view('login');
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


	public function entry() {
		$this->load->database();
		$this->load->model('model');
		$data = array(
				'branch' => $this->model->get_branch(),
		);		
		$this->load->view('templates/header');
		$this->load->view('entry', $data);
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

	public function deletenotification(){
		$this->load->database();
		$this->load->model('model');
		$delete= $this->input->get('delete');
		$this->model->deletenotification($delete);
		header('Location:  '  . base_url('filter'));
	}

	public function filter() 
	{
		$this->load->database();
		$this->load->model('model');
		$month= $this->input->get('month');
		$this->run();


		$page = $this->input->get('submit-input');
		$type = $this->input->get('account-type');
		if (is_null($page)) {
			$currentpage = 1;
		} else {
			$currentpage = $page;
		}
		
		if (is_null($type)) {
			$type="For Renewal";
		} 
		
		
		

		$rowsperpage = 5;
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


		$data  = array(
			'users' => $this->model->filter($month,$offset,$limit,$type),
			'rowcount' => $this->model->filterrow($month,$type),
			'notification' => $this->model->getnotifications($month),
			'month' => $month,
			'currentpage' => $currentpage,
			'accounttype' => $type
		);
	
		$this->load->view('templates/header');
		$this->load->view('newlist', $data);

	}

	public function run(){
		$this->load->database();
		$this->load->model('model');
		$data = $this->model->maturity();
		foreach ($data as $row) {
			$maturity =  $row['maturity'];
			$date = date('Y-m-d', strtotime($maturity.'-7 days'));
			$currentdate = date("Y-m-d");
			$account = $row['id'];

			
		

			if ($date==$currentdate) {
				$isValidated = $this->model->checknotificationid($account);
				/*echo var_dump($isValidated);*/
				if ($isValidated) {
				$data   =  array(
				'insuranceid' => $row['id'],
				'maturity' => $row['maturity'],
				'maturitynotification' => $date,
				);
				$result   = $this->model->notification($data);
				
				}
				
			}
		}
	}


	public function list()
	{

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
		$this->load->view('templates/header');
		$this->load->view('tables', $data);
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
				'status' => "For Renewal"
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
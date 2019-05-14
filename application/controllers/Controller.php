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

	public function setup()
	{
		$this->load->view('templates/header');
		$this->load->view('setup');
	}

	public function list()
	{
		$this->load->view('templates/header');
		$this->load->view('list');
	}

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

}

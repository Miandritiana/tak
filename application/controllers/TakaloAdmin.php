<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TakaloAdmin extends CI_Controller 
{
	public function index()
	{
		$this->load->view('login');
	}

	public function inscri()
	{
		$this->load->view('inscription');
	}

	public function home()
	{		
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function homeAdmin()
	{		
		$this->load->view('header');
		$this->load->view('homeAdmin');
		$this->load->view('footer');
	}

	public function allObj()
	{		
		$this->load->view('header');

		$this->load->model('Model');
		$data['data'] = $this->Model->allObj();
		$this->load->view('allObj', $data);

		$this->load->view('footer');
	}

	//------------------trait login------------------------
	public function login()
	{
		$mail = $this->input->post("mail");
		$pass = $this->input->post("pass");

		$this->load->model('Model');
		if($this->Model->checkAdmin($mail,$pass))
		{
			redirect('takaloAdmin/homeAdmin');

		}else if ($this->Model->checkLogin($mail,$pass)) {

			$this->session->set_userdata('mail', $mail);
			redirect('takaloAdmin/home');
		}else {
			redirect('takaloAdmin/index');
		}

	}

	
	// $this->load->helper('url');
	// $this->load->view('login');


    // public function home()
	// {
	// 	$data = array();
	// 	$data['listeActor'] = $this->Model->listeActor();
	// 	$data['mail'] = $this->session->userdata('mail');
    //     $data['content'] = 'home';
	// 	$this->load->view('home',$data);
	// }

	// public function deconexion()
	// {
	// 	$this->session->sess_destroy();
	// 	redirect('welcome/index');
	// }

}


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

		$nom = $this->input->post("nom");
		$mail = $this->input->post("mail");
		$pass = $this->input->post("pass");

		$this->load->model('Model');
		if($this->Model->inscription($nom, $mail, $pass))
		{
			redirect('takaloAdmin/index');
		}
	}

	public function home()
	{		
		$this->load->view('header');

		$this->load->model('Model');
		$data['data'] = $this->Model->allObjParUser($_SESSION['idUser']['id']);
		$this->load->view('home', $data);

		$this->load->view('footer');
	}

	public function homeAdmin()
	{		
		$this->load->view('headerAdmin');

		$this->load->model('Model');
		$data['data'] = $this->Model->allObj();
		
		$this->load->view('homeAdmin', $data);
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

			$this->load->model('Model');
			$this->session->set_userdata('idUser', $this->Model->checkIdUser($mail));
			redirect('takaloAdmin/home');
		}else {
			redirect('takaloAdmin/index');
		}

	}

	public function change()
	{
		$ObjSet = $this->input->get("idObj");
		$data['objSet'] = $ObjSet;

		$this->load->model('Model');
		$data['data'] = $this->Model->allObjParUser($_SESSION['idUser']['id']);
		$this->load->view('exchange', $data);

	}

	public function deconn()
	{
		$this->session->sess_destroy();
		redirect('takaloAdmin');
	}

}


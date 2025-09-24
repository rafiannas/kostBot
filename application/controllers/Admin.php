<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

 	public function __construct()
    {
        parent::__construct();
        $this->load->database(); 
    }

	public function index()
	{
		$data['page'] = "dashboard"; 

		$this->load->view('template/header', $data);
		$this->load->view('dashboard');
		$this->load->view('template/footer');

	}

	public function booking()
	{
		$data['page'] = "booking"; 

		$query = $this->db->get('booking');
		$data['booking'] = $query->result(); 
		

		$this->load->view('template/header', $data);
		$this->load->view('booking');
		$this->load->view('template/footer');

	}
}

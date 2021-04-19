<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Akun extends CI_Controller {

	
	public function index()
	{
		$data['title'] = "Data Akun";
		$this->load->view('Layout/Header', $data);
		$this->load->view('Layout/Sidebar', $data);
		$this->load->view('Data_Akun/Index', $data);
		$this->load->view('Layout/Footer', $data);
	}
}

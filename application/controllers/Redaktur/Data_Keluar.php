<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Keluar extends AUTH_Controller {

	
	public function index()
	{
		$data['title'] = "Data Keluar";
		$this->load->view('Layout/Header', $data);
		$this->load->view('Layout/Sidebar', $data);
		$this->load->view('Data_Keluar/Index', $data);
		$this->load->view('Layout/Footer', $data);
	}
}

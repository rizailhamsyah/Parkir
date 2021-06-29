<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Masuk extends AUTH_Controller {

	
	public function index()
	{
		$data['title'] = "Data Masuk";
		$this->load->view('Layout/Header', $data);
		$this->load->view('Layout/Sidebar', $data);
		$this->load->view('Data_Masuk/Index', $data);
		$this->load->view('Layout/Footer', $data);
	}
}

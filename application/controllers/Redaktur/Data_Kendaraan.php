<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Kendaraan extends CI_Controller {

	
	public function index()
	{
		$data['title'] = "Data Kendaraan";
		$this->load->view('Layout/Header', $data);
		$this->load->view('Layout/Sidebar', $data);
		$this->load->view('Data_Kendaraan/Index', $data);
		$this->load->view('Layout/Footer', $data);
	}
}

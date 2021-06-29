<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends AUTH_Controller {

	
	public function index()
	{
		$data['title'] = "Dashboard";
		$this->load->view('Layout/Header', $data);
		$this->load->view('Layout/Sidebar', $data);
		$this->load->view('Dashboard/Index', $data);
		$this->load->view('Layout/Footer', $data);
	}
}

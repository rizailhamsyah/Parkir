<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AUTH_Controller extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_member');
		if (isset($this->session->userdata('userdata')->email)){
			$this->userdata = $this->M_member->select('', $this->session->userdata('userdata')->email);
		}else{
			$this->userdata = $this->M_member->select('', $this->session->userdata('cookie'));
        }
        
		$this->session->set_flashdata('segment', explode('/', $this->uri->uri_string()));

		if ($this->session->userdata('status') == '') {
			redirect('Auth');
		}
	}

	public function updateProfil() {
		if ($this->userdata != '') {
			$data = $this->M_member->select($this->userdata->ID);

			$this->session->set_userdata('userdata', $data);
			$this->userdata = $this->M_member->select($this->session->userdata('userdata')->ID);
		}
	}
}

/* End of file MY_Auth.php */
/* Location: ./application/core/MY_Auth.php */
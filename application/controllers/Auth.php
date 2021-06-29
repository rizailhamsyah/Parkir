<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('M_member');
    }

	public function index()
	{
		$data['title'] = "Login";
		$this->load->view('Auth/Index', $data);
	}

    public function out()
    {
        $this->session->sess_destroy();
        // get_cookie('uFapFap');
        redirect('Login');
    }

    public function sign()
		{
			$username = trim($_POST['uname']);
            $password = trim($_POST['passwd']);
        

			$data = $this->M_member->auth($username, $password);
            
			if ($data == false) {
				$this->session->set_flashdata("msg", $this->alert->error_login("<br/>", "Please check your username or password. <br/> . Contact Admin ".$this->config->item('instance_name')));
				redirect('Auth');
            } 
            else {
				date_default_timezone_set('Asia/Jakarta');
				$session = [
					'userdata' => $data,
					'status' => "Loged in"
				];
				
                // $cookie = setcookie('uFapFap', sha1($username.$password.time()), time() + 604800);
                // $arr = array("saveCookies" => $cookie);
				$this->session->set_userdata('file_manager',true);
				$this->session->set_userdata($session);
				// $this->M_admin->update_cookie($cookie); 
				redirect('Dashboard');
			}

            
		}
}

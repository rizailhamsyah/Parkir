<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Kendaraan extends AUTH_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('M_kendaraan');
    }
	public function index()
	{
		$data = [
            'title' => "Data Kendaraan",
            'kendaraan' => $this->M_kendaraan->select()->result()
        ];
		$this->load->view('Layout/Header', $data);
		$this->load->view('Layout/Sidebar', $data);
		$this->load->view('Data_Kendaraan/Index', $data);
		$this->load->view('Layout/Footer', $data);
	}

    public function add(){
        if($this->input->post()){
            $this->M_kendaraan->add($this->input->post());
        } else {
            echo "Access Not Allowed";
        }
    }

    // public function reset(){
    //     $this->M_member->reset($this->input->post());
    // }

    // public function delete(){
    //     $this->M_member->delete($this->input->post());
    // }

    // public function getAkun(){
    //     $id = $this->input->post('id');
    //     $data = $this->M_member->select($id)->row();

    //     echo json_encode($data);
    // }

    // public function edit(){
    //     $this->M_member->edit($this->input->post());
    // }
}

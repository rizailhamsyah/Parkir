<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_member extends CI_Model {

	public function Auth($user, $pass){
        $this->db->select('parkir_users.*');
        $this->db->from('parkir_users');
        $this->db->where('parkir_users.email', $user);
        $this->db->where('parkir_users.password', sha1(md5($pass)));
        $this->db->where('parkir_users.Active = 1');

        $data = $this->db->get();

		if ($data->num_rows() == 1) {
			return $data->row();
		} else {
			return false;
		}
	}

	public function select($ID = '', $Email = '', $Active = '', $Role_Id = '', $Perusahaan_id = ''){
		if ($ID != ''){
			$this->db->where('parkir_users.id', $ID);
		}
		if ($Email != ''){
			$this->db->where('parkir_users.email', $Email);
		}
		if ($Active != ''){
			$this->db->where('parkir_users.Active', $Active);
		}
		if ($Role_Id != ''){
			$this->db->where('parkir_users.RoleID', $Role_Id);
		}
        if ($Perusahaan_id != ''){
			$this->db->where('parkir_users.perusahaan_id', $Perusahaan_id);
		}

				$this->db->where('parkir_users.perusahaan_id = parkir_agency.perusahaan_id');
				$this->db->order_by('name', 'ASC');
				$this->db->from('parkir_users');
                $this->db->from('parkir_agency');
		$response = $this->db->get();
		
		return $response;
	}

    public function save($array){
        $data = [
            'name'          => $array['nama'],
            'email'         => $array['email'],
            'password'      => sha1(md5($array['password'])),
            'perusahaan_id' => $array['perusahaan'],
            'telp'          => $array['telp'],
            'RoleID'        => $array['role'],
            'Active'        => 1
        ];

        return $data;
    }

    public function reset($id){
        $data = [
            'password'  => sha1(md5('123456789'))
        ];
        $nama = $this->select($id['id'])->row()->name;
        $this->db->update('parkir_users', $data, ['id' => $id['id']]);
        $this->session->set_flashdata("msg", $this->alert->success("", "Password ". $nama . " Berhasil Di Reset"));
        redirect('Data_Akun');
    }

    public function delete($id){
        $nama = $this->select($id['id'])->row()->name;
        $this->db->delete('parkir_users', ['id' => $id['id']]);
        $this->session->set_flashdata("msg", $this->alert->success("", "Data ". $nama . " Berhasil Di Hapus"));
        redirect('Data_Akun');
    }

    public function add($array){
        $data = $this->save($array);
        $this->db->insert('parkir_users', $data);
        $this->session->set_flashdata("msg", $this->alert->success("", "Tambah User Selesai"));
        redirect('Data_Akun');
    }

    public function edit($array){
        $data = $this->save($array);
        $this->db->update('parkir_users', $data, ['id' => $array['id']]);
        $this->session->set_flashdata("msg", $this->alert->success("", "Edit User Selesai"));
        redirect('Data_Akun');
    }
}
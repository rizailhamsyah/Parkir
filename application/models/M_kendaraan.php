<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_kendaraan extends CI_Model {

    public function select($id = '', $polisi = '', $nik = ''){
        if ($id != ''){
            $this->db->where('id', $id);
        }
        if ($polisi != ''){
            $this->db->where('no_polisi', $polisi);
        }
        if ($nik != ''){
            $this->db->where('nik_pemilik', $nik);
        }
        $this->db->order_by('nama_pemilik', 'ASC');
        return $this->db->get('parkir_transportation');
    }

    public function save($array){
        $data = [
            'no_polisi'         => $array['nopol'],
            'nik_pemilik'       => $array['nik'],
            'nama_pemilik'      => $array['nama'],
            'jenis_kendaraan'   => $array['jenis'],
            'id_perusahaan'      => $array['perusahaan']
        ];

        return $data;
    }

    public function add($array){
        $data = $this->save($array);
        $this->db->insert('parkir_transportation', $data);
        $this->session->set_flashdata("msg", $this->alert->success("", "Tambah Kendaraan Selesai"));
        redirect('Data_Kendaraan');
    }
}
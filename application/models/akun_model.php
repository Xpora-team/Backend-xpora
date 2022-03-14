<?php
defined('BASEPATH') or exit('No direct script access allowed');

class akun_model extends CI_ModeL
{
    var $table = 'akun';
    public function __construct()
    {
        $this->load->database();
    }

    public function all_data()
    {
        $this->db->from($this->table);
        $this->db->order_by('nik', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    public function save($data)
    {
        $this->db->insert('data_diri', $data);
        return $this->db->insert_id();
    }

    public function savee($dataa)
    {
        $this->db->insert('data_usaha', $dataa);
        return $this->db->insert_id();
    }

    public function saveee($dataaa)
    {
        $this->db->insert('akun', $dataaa);
        return $this->db->insert_id();
    }
}

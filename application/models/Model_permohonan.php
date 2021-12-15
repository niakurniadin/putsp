<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_permohonan extends CI_Model
{
  public function get_all_data()
  {
    $this->db->select('*');
    $this->db->from('tb_project');
    $this->db->order_by('id','desc');
    return $this->db->get()->result();
  }

  public function ajukan($data)
  {
    $this->db->insert('tb_project', $data);
  }

  public function confirm($noreg)
  {
    $this->db->select('*');
    $this->db->from('tb_project');
    $this->db->where('noreg',$noreg);
    return $this->db->get()->row();
  }
  
  public function status($noreg)
  {
    $this->db->select('*');
    $this->db->from('tb_project');
    $this->db->where('noreg',$noreg);
    return $this->db->get()->row();
  }
  
}
<?php 
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class Transmodel extends CI_Model
{
	public function Store($data)
	{		
 		$this->db->insert('tb_request',$data);
		return $this->db->affected_rows(); 
	}
	public function Update($id, $data)
	{
		$this->db->where('id_pelanggan', $id)->update('tb_request', $data);

		return $this->db->affected_rows();
	}
	public function Find($id)
	{
		return $this->db->where('id_pelanggan', $id)
			->get('tb_request')
			->row();
	}
	public function Destroy($id)
	{
		$this->db->where('id_pelanggan', $id)->delete('tb_request');
		return $this->db->affected_rows();
	}
}
 ?>

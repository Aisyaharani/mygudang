<?php 
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class Usermodel extends CI_Model
{
	public function Store($data)
	{		
 		$this->db->insert('tb_supplier',$data);
		return $this->db->affected_rows(); 
	}
	public function Find($id)
	{
		return $this->db->where('id_suplier', $id)
			->get('tb_supplier')
			->row();
	}
	public function Update($id, $data)
	{
		$this->db->where('id_suplier', $id)->update('tb_supplier', $data);

		return $this->db->affected_rows();
	}
	public function Destroy($id)
	{
		$this->db->where('id_suplier', $id)->delete('tb_supplier');
		return $this->db->affected_rows();
	}public function ChangeStatus($data)
	{
		$this->db->where('id',$data['id'])
			->update('tb_user', array('role' => $data['role'],));

			return $his->db->affected_rows();
	}
}
 ?>

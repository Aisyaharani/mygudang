<?php 
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class DataModel extends CI_Model
{
	public function Store($data)
	{		
 		$this->db->insert('tb_barang',$data);
		return $this->db->affected_rows(); 
	}
	public function Find($id)
	{
		return $this->db->where('id_barang', $id)
			->get('tb_barang')
			->row();
	}
	public function Update($id, $data)
	{
		$this->db->where('id_barang', $id)->update('tb_barang', $data);

		return $this->db->affected_rows();
	}
	public function Destroy($id)
	{
		$this->db->where('id_barang', $id)->delete('tb_barang');
		return $this->db->affected_rows();
	}
}
 ?>

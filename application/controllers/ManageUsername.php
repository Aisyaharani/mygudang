<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class Manageusername extends CI_Controller
{
	public function Index()
	{
		$data['Managename'] = $this->db->get('tb_user')->result();
		$email = $this->session->userdata('email');
		$data['role'] = $this->db->get_where('tb_user', ['email' => $email])->row_array();

		$this->load->view('auth_templates/admin_header');
		$this->load->view('Manageusername/index', $data);
		$this->load->view('auth_templates/admin_footer');
	}
	public function Delete($id = NULL)
	{
		if ($id == NULL) {
			redirect('Manageusername');
		}

		$this->db->where('id', $id)->delete('tb_user');

		$this->session->set_flashdata(array(
			'type' => 'success',
			'msg' => 'Data Berhasil Dihapus!'
		));

		redirect('Manageusername');
	}
	public function Create()
	{
		$this->load->view('auth_templates/admin_header');
		$this->load->view('Manageusername/create');
		$this->load->view('auth_templates/admin_footer');
	}
	public function Lihatdata()
	{
		if (isset($_POST)) {
			$nama = $_POST['name'];
			$email = $_POST['email'];
			$password1 = $_POST['password1'];
			$role = '2';
		}
		$data = [
			'name' => htmlspecialchars($this->input->post('name', true)),
			'email' => htmlspecialchars($this->input->post('email', true)),
			'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
			'role' => $role,
		];
		$this->db->insert('tb_user', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please Login!</div>');
		redirect('Manageusername', 'refresh');
	}
	public function ganti($id = NULL)
	{
		$data = $this->db->get_where('tb_user', ['id' => $id])->row_array();

		if ($data['role'] == '1') {
			$this->db->set('role', '2')->where('id', $id)->update('tb_user');
		} else {
			$this->db->set('role', '1')->where('id', $id)->update('tb_user');
		}

		$this->session->set_flashdata(array(
			'type' => 'success',
			'msg' => "{$data['id']}{$status}!",
		));

		redirect('Manageusername');
	}
}

<?php 
defined('BASEPATH') or exit('no direct script access allowed');

/**
 * 
 */
class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email','trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password','trim|required');

		if ($this->form_validation->run()== false) {
			$data['title'] = 'myGudang Login';
			$this->load->view('auth_templates/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('auth_templates/auth_footer');
		}else{
			$this->_login();
		}

	} 
	private function _login()
	{
		
		$email = $this->input->get('email');
		$password = $this->input->get('password');
		$user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

		if ($user) {
			if (password_verify($password, $user['password'])) {
				$data = [
					'email' => $user['email'],
					'role'=>$user['role'],
				];
				$this->session->set_userdata($data);
				redirect('home');
			} else {
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Wrong Password!</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdisk('message','<div class="alert alert-danger" role="alert">Email is not registered</div>');
			redirect('auth');
		}
		
	}
	public function registration()
	{
		$this->form_validation->set_rules('name','Name','trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[tb_user.email]', ['is_unique' => 'This email has already registered!']);
		$this->form_validation->set_rules('password1','Password','trim|required|min_length[3]|matches[password2]',['matches'=> 'Password not match!','min_length' => 'Password too short!']);
		$this->form_validation->set_rules('password2','Password','trim|required|matches[password1]');
	
	if ($this->form_validation->run() == false) {
		$data['title'] = '';
			$this->load->view('auth_templates/auth_header',$data);
			$this->load->view('auth/registration');
			$this->load->view('auth_templates/auth_footer');
		} else {
			$this->simpanAkun();
		}
	}

	public function simpanAkun()
	{
		if (isset($_POST)) {
			$nama = $_POST['name'];
			$email = $_POST['email'];
			$password1 = $_POST['password1'];
			$role = '1';
		}
		$data = [
					'name' => htmlspecialchars($this->input->post('name',true)),
					'email' => htmlspecialchars($this->input->post('email',true)),
					'password' =>password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
			'role' => $role,
				];
		$this->db->insert('tb_user', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please Login!</div>');
				redirect('auth','refresh');
	}
	 public function ambilData()
	{
		$email = $this->input->get('email');
		$password = $this->input->get('password');
		$user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

		if (password_verify($password, $user['password'])) {
				$data = [
					'email' => $user['email'],
				];
				$this->session->set_userdata($data);
				redirect('Managedata');
			}else{
				redirect('auth');
			}
	}
	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->set_flashdata('message', '<div clas="alert alert-succes" role="alert">You have been logged out!<?div>');
		redirect('auth');
	}
}

<?php 
defined('BASEPATH') or exit('No direct script access allowed');
		
/**
 * 
 */
class ManageUser extends CI_Controller
{
	public function index()
	{
		$data['ManageUser'] = $this->db->get('tb_supplier')->result();
		$email = $this->session->userdata('email');
        $data['role'] = $this->db->get_where('tb_user', ['email' => $email])->row_array();

		$this->load->view('auth_templates/admin_header');
		$this->load->view('Manageuser/index', $data);
		$this->load->view('auth_templates/admin_footer');
	}

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Usermodel', 'ManageUser');
		$this->form_validation->set_error_delimiters('<small class="text-danger"','</small> ');
	
	}
	public function Create()
	{
			$this->load->view('auth_templates/admin_header');
			$this->load->view('Manageuser/create');
			$this->load->view('auth_templates/admin_footer');
	}
	public function Lihatdata()
	{
		
		if (isset($_POST)) {
			$supplier = $_POST['supplier'];
			$alamat = $_POST['alamat'];
			$kota = $_POST['kota'];
			$email = $_POST['email'];
			$nohp = $_POST['nohp'];		
		}
		$data = [
					'supplier' => $this->input->post('supplier', TRUE),
					'alamat' => $this->input->post('alamat', TRUE),
					'kota' => $this->input->post('kota', TRUE),
					'email' => $this->input->post('email', TRUE),
					'nohp' => $this->input->post('nohp', TRUE),
				];
		$this->db->insert('tb_supplier', $data);
		
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please Login!</div>');
				redirect('Manageuser','refresh');
	}
	public function Edit($id = NULL)
	{
		if ($id == NULL) {
			redirect('Manageuser');
		}
		$ManageUser = $this->ManageUser->Find($id);

		if ($ManageUser) {
			$config = array(
			array(
				'field' => 'supplier',
				'label' => 'supplier Barang',
				'rules' => 'trim|required|max_length[50]',
			),array(
				'field' => 'alamat',
				'label' => 'alamat',
				'rules' => 'trim|required|max_length[20]',
			),array(
				'field' => 'kota',
				'label' => 'kota',
				'rules' => 'trim|required|max_length[20]',
			),array(
				'field' => 'email',
				'label' => 'email',
				'rules' => 'trim|required|max_length[20]',
			),array(
				'field' => 'nohp',
				'label' => 'nohp',
				'rules' => 'trim|required|max_length[20]',
			),
		  );
			$this->form_validation->set_rules($config);

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('auth_templates/admin_header');
			$this->load->view('Manageuser/edit',array(
				'data' => $ManageUser ));
			$this->load->view('auth_templates/admin_footer');
			}else{
				$data = array(
					'supplier' => $this->input->post('supplier', TRUE),
					'alamat' => $this->input->post('alamat', TRUE),
					'kota' => $this->input->post('kota', TRUE),
					'email' => $this->input->post('email', TRUE),
					'nohp' => $this->input->post('nohp', TRUE),
					);

				$this->ManageUser->update($id, $data);


				$this->session->set_flashdata(array(
					'type' => 'success',
					'msg' => 'Data Maskapi berhasil di update!'));

			redirect('Manageuser');
		}
		}else{
			$this->session->set_flashdata(array(
				'type' => 'success',
				'msg' => 'Data maskapai tidak dapat ditemuakan!'));

			redirect('Manageuser');
		}
	}
	public function Ambil($id)
	{
		if (isset($_POST)) {
			$supplier = $_POST['supplier'];
			$alamat = $_POST['alamat'];
			$kota = $_POST['kota'];
			$email = $_POST['email'];
			$nohp = $_POST['nohp'];	
		}

			$data = array(
					'supplier' => $this->input->post('supplier', TRUE),
					'alamat' => $this->input->post('alamat', TRUE),
					'kota' => $this->input->post('kota', TRUE),
					'email' => $this->input->post('email', TRUE),
					'nohp' => $this->input->post('nohp', TRUE),
					);

				$this->ManageUser->update($id, $data);

				$this->session->set_flashdata(array(
					'type' => 'success',
					'msg' => 'Data Maskapi berhasil di update!'));

			redirect('Manageuser');
	}
	public function Delete($id=NULL)
	{
		if ($id == NULL) {
			redirect('Manageuser');
		}

		$this->ManageUser->Destroy($id);

		$this->session->set_flashdata(array(
			'type' => 'success',
			'msg' => 'Data Pasien Berhasil Dihapus!'));

		redirect('Manageuser');
	}
	
}
	
 ?>
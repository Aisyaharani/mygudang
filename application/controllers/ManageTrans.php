<?php 
defined('BASEPATH') or exit('No direct script access allowed');
		
/**
 * 
 */
class ManageTrans extends CI_Controller
{
	public function Index()
	{

		$data['ManageTrans'] = $this->db->get('tb_request')->result();
		$email = $this->session->userdata('email');
        $data['role'] = $this->db->get_where('tb_user', ['email' => $email])->row_array();

		$this->load->view('auth_templates/admin_header');
		$this->load->view('Managetrans/index', $data);
		$this->load->view('auth_templates/admin_footer');

	}
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Transmodel', 'ManageTrans');
		$this->form_validation->set_error_delimiters('<small class="text-danger"','</small> ');
		isRole();
	}
	public function Create()
	{
		
		$this->load->view('auth_templates/admin_header');
			$this->load->view('Managetrans/create');
			$this->load->view('auth_templates/admin_footer');
	}
	public function Lihatdata()
	{
		if (isset($_POST)) {
			$pelanggan = $_POST['pelanggan'];
			$alamat = $_POST['alamat'];
			$email = $_POST['email'];
			$produk = $_POST['produk'];
			$permintaan = $_POST['permintaan'];
			$satuan = $_POST['satuan'];			
		}
		$data = [
					'pelanggan' => $this->input->post('pelanggan', TRUE),
					'alamat' => $this->input->post('alamat', TRUE),
					'email' => $this->input->post('email', TRUE),
					'produk' => $this->input->post('produk', TRUE),
					'permintaan' => $this->input->post('permintaan', TRUE),
					'satuan' => $this->input->post('satuan', TRUE),
				];
		$this->db->insert('tb_request',$data);
		// 		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please Login!</div>');
				redirect('Managetrans','refresh');
	}
	public function Edit($id = NULL)
	{
		if ($id == NULL) {
			redirect('Managetrans');
		}
		$ManageTrans = $this->ManageTrans->Find($id);

		if ($ManageTrans) {
			$config = array(
			array(
				'field' => 'pelanggan',
				'label' => 'pelanggan',
				'rules' => 'trim|required|max_length[50]',
			),array(
				'field' => 'alamat',
				'label' => 'alamat',
				'rules' => 'trim|required|max_length[20]',
			),array(
				'field' => 'email',
				'label' => 'email',
				'rules' => 'trim|required|max_length[20]',
			),array(
				'field' => 'produk',
				'label' => 'produk',
				'rules' => 'trim|required|max_length[20]',
			),array(
				'field' => 'permintaan',
				'label' => 'permintaan',
				'rules' => 'trim|required|max_length[20]',
			),array(
				'field' => 'satuan',
				'label' => 'satuan',
				'rules' => 'trim|required|max_length[20]',
			),
		  );
			$this->form_validation->set_rules($config);

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('auth_templates/admin_header');
			$this->load->view('Managetrans/edit',array(
				'data' => $ManageTrans ));
			$this->load->view('auth_templates/admin_footer');
			}else{
				$data = array(
					'pelanggan' => $this->input->post('pelanggan', TRUE),
					'alamat' => $this->input->post('alamat', TRUE),
					'email' => $this->input->post('email', TRUE),
					'produk' => $this->input->post('produk', TRUE),
					'permintaan' => $this->input->post('permintaan', TRUE),
					'satuan' => $this->input->post('satuan', TRUE),
					);

				$this->ManageTrans->update($id, $data);


				$this->session->set_flashdata(array(
					'type' => 'success',
					'msg' => 'Data Maskapi berhasil di update!'));

			redirect('Managetrans');
		}
		}else{
			$this->session->set_flashdata(array(
				'type' => 'success',
				'msg' => 'Data maskapai tidak dapat ditemuakan!'));

			redirect('Managetrans');
		}
	}
	public function Ambil($id)
	{
		if (isset($_POST)) {
			$pelanggan = $_POST['pelanggan'];
			$alamat = $_POST['alamat'];
			$email = $_POST['email'];
			$produk = $_POST['produk'];
			$permintaan = $_POST['permintaan'];
			$satuan = $_POST['satuan'];	
		}

			$data = array(
					'pelanggan' => $this->input->post('pelanggan', TRUE),
					'alamat' => $this->input->post('alamat', TRUE),
					'email' => $this->input->post('email', TRUE),
					'produk' => $this->input->post('produk', TRUE),
					'permintaan' => $this->input->post('permintaan', TRUE),
					'satuan' => $this->input->post('satuan', TRUE),
					);

				$this->ManageTrans->update($id, $data);

				$this->session->set_flashdata(array(
					'type' => 'success',
					'msg' => 'Data Maskapi berhasil di update!'));

			redirect('Managetrans');
	}
	public function Delete($id = NULL)
	{
		if ($id == NULL) {
			redirect('Managetrans');
		}

		$this->ManageTrans->Destroy($id);

		$this->session->set_flashdata(array(
			'type' => 'success',
			'msg' => 'Data Pasien Berhasil Dihapus!'));

		redirect('Managetrans');
	}
}
	
 ?>
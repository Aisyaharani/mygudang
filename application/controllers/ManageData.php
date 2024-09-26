<?php 
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class ManageData extends CI_Controller
{
	public function index()
	{
		$data['ManageData'] = $this->db->get('tb_barang')->result();
		$email = $this->session->userdata('email');
        $data['role'] = $this->db->get_where('tb_user', ['email' => $email])->row_array();

		$this->load->view('auth_templates/admin_header');
		$this->load->view('Managedata/index', $data);
		$this->load->view('auth_templates/admin_footer');
	}

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Datamodel', 'ManageData');
		$this->form_validation->set_error_delimiters('<small class="text-danger"','</small> ');
	
	}
	public function Create()
	{
		$config = array(
			array(
				'field' => 'supllier',
				'label' => 'Nama',
				'rules' => 'trim|required|max_length[50]',
			),array(
				'field' => 'nama',
				'label' => 'Nama Barang',
				'rules' => 'trim|required|max_length[50]',
			),array(
				'field' => 'stok',
				'label' => 'Stok',
				'rules' => 'trim|required|max_length[20]',
			),array(
				'field' => 'harga',
				'label' => 'Harga',
				'rules' => 'trim|required|max_length[20]',
			),array(
				'field' => 'stok',
				'label' => 'stok',
				'rules' => 'trim|required|max_length[20]',
			),array(
				'field' => 'satuan',
				'label' => 'satuan',
				'rules' => 'trim|required|max_length[20]',
			),
		);
		$this->form_validation->set_rules($config);

		if ($this->form_validation->run()== FALSE) {
			$this->load->view('auth_templates/admin_header');
			$this->load->view('Managedata/create');
			$this->load->view('auth_templates/admin_footer');
		}else{
			$data = array(
					'supplier' => $this->input->post('supplier', TRUE),
					'nama' => $this->input->post('nama', TRUE),
					'harga' => $this->input->post('harga', TRUE),
					'stok' => $this->input->post('stok', TRUE),
					'satuan' => $this->input->post('satuan', TRUE),
					);
				$this->ManageData->store($data);

				$this->session->set_flashdata(array(
					'type' => 'success',
					'msg' => 'Data Penerbangan Berhasil Ditambah'
				));

			
			redirect('Managedata');
		}
	}
	public function Lihatdata()
	{
		if (isset($_POST)) {
			$supplier = $_POST['supplier'];
			$nama = $_POST['nama'];
			$harga = $_POST['harga'];
			$stok = $_POST['stok'];
			$satuan = $_POST['satuan'];
		}
		$data = [	'supplier' => $this->input->post('supplier', TRUE),
					'nama' => $this->input->post('nama', TRUE),
					'harga' => $this->input->post('harga', TRUE),
					'stok' => $this->input->post('stok', TRUE),
					'satuan' => $this->input->post('satuan', TRUE),
				];
		$this->db->insert('tb_barang', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please Login!</div>');
				redirect('Managedata','refresh');
	}
	public function Edit($id = NULL)
	{
		if ($id == NULL) {
			redirect('Managedata');
		}
		$managedata = $this->ManageData->Find($id);

		if ($managedata) {
			$config = array(
			array(
				'field' => 'supllier',
				'label' => 'Nama',
				'rules' => 'trim|required|max_length[50]',
			),array(
				'field' => 'nama',
				'label' => 'Nama Barang',
				'rules' => 'trim|required|max_length[50]',
			),array(
				'field' => 'stok',
				'label' => 'Stok',
				'rules' => 'trim|required|max_length[20]',
			),array(
				'field' => 'harga',
				'label' => 'Harga',
				'rules' => 'trim|required|max_length[20]',
			),array(
				'field' => 'stok',
				'label' => 'stok',
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
			$this->load->view('managedata/edit',array(
				'data' => $managedata ));
			$this->load->view('auth_templates/admin_footer');
			}else{
				$data = array(
					'supplier' => $this->input->post('supplier', TRUE),
					'nama' => $this->input->post('nama', TRUE),
					'harga' => $this->input->post('harga', TRUE),
					'stok' => $this->input->post('stok', TRUE),
					'satuan' => $this->input->post('satuan', TRUE),
					);

				$this->ManageData->update($id, $data);


				$this->session->set_flashdata(array(
					'type' => 'success',
					'msg' => 'Data Maskapi berhasil di update!'));

			redirect('Managedata');
		}
		}else{
			$this->session->set_flashdata(array(
				'type' => 'success',
				'msg' => 'Data maskapai tidak dapat ditemuakan!'));

			redirect('Managedata');
		}
	}
	public function Ambil($id)
	{
		if (isset($_POST)) {
			$supplier = $_POST['supplier'];
			$nama = $_POST['nama'];
			$harga = $_POST['harga'];
			$stok = $_POST['stok'];
			$satuan = $_POST['satuan'];
			$harga = $_POST['harga'];
		}

			$data = array(
					'supplier' => $this->input->post('supplier', TRUE),
					'nama' => $this->input->post('nama', TRUE),
					'harga' => $this->input->post('harga', TRUE),
					'stok' => $this->input->post('stok', TRUE),
					'satuan' => $this->input->post('satuan', TRUE),
					);

				$this->ManageData->update($id, $data);

				$this->session->set_flashdata(array(
					'type' => 'success',
					'msg' => 'Data Maskapi berhasil di update!'));

			redirect('Managedata');
	}
	public function Delete($id=NULL)
	{
		if ($id == NULL) {
			redirect('Managedata');
		}

		$this->ManageData->Destroy($id);

		$this->session->set_flashdata(array(
			'type' => 'success',
			'msg' => 'Data Pasien Berhasil Dihapus!'));

		redirect('Managedata');
	}
}

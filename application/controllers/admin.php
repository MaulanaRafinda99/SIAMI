<?php
class admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('level') != 1) {
			redirect('auth');
		}
		$this->load->model('model_log');
		$this->load->model('model_admin');
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->session->unset_userdata('id_siklus');
		$this->session->unset_userdata('id_instansi');
		if ($this->input->post('submit')) {
			$data['id_siklus'] = $this->input->post('id_siklus');
			$data['id_instansi'] = $this->input->post('id_instansi');
			$this->session->set_userdata('id_siklus', $data['id_siklus']);
			$this->session->set_userdata('id_instansi', $data['id_instansi']);
		} else {
			$data['id_siklus'] = $this->session->userdata('id_siklus');
			$data['id_instansi'] = $this->session->userdata('id_instansi');
		}


		// $data['jumlah_data'] = $this->model_admin->datatable_2a($data['id_tahun'], $data['id_prodi']);
		// $data['jumlah_data_MA'] = $this->model_admin->datatable_2a_MA($data['id_tahun'], $data['id_prodi']);
		// $data['jumlah_dosen'] = $this->model_admin->datatable_2a_Dosen($data['id_tahun'], $data['id_prodi']);
		// $data['jumlah_data_MB'] = $this->model_admin->datatable_2a_MB($data['id_tahun'], $data['id_prodi']);
		// $data['table8a_rata'] = $this->model_admin->table8a_rata($data['id_tahun'], $data['id_prodi']);

		// $data['pilih_data'] = $this->model_admin->pilih_data($data['id_tahun'], $data['id_prodi']);
		// $data['tahunsekarang_2b'] = $this->model_admin->tahunsekarang_2b($data['id_tahun']);
		// $data['dropdown'] = $this->model_log->dropdown()->result();
		// $data['id_akses'] = $this->session->userdata('id_user');
		// $data['instansi'] = $this->model_log->instansi($data['id_akses']);
		// $data['fakultas'] = $this->model_log->fakultas($data['id_akses']);
		// //table_8b
		// $data['view_table8b_jumlah_NI'] = $this->model_admin->gettable8b_jumlah_NI($data['id_tahun'], $data['id_prodi']);
		// $data['view_table8b_jumlah_NN'] = $this->model_admin->gettable8b_jumlah_NN($data['id_tahun'], $data['id_prodi']);
		// $data['view_table8b_jumlah_NW'] = $this->model_admin->gettable8b_jumlah_NW($data['id_tahun'], $data['id_prodi']);
		// //table_8c
		// $data['view_table8c_jml'] = $this->model_admin->gettable8c_jml_rata($data['id_tahun'], $data['id_prodi']);
		// $data['view_table8c_jml_ts3'] = $this->model_admin->gettable8c_jml_ts3($data['id_tahun'], $data['id_prodi']);
		// $data['view_table8c_jml_ts3_ts6'] = $this->model_admin->gettable8c_jml_ts3_ts6($data['id_tahun'], $data['id_prodi']);
		// //table_8d1
		// $data['jumlah_data_8d1'] = $this->model_admin->datatable_8d1($data['id_tahun'], $data['id_prodi']);
		// //table_8d2
		// $data['jumlah_data_8d2'] = $this->model_admin->datatable_8d2($data['id_tahun'], $data['id_prodi']);
		// //table_8e1
		// $data['jumlah_data_8e'] = $this->model_admin->datatable_8e1($data['id_tahun'], $data['id_prodi']);

		// $data['view_table2a_jumlahmhs'] = $this->model_admin->gettable2b_jumlahmhs($data['id_tahun'], $data['id_prodi']);

		// //view_tabel
		// $data['view_table2a'] = $this->model_admin->gettable2a($data['id_tahun'], $data['id_prodi']);
		// $data['view_table8a'] = $this->model_admin->gettable8a($data['id_tahun'], $data['id_prodi']);
		// $data['view_table8b'] = $this->model_admin->gettable8b($data['id_tahun'], $data['id_prodi']);
		// $data['view_table8c'] = $this->model_admin->gettable8c($data['id_tahun'], $data['id_prodi']);
		// $data['view_table8d1'] = $this->model_admin->gettable8d1($data['id_tahun'], $data['id_prodi']);
		// $data['view_table8d2'] = $this->model_admin->gettable8d2($data['id_tahun'], $data['id_prodi']);
		// $data['view_table8e1'] = $this->model_admin->gettable8e1($data['id_tahun'], $data['id_prodi']);


		$this->load->view("admin/layout/header_admin");
		$this->load->view("admin/layout/sidebar", $data);
		$this->load->view("admin/layout/topbar_admin");
		$this->load->view("admin/dashboard", $data);
		$this->load->view("admin/layout/footer_admin");
	}


	// public function data_ami()
	// {
		

		
	// 	// $this->session->unset_userdata('id_siklus');
	// 	// $this->session->unset_userdata('id_instansi');
	// 	// if ($this->input->post('submit')) {
	// 	// 	$data['id_siklus'] = $this->input->post('id_siklus');
	// 	// 	$data['id_instansi'] = $this->input->post('id_instansi');
	// 	// 	$this->session->set_userdata('id_siklus', $data['id_siklus']);
	// 	// 	$this->session->set_userdata('id_instansi', $data['id_instansi']);
	// 	// } else {
	// 	// 	$data['id_siklus'] = $this->session->userdata('id_siklus');
	// 	// 	$data['id_instansi'] = $this->session->userdata('id_instansi');
	// 	// }

	// 	$data['instansi'] = $this->model_admin->get_instansi();
	// 	$data['siklus'] = $this->model_admin->get_siklus();

	// 	$data['id_instansi'] = $this->input->post('id_instansi');
	// 	$data['id_siklus'] = $this->input->post('id_siklus');

	// 	// $data['id_user'] = $this->session->userdata('username');
	// 	// $data['data_ami'] = $this->model_admin->get_data_ami();

	// 	$where = array('id_instansi' => $data['id_instansi'], 'id_siklus' => $data['id_siklus']);

	// 	$data['data_ami'] = $this->model_admin->get_data_ami2($where);

	// 	$data['sndikti'] =$this->model_admin->get_komponen_sndikti();

	// 	$data['jadwal_audit'] =$this->model_admin->get_jadwal_audit();


	// 	// $where = array('id_instansi' => $id);
	// 	// $data['data_ami2'] = $this->model_admin->get_data_ami2($where);

	// 	// $data['pilih_data'] = $this->model_admin->pilih_data($data['id_siklus'], $data['id_instansi']);

	// 	$this->load->view("admin/layout/header_admin");
	// 	$this->load->view("admin/layout/sidebar", $data);
	// 	$this->load->view("admin/layout/topbar_admin");
	// 	$this->load->view("admin/data_ami", $data);
	// 	$this->load->view("admin/layout/footer_admin");
	// }

	public function data_ami()
	{
		$data['instansi'] = $this->model_admin->get_instansi();
		$data['siklus'] = $this->model_admin->get_siklus();

		$data['id_instansi'] = $this->input->post('id_instansi');
		$data['id_siklus'] = $this->input->post('id_siklus');

		if (!empty($data['id_instansi']) && !empty($data['id_siklus'])) {
			$where = array('id_instansi' => $data['id_instansi'], 'id_siklus' => $data['id_siklus']);
		} else {
			$where = array('id_siklus' => 1, 'id_instansi' =>3);
		}

		$data['data_ami'] = $this->model_admin->get_data_ami2($where);
		$data['sndikti'] = $this->model_admin->get_komponen_sndikti();
		$data['jadwal_audit'] = $this->model_admin->get_jadwal_audit();

		$this->load->view("admin/layout/header_admin");
		$this->load->view("admin/layout/sidebar", $data);
		$this->load->view("admin/layout/topbar_admin");
		$this->load->view("admin/data_ami", $data);
		$this->load->view("admin/layout/footer_admin");
	}


	public function tambah_data_ami()
	{

		$id_siklus = $this->input->post('id_siklus');
		$kode_siklus = $this->input->post('kode_siklus');
		$siklus = $this->input->post('tahun');
		$jadwal = $this->input->post('jadwal');
		$id_instansi = $this->input->post('id_instansi');
		$instansi = $this->input->post('nama_instansi');
		$id_sndikti = $this->input->post('id_sndikti');
		$sndikti = $this->input->post('sndikti');
		$iku_sndikti = $this->input->post('iku_sndikti');

		$data = array(
			'id_siklus' => $id_siklus,
			'kode_siklus' => $kode_siklus,
			'tahun' => $siklus,
			'jadwal' => $jadwal,
			'id_instansi' => $id_instansi,
			'nama_instansi' => $instansi,
			'id_sndikti' => $id_sndikti,
			'sndikti' => $sndikti,
			'iku_sndikti' => $iku_sndikti,
		);
		$this->db->insert('data_ami', $data);
		if ($this->db->affected_rows() > 0) {
			$data['teks'] = 'Tambah Data Berhasil';
			$this->session->set_flashdata($data);
		}
		echo $this->session->flashdata('teks');
		redirect('admin/data_ami');
	}

	public function edit_data_ami($id)
	{
		$data['instansi'] = $this->model_admin->get_instansi();
		$data['siklus'] = $this->model_admin->get_siklus();

		$data['id_instansi'] = $this->input->post('id_instansi');
		$data['id_siklus'] = $this->input->post('id_siklus');

		// $data['id_user'] = $this->session->userdata('username');
		// $data['data_ami'] = $this->model_admin->get_data_ami();



		$data['sndikti'] = $this->model_admin->get_komponen_sndikti();

		$data['jadwal_audit'] = $this->model_admin->get_jadwal_audit();


		$where = array('id_transaksi' => $id);
		$data['data_ami'] = $this->model_admin->edit_data($where, 'data_ami')->result();
		// $this->load->view("admin/layout/header_admin");
		// $this->load->view("admin/layout/sidebar", $data);
		// $this->load->view("admin/layout/topbar_admin");
		$this->load->view('admin/edit_data_ami', $data);
		$this->load->view("admin/layout/footer_admin");
	}

	public function update_data_ami()
	{
		$id = $this->input->post('id_transaksi');
		$id_siklus = $this->input->post('id_siklus');
		$kode_siklus = $this->input->post('kode_siklus');
		$siklus = $this->input->post('tahun');
		$jadwal = $this->input->post('jadwal');
		$id_instansi = $this->input->post('id_instansi');
		$instansi = $this->input->post('nama_instansi');
		$id_sndikti = $this->input->post('id_sndikti');
		$sndikti = $this->input->post('sndikti');
		$iku_sndikti = $this->input->post('iku_sndikti');

		$data = array(
			'id_siklus' => $id_siklus,
			'kode_siklus' => $kode_siklus,
			'tahun' => $siklus,
			'jadwal' => $jadwal,
			'id_instansi' => $id_instansi,
			'nama_instansi' => $instansi,
			'id_sndikti' => $id_sndikti,
			'sndikti' => $sndikti,
			'iku_sndikti' => $iku_sndikti,
		);

		$where = array('id_transaksi' => $id);
		$this->model_admin->update_data($where, $data, 'data_ami');
		redirect('admin/data_ami');
	}

	public function hapus_data_ami($id)
	{
		$where = array('id_transaksi' => $id);
		$this->model_admin->hapus_data($where, 'data_ami');
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
		redirect('admin/data_ami');
	}


	public function komponen_sndikti()
	{
		$data['komponen_sndikti'] = $this->model_admin->get_komponen_sndikti();
		$data['jadwal_audit'] = $this->model_admin->get_jadwal_audit();

		// $this->load->view("admin/layout/header_admin");
		// $this->load->view("admin/layout/sidebar", $data);
		// $this->load->view("admin/layout/topbar_admin");
		$this->load->view("admin/komponen-sndikti", $data);
		$this->load->view("admin/layout/footer_admin");
	}

	public function edit_komponen_sndikti($id)
	{

		$where = array('id_sndikti' => $id);
		$data['komponen_sndikti'] = $this->model_admin->edit_data($where, 'sndikti')->result();
		$data['jadwal_audit'] = $this->model_admin->get_jadwal_audit();
		// $this->load->view("admin/layout/header_admin");
		// $this->load->view("admin/layout/sidebar", $data);
		// $this->load->view("admin/layout/topbar_admin");
		$this->load->view('admin/edit_komponen_sndikti', $data);
		$this->load->view("admin/layout/footer_admin");
	}

	public function update_komponen_sndikti()
	{
		$id = $this->input->post('id_sndikti');
		$sndikti = $this->input->post('sndikti');
		$iku_sndikti = $this->input->post('iku_sndikti');
		$data = array(
			'sndikti' => $sndikti,
			'iku_sndikti' => $iku_sndikti,
		);

		$where = array('id_sndikti' => $id);
		$this->model_admin->update_data($where, $data, 'sndikti');
		redirect('admin/komponen_sndikti');
	}
	public function hapus_komponen_sndikti($id)
	{
		$where = array('id_sndikti' => $id);
		$this->model_admin->hapus_data($where, 'sndikti');
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
		redirect('admin/komponen_sndikti');
	}

	public function tambah_komponen_sndikti()
	{
		$sndikti = $this->input->post('sndikti');
		$iku_sndikti = $this->input->post('iku_sndikti');
		$jadwal = $this->input->post('jadwal');

		$data = array(
			'sndikti' => $sndikti,
			'iku_sndikti' => $iku_sndikti,
			'jadwal' => $jadwal,
		);
		$this->db->insert('sndikti', $data);
		if ($this->db->affected_rows() > 0) {
			$data['teks'] = 'Tambah Data Berhasil';
			$this->session->set_flashdata($data);
		}
		echo $this->session->flashdata('teks');
		redirect('admin/komponen_sndikti');
	}

	// Manajemen Jadwal Audit :
	public function jadwal_audit()
	{
		$data['jadwal_audit'] = $this->model_admin->get_jadwal_audit();

		// $this->load->view("admin/layout/header_admin");
		// $this->load->view("admin/layout/sidebar", $data);
		// $this->load->view("admin/layout/topbar_admin");
		$this->load->view("admin/jadwal_audit", $data);
		$this->load->view("admin/layout/footer_admin");
	}

	// Kode untuk kebutuhan debug :
	public function debug()
	{
		$data['jadwal_audit'] = $this->model_admin->get_jadwal_audit();

		// $this->load->view("admin/layout/header_admin");
		// $this->load->view("admin/layout/sidebar", $data);
		// $this->load->view("admin/layout/topbar_admin");
		$this->load->view("admin/debug", $data);
		$this->load->view("admin/layout/footer_admin");
	}


	public function edit_jadwal_audit($id)
	{

		$where = array('id' => $id);
		$data['jadwal_audit'] = $this->model_admin->edit_data($where, 'jadwal_audit')->result();
		// $this->load->view("admin/layout/header_admin");
		// $this->load->view("admin/layout/sidebar", $data);
		// $this->load->view("admin/layout/topbar_admin");
		$this->load->view('admin/edit_jadwal_audit', $data);
		$this->load->view("admin/layout/footer_admin");
	}

	public function tambah_jadwal_audit()
	{
		$jadwal = $this->input->post('jadwal');
		$siklus = $this->input->post('siklus');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'jadwal' => $jadwal,
			'siklus' => $siklus,
			'keterangan' => $keterangan,
		);
		$this->db->insert('jadwal_audit', $data);
		if ($this->db->affected_rows() > 0) {
			$data['teks'] = 'Tambah Data Berhasil';
			$this->session->set_flashdata($data);
		}
		echo $this->session->flashdata('teks');
		redirect('admin/jadwal_audit');
	}
	public function update_jadwal_audit()
	{
		$id = $this->input->post('id');
		$siklus = $this->input->post('siklus');
		$jadwal = $this->input->post('jadwal');
		$keterangan = $this->input->post('keterangan');
		$data = array(
			'siklus' => $siklus,
			'jadwal' => $jadwal,
			'keterangan' => $keterangan,
		);

		$where = array('id' => $id);
		$this->model_admin->update_data($where, $data, 'jadwal_audit');
		redirect('admin/jadwal_audit');
	}

	public function hapus_jadwal_audit($id)
	{
		$where = array('id' => $id);
		$this->model_admin->hapus_data($where, 'jadwal_audit');
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
		redirect('admin/jadwal_audit');
	}

	function manajemen_user()
	{
		$this->session->unset_userdata('keyword');

		$data['judul'] = 'Manajemen User';
		$data['user'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();
		$data['profil'] = $data['user'];
		$data['profil']['nama'] = 'administrator';
		$data['profil']['gambar'] = 'default.jpg';
		$data['id_akses'] = $this->session->userdata('id_user');

		$this->load->model('user_model', 'userM');
		$data['level'] = $this->db->get('user_level')->result_array();
		//$data['user'] = $this->db->from('user');

		if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}

		$this->db->like('username', $data['keyword']);
		$this->db->from('akun');
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$config['base_url'] = 'http://localhost/siami/admin/manajemen_user';

		$config['per_page'] = 10;

		$this->pagination->initialize($config);

		if ($this->uri->segment(3) !== null) {
			$data['start'] = $this->uri->segment(3);
		} else {
			$data['start'] = 0;
		}

		$data['users'] = $this->userM->getUsers($config['per_page'], $data['start'], $data['keyword'], $data['user']['level']);

		// $this->load->view("admin/layout/header_admin");
		// $this->load->view("admin/layout/sidebar", $data);
		// $this->load->view("admin/layout/topbar_admin");
		$this->load->view('admin/manajemen_user', $data);
		$this->load->view("admin/layout/footer_admin");
	}

	public function tambah_akun()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$level = $this->input->post('level');

		$data = array(
			'username' => $username,
			'password' => $password,
			'level' => $level,
		);
		$this->db->insert('akun', $data);
		redirect('admin/manajemen_user');
	}

	public function hapus_akun($id)
	{
		$where = array('id_user' => $id);
		$this->model_admin->hapus_data($where, 'akun');
		redirect('admin/manajemen_user');
	}

	public function edit_akun($id)
	{
		$id = $this->input->post('id_user');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$level = $this->input->post('level');

		$data = array(
			'username' => $username,
			'password' => $password,
			'level' => $level,
		);

		$where = array('id_user' => $id);
		$this->model_admin->update_data($where, $data, 'akun');
		redirect('admin/manajemen_user');
	}

	public function manajemen_akses()
	{
		$data['akun'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();

		$this->load->model('user_model', 'userM');
		$data['id_akses'] = $this->session->userdata('id_user');
		$data['instansi'] = $this->model_log->instansi($data['id_akses']);

		$data['user'] = $this->userM->get_akun(null);

		if ($this->form_validation->run() == false) {

			// $this->load->view("admin/layout/header_admin");
			// $this->load->view("admin/layout/sidebar", $data);
			// $this->load->view("admin/layout/topbar_admin");
			$this->load->view('admin/manajemen_akses', $data);
			$this->load->view("admin/layout/footer_admin");
		} else {
			$this->db->insert('user_level', ['level' => $this->input->post('level')]);
			$this->session->set_flashdata('pesan', 'Level baru berhasil ditambahkan');
			redirect('admin/manajemen_akses');
		}
	}

	public function editakses($id)
	{
		$data['akun'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();

		$this->load->model('user_model', 'userM');
		$data['id_akses'] = $this->session->userdata('id_user');
		$data['instansi'] = $this->model_log->instansi($data['id_akses']);


		$data['user'] = $this->db->get_where('akun', ['id_user' => $id])->row_array();
		$data['menu'] = $this->db->get('instansi')->result_array();

		// $this->load->view("admin/layout/header_admin");
		// $this->load->view("admin/layout/sidebar", $data);
		// $this->load->view("admin/layout/topbar_admin");
		$this->load->view('admin/editakses', $data);
		$this->load->view("admin/layout/footer_admin");
	}

	public function rubahakses()
	{
		$akun = $this->input->post('akun');
		$instansi = $this->input->post('id_instansi');

		$data = [
			'akun' => $akun,
			'id_instansi' => $instansi
		];

		$hasil = $this->db->get_where('user_access_data', $data);

		if ($hasil->num_rows() < 1) {
			$this->db->insert('user_access_data', $data);
		} else {
			$this->db->delete('user_access_data', $data);
		}

		$this->session->set_flashdata('pesan', 'Akses telah diganti');
	}


	public function data_instansi()
	{
		$data['instansi'] = $this->model_admin->get_instansi();

		// $this->load->view("admin/layout/header_admin");
		// $this->load->view("admin/layout/sidebar", $data);
		// $this->load->view("admin/layout/topbar_admin");
		$this->load->view("admin/data_instansi", $data);
		$this->load->view("admin/layout/footer_admin");
	}

	public function edit_instansi($id)
	{

		$where = array('id_instansi' => $id);
		$data['instansi'] = $this->model_admin->edit_data($where, 'instansi')->result();
		// $this->load->view("admin/layout/header_admin");
		// $this->load->view("admin/layout/sidebar", $data);
		// $this->load->view("admin/layout/topbar_admin");
		$this->load->view('admin/edit_instansi', $data);
		$this->load->view("admin/layout/footer_admin");
	}

	public function update_instansi()
	{
		$id = $this->input->post('id_instansi');
		$id_jenis_instansi = $this->input->post('id_jenis_instansi');
		$nama_instansi = $this->input->post('nama_instansi');
		$deskripsi = $this->input->post('deskripsi');
		$data = array(
			'id_jenis_instansi' => $id_jenis_instansi,
			'nama_instansi' => $nama_instansi,
			'deskripsi' => $deskripsi,
		);

		$where = array('id_instansi' => $id);
		$this->model_admin->update_data($where, $data, 'instansi');
		redirect('admin/data_instansi');
	}
	public function hapus_instansi($id)
	{
		$where = array('id_instansi' => $id);
		$this->model_admin->hapus_data($where, 'instansi');
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
		redirect('admin/data_instansi');
	}

	public function tambah_instansi()
	{
		$id_jenis_instansi = $this->input->post('id_jenis_instansi');
		$nama_instansi = $this->input->post('nama_instansi');
		$deskripsi = $this->input->post('deskripsi');

		$data = array(
			'id_jenis_instansi' => $id_jenis_instansi,
			'nama_instansi' => $nama_instansi,
			'deskripsi' => $deskripsi,
		);
		$this->db->insert('instansi', $data);
		if ($this->db->affected_rows() > 0) {
			$data['teks'] = 'Tambah Data Berhasil';
			$this->session->set_flashdata($data);
		}
		echo $this->session->flashdata('teks');
		redirect('admin/data_instansi');
	}

	public function manajemen_asesor()
	{

		$data['siklus'] = $this->model_admin->get_siklus();

		$data['id_instansi'] = $this->input->post('id_instansi');
		$data['id_siklus'] = $this->input->post('id_siklus');

		$where = array('id_instansi' => $data['id_instansi'], 'id_siklus' => $data['id_siklus']);

		$data['data_ami'] = $this->model_admin->get_data_ami2($where);

		$data['instansi'] = $this->model_admin->get_instansi();


		if ($this->form_validation->run() == false) {

			// $this->load->view("admin/layout/header_admin");
			// $this->load->view("admin/layout/sidebar", $data);
			// $this->load->view("admin/layout/topbar_admin");
			$this->load->view('admin/manajemen_asesor', $data);
			$this->load->view("admin/layout/footer_admin");
		} else {
			$this->db->insert('user_level', ['level' => $this->input->post('level')]);
			$this->session->set_flashdata('pesan', 'Level baru berhasil ditambahkan');
			redirect('admin/manajemen_akses');
		}
	}

	public function editasesor($id)
	{
		$data['akun'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();

		$this->load->model('user_model', 'userM');
		$data['id_akses'] = $this->session->userdata('id_user');
		$data['akun'] = $this->model_log->akun('4');


		$data['instansi'] = $this->db->get_where('instansi', ['id_instansi' => $id])->row_array();
		$data['menu'] = $this->db->get_where('akun', ['level' => '3'])->result_array();

		// $this->load->view("admin/layout/header_admin");
		// $this->load->view("admin/layout/sidebar", $data);
		// $this->load->view("admin/layout/topbar_admin");
		$this->load->view('admin/edit_asesor', $data);
		$this->load->view("admin/layout/footer_admin");
	}

	public function rubahasesor()
	{
		$akun = $this->input->post('akun');
		$instansi = $this->input->post('id_instansi');

		$data = [
			'akun' => $akun,
			'id_instansi' => $instansi
		];

		$hasil = $this->db->get_where('user_access_data', $data);

		if ($hasil->num_rows() < 1) {
			$this->db->insert('user_access_data', $data);
		} else {
			$this->db->delete('user_access_data', $data);
		}

		$this->session->set_flashdata('pesan', 'Akses telah diganti');
	}
























































	//table 2a
	public function table_2a()
	{
		$this->session->unset_userdata('id_tahun');
		$this->session->unset_userdata('id_prodi');
		if ($this->input->post('submit')) {
			$data['id_tahun'] = $this->input->post('id_tahun');
			$data['id_prodi'] = $this->input->post('id_prodi');
			$this->session->set_userdata('id_tahun', $data['id_tahun']);
			$this->session->set_userdata('id_prodi', $data['id_prodi']);
		} else {
			$data['id_tahun'] = $this->session->userdata('id_tahun');
			$data['id_prodi'] = $this->session->userdata('id_prodi');
		}

		$config['total_rows'] = $this->model_log->HitungSearch($data['id_tahun']);
		$data['total_rows'] = $config['total_rows'];

		$config['per_page'] = 5;

		if ($this->uri->segment(3) !== null) {
			$data['start'] = $this->uri->segment(3);
		} else {
			if ($data['id_tahun'] > 2019) {
				$nn = $data['id_tahun'] -  2019;
				$data['start'] = $nn;
			} else {
				$data['start'] = 0;
			}
		}

		$data['pilih_data'] = $this->model_admin->pilih_data($data['id_tahun'], $data['id_prodi']);
		$data['view_table2a'] = $this->model_admin->gettable2a($data['id_tahun'], $data['id_prodi']);
		$data['jumlah_data'] = $this->model_admin->datatable_2a($data['id_tahun'], $data['id_prodi']);
		$data['jumlah_data_MA'] = $this->model_admin->datatable_2a_MA($data['id_tahun'], $data['id_prodi']);
		$data['jumlah_dosen'] = $this->model_admin->datatable_2a_Dosen($data['id_tahun'], $data['id_prodi']);
		$data['jumlah_data_MB'] = $this->model_admin->datatable_2a_MB($data['id_tahun'], $data['id_prodi']);
		$data['judul'] = 'Table 2.a';

		$data['tahunsekarang_2b'] = $this->model_admin->tahunsekarang_2b($data['id_tahun']);
		$data['id_akses'] = $this->session->userdata('id_user');
		$data['instansi'] = $this->model_log->instansi($data['id_akses']);
		$data['fakultas'] = $this->model_log->fakultas($data['id_akses']);

		$data['dropdown'] = $this->model_log->dropdown()->result();
		$this->load->view("admin/layout/header_admin");
		$this->load->view("admin/layout/sidebar", $data);
		$this->load->view("admin/layout/topbar_admin");
		$this->load->view("admin/134table_2a", $data);
		$this->load->view("admin/layout/footer_admin");
	}


	public function tambah_dosen()
	{
		$tahun = $this->input->post('tahun');
		$id_prodi = $this->input->post('id_prodi');
		$jumlah_dosen = $this->input->post('jumlah_dosen');

		$data = array(
			'tahun_ajaran' => $tahun,
			'id_prodi' => $id_prodi,
			'jumlah_dosen' => $jumlah_dosen,
		);
		$this->db->insert('dosen', $data);
		if ($this->db->affected_rows() > 0) {
			$data['teks'] = 'Tambah Data Berhasil';
			$this->session->set_flashdata($data);
		}
		echo $this->session->flashdata('teks');
		redirect('admin/table_2a');
	}
	public function edit_tabel2a($id)
	{
		$data['judul'] = 'Table 2.a';
		$data['id_akses'] = $this->session->userdata('id_user');
		$data['instansi'] = $this->model_log->instansi($data['id_akses']);
		$data['fakultas'] = $this->model_log->fakultas($data['id_akses']);
		$where = array('id_tabel2a' => $id);
		$data['tabel_2a'] = $this->model_admin->edit_data($where, 'tabel_2a')->result();
		$this->load->view("admin/layout/header_admin");
		$this->load->view("admin/layout/sidebar", $data);
		$this->load->view("admin/layout/topbar_admin");
		$this->load->view('admin/edit_tabel2a', $data);
		$this->load->view("admin/layout/footer_admin");
	}
	public function edit_tabel2a_dosen($id)
	{
		$id = $this->input->post('id_dosen');
		$jml_dosen = $this->input->post('jumlah_dosen');

		$data = array('jumlah_dosen' => $jml_dosen);
		$where = array('id_dosen' => $id);
		$this->model_admin->update_data($where, $data, 'dosen');
		redirect('admin/table_2a');
	}
	public function update_tabel2a()
	{
		$id = $this->input->post('id_tabel2a');
		$tahun = $this->input->post('tahun');
		$dayatampung = $this->input->post('dayatampung');
		$pendaftar = $this->input->post('pendaftar');
		$lulusseleksi = $this->input->post('lulusseleksi');
		$regulerb = $this->input->post('regulerb');
		$transferb = $this->input->post('transferb');
		$regulera = $this->input->post('regulera');
		$transfera = $this->input->post('transfera');
		$data = array(
			'tahun' => $tahun,
			'daya_tampung' => $dayatampung,
			'pendaftar' => $pendaftar,
			'lulus_seleksi' => $lulusseleksi,
			'jmb_reguler' => $regulerb,
			'jmb_transfer' => $transferb,
			'jma_reguler' => $regulera,
			'jma_transfer' => $transfera,
		);

		$where = array('id_tabel2a' => $id);
		$this->model_admin->update_data($where, $data, 'tabel_2a');
		redirect('admin/table_2a');
	}
	public function hapus_tabel2a($id)
	{
		$where = array('id_tabel2a' => $id);
		$this->model_admin->hapus_data($where, 'tabel_2a');
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
		redirect('admin/table_2a');
	}

	//table 2b
	public function table_2b()
	{
		$this->session->unset_userdata('id_tahun');
		$this->session->unset_userdata('id_prodi');
		if ($this->input->post('submit')) {
			$data['id_tahun'] = $this->input->post('id_tahun');
			$data['id_prodi'] = $this->input->post('id_prodi');
			$this->session->set_userdata('id_tahun', $data['id_tahun']);
			$this->session->set_userdata('id_prodi', $data['id_prodi']);
		} else {
			$data['id_tahun'] = $this->session->userdata('id_tahun');
			$data['id_prodi'] = $this->session->userdata('id_prodi');
		}
		$config['total_rows'] = $this->model_log->HitungSearch($data['id_tahun']);
		$data['total_rows'] = $config['total_rows'];


		$data['dropdown'] = $this->model_log->dropdown()->result();
		$data['id_akses'] = $this->session->userdata('id_user');
		$data['instansi'] = $this->model_log->instansi($data['id_akses']);
		$data['fakultas'] = $this->model_log->fakultas($data['id_akses']);
		$data['pilih_data'] = $this->model_admin->pilih_data($data['id_tahun'], $data['id_prodi']);
		$data['view_table2b'] = $this->model_admin->gettable2b($data['id_tahun'], $data['id_prodi']);
		$data['view_table2b_min1'] = $this->model_admin->gettable2b_min1($data['id_tahun'], $data['id_prodi']);
		$data['view_table2b_min2'] = $this->model_admin->gettable2b_min2($data['id_tahun'], $data['id_prodi']);
		$data['tahunsekarang_2b'] = $this->model_admin->tahunsekarang_2b($data['id_tahun']);
		$data['view_table2b_jumlahmhs'] = $this->model_admin->gettable2b_jumlahmhs($data['id_tahun'], $data['id_prodi']);
		$data['judul'] = 'Table 2.b';

		$this->load->view("admin/layout/header_admin");
		$this->load->view("admin/layout/sidebar", $data);
		$this->load->view("admin/layout/topbar_admin");
		$this->load->view("admin/2table_2b", $data);
		$this->load->view("admin/layout/footer_admin");
	}

	public function edit_tabel2b($tahun)
	{
		$where = array('tahun' => $tahun);
		$data['judul'] = 'Table 2.b';
		$data['id_akses'] = $this->session->userdata('id_user');
		$data['instansi'] = $this->model_log->instansi($data['id_akses']);
		$data['fakultas'] = $this->model_log->fakultas($data['id_akses']);
		$data['tabel_2a'] = $this->model_admin->edit_data($where, 'tabel_2a')->result();
		$this->load->view("admin/layout/header_admin");
		$this->load->view("admin/layout/sidebar", $data);
		$this->load->view("admin/layout/topbar_admin");
		$this->load->view('admin/edit_tabel2b', $data);
		$this->load->view("admin/layout/footer_admin");
	}

	public function update_tabel2b()
	{
		$tahun = $this->input->post('tahun');
		$jma_reguler = $this->input->post('jma_reguler');
		$jma_penuh = $this->input->post('jma_penuh');
		$jma_paruh = $this->input->post('jma_paruh');
		$data = array(
			'jma_reguler' => $jma_reguler,
			'jma_penuh' => $jma_penuh,
			'jma_paruh' => $jma_paruh,
		);

		$where = array('tahun' => $tahun);
		$this->model_admin->update_data($where, $data, 'tabel_2a');
		redirect('admin/table_2b');
	}

	//table 8a
	public function table_8a()
	{
		$this->session->unset_userdata('id_tahun');
		$this->session->unset_userdata('id_prodi');
		if ($this->input->post('submit')) {
			$data['id_tahun'] = $this->input->post('id_tahun');
			$data['id_prodi'] = $this->input->post('id_prodi');
			$this->session->set_userdata('id_tahun', $data['id_tahun']);
			$this->session->set_userdata('id_prodi', $data['id_prodi']);
		} else {
			$data['id_tahun'] = $this->session->userdata('id_tahun');
			$data['id_prodi'] = $this->session->userdata('id_prodi');
		}

		$data['pilih_data'] = $this->model_admin->pilih_data($data['id_tahun'], $data['id_prodi']);
		$data['view_table8a'] = $this->model_admin->gettable8a($data['id_tahun'], $data['id_prodi']);
		$data['tahunsekarang_2b'] = $this->model_admin->tahunsekarang_2b($data['id_tahun']);
		$data['table8a_rata'] = $this->model_admin->table8a_rata($data['id_tahun'], $data['id_prodi']);
		$data['judul'] = 'Table 8.a';

		$data['dropdown'] = $this->model_log->dropdown()->result();
		$data['id_akses'] = $this->session->userdata('id_user');
		$data['instansi'] = $this->model_log->instansi($data['id_akses']);
		$data['fakultas'] = $this->model_log->fakultas($data['id_akses']);
		$this->load->view("admin/layout/header_admin");
		$this->load->view("admin/layout/sidebar", $data);
		$this->load->view("admin/layout/topbar_admin");
		$this->load->view("admin/5table_8a", $data);
		$this->load->view("admin/layout/footer_admin");
	}
	public function tambah_data8a()
	{

		$tahun_lulus = $this->input->post('tahun_lulus');
		$id_prodi = $this->input->post('id_prodi');
		$jml_lulus = $this->input->post('jml_lulusan');
		$ipk_min = $this->input->post('ipk_min');
		$ipk_rata = $this->input->post('ipk_rata');
		$ipk_max = $this->input->post('ipk_max');

		$data = array(
			'tahun_lulus' => $tahun_lulus,
			'id_prodi' => $id_prodi,
			'jumlah_lulusan' => $jml_lulus,
			'ipk_min' => $ipk_min,
			'ipk_rata' => $ipk_rata,
			'ipk_max' => $ipk_max,
		);
		$this->db->insert('tabel_8a', $data);
		redirect('admin/table_8a');
	}
	public function hapus_tabel8a($id)
	{
		$where = array('id_tabel8a' => $id);
		$this->model_admin->hapus_data($where, 'tabel_8a');
		redirect('admin/table_8a');
	}

	public function edit_tabel8a($id)
	{
		$where = array('id_tabel8a' => $id);
		$data['judul'] = 'Table 8.a';
		$data['id_akses'] = $this->session->userdata('id_user');
		$data['instansi'] = $this->model_log->instansi($data['id_akses']);
		$data['fakultas'] = $this->model_log->fakultas($data['id_akses']);
		$data['tabel_8a'] = $this->model_admin->edit_data($where, 'tabel_8a')->result();
		$this->load->view("admin/layout/header_admin");
		$this->load->view("admin/layout/sidebar", $data);
		$this->load->view("admin/layout/topbar_admin");
		$this->load->view('admin/edit_tabel8a', $data);
		$this->load->view("admin/layout/footer_admin");
	}
	public function update_tabel8a()
	{
		$id = $this->input->post('id_tabel8a');
		$tahun_lulus = $this->input->post('tahun_lulus');
		$jumlah_lulusan = $this->input->post('jumlah_lulusan');
		$ipk_min = $this->input->post('ipk_min');
		$ipk_rata = $this->input->post('ipk_rata');
		$ipk_max = $this->input->post('ipk_max');
		$data = array(
			'tahun_lulus' => $tahun_lulus,
			'jumlah_lulusan' => $jumlah_lulusan,
			'ipk_min' => $ipk_min,
			'ipk_rata' => $ipk_rata,
			'ipk_max' => $ipk_max,
		);

		$where = array('id_tabel8a' => $id);
		$this->model_admin->update_data($where, $data, 'tabel_8a');
		redirect('admin/table_8a');
	}

	//table 8b
	public function table_8b()
	{
		$this->session->unset_userdata('id_tahun');
		$this->session->unset_userdata('id_prodi');
		if ($this->input->post('submit')) {
			$data['id_tahun'] = $this->input->post('id_tahun');
			$data['id_prodi'] = $this->input->post('id_prodi');
			$this->session->set_userdata('id_tahun', $data['id_tahun']);
			$this->session->set_userdata('id_prodi', $data['id_prodi']);
		} else {
			$data['id_tahun'] = $this->session->userdata('id_tahun');
			$data['id_prodi'] = $this->session->userdata('id_prodi');
		}

		$data['pilih_data'] = $this->model_admin->pilih_data($data['id_tahun'], $data['id_prodi']);
		$data['view_table8b'] = $this->model_admin->gettable8b($data['id_tahun'], $data['id_prodi']);
		$data['tahunsekarang_2b'] = $this->model_admin->tahunsekarang_2b($data['id_tahun']);
		$data['view_table8b_jumlah_NI'] = $this->model_admin->gettable8b_jumlah_NI($data['id_tahun'], $data['id_prodi']);
		$data['view_table8b_jumlah_NN'] = $this->model_admin->gettable8b_jumlah_NN($data['id_tahun'], $data['id_prodi']);
		$data['view_table8b_jumlah_NW'] = $this->model_admin->gettable8b_jumlah_NW($data['id_tahun'], $data['id_prodi']);

		$data['dropdown'] = $this->model_log->dropdown()->result();
		$data['tingkat'] = $this->model_log->tingkat()->result();
		$data['id_akses'] = $this->session->userdata('id_user');
		$data['instansi'] = $this->model_log->instansi($data['id_akses']);
		$data['fakultas'] = $this->model_log->fakultas($data['id_akses']);
		$data['judul'] = 'Table 8.b';
		$data['jumlah_data_MA'] = $this->model_admin->datatable_2a_MA($data['id_tahun'], $data['id_prodi']);

		$this->load->view("admin/layout/header_admin");
		$this->load->view("admin/layout/sidebar", $data);
		$this->load->view("admin/layout/topbar_admin");
		$this->load->view("admin/5table_8b", $data);
		$this->load->view("admin/layout/footer_admin");
	}
	public function tambah_data8b()
	{

		$nama_kegiatan = $this->input->post('nama_kegiatan');
		$waktu_perolehan = $this->input->post('waktu_perolehan');
		$id_prodi = $this->input->post('id_prodi');
		$id_tingkat = $this->input->post('id_tingkat');
		$prestasi = $this->input->post('prestasi');

		$data = array(
			'nama_kegiatan' => $nama_kegiatan,
			'waktu_perolehan' => $waktu_perolehan,
			'id_prodi' => $id_prodi,
			'id_tingkat' => $id_tingkat,
			'prestasi' => $prestasi,
		);
		$this->db->insert('tabel_8b', $data);
		redirect('admin/table_8b');
	}

	public function edit_tabel8b($id)
	{
		$where = array('id_tabel8b' => $id);
		$data['judul'] = 'Table 8.b';
		$data['id_akses'] = $this->session->userdata('id_user');
		$data['instansi'] = $this->model_log->instansi($data['id_akses']);
		$data['fakultas'] = $this->model_log->fakultas($data['id_akses']);
		$data['tabel_8b'] = $this->model_admin->edit_data($where, 'tabel_8b')->result();
		$data['tingkat'] = $this->model_log->tingkat()->result();
		$this->load->view("admin/layout/header_admin");
		$this->load->view("admin/layout/sidebar", $data);
		$this->load->view("admin/layout/topbar_admin");
		$this->load->view('admin/edit_tabel8b', $data);
		$this->load->view("admin/layout/footer_admin");
	}
	public function update_tabel8b()
	{
		$id = $this->input->post('id_tabel8b');
		$nama_kegiatan = $this->input->post('nama_kegiatan');
		$waktu_perolehan = $this->input->post('waktu_perolehan');
		$id_tingkat = $this->input->post('id_tingkat');
		$prestasi = $this->input->post('prestasi');
		$data = array(
			'nama_kegiatan' => $nama_kegiatan,
			'waktu_perolehan' => $waktu_perolehan,
			'id_tingkat' => $id_tingkat,
			'prestasi' => $prestasi,
		);

		$where = array('id_tabel8b' => $id);
		$this->model_admin->update_data($where, $data, 'tabel_8b');
		redirect('admin/table_8b');
	}
	public function hapus_tabel8b($id)
	{
		$where = array('id_tabel8b' => $id);
		$this->model_admin->hapus_data($where, 'tabel_8b');
		redirect('admin/table_8b');
	}

	//table 8c
	public function table_8c()
	{
		$this->session->unset_userdata('id_tahun');
		$this->session->unset_userdata('id_prodi');
		if ($this->input->post('submit')) {
			$data['id_tahun'] = $this->input->post('id_tahun');
			$data['id_prodi'] = $this->input->post('id_prodi');
			$this->session->set_userdata('id_tahun', $data['id_tahun']);
			$this->session->set_userdata('id_prodi', $data['id_prodi']);
		} else {
			$data['id_tahun'] = $this->session->userdata('id_tahun');
			$data['id_prodi'] = $this->session->userdata('id_prodi');
		}

		$data['pilih_data'] = $this->model_admin->pilih_data($data['id_tahun'], $data['id_prodi']);
		$data['view_table8c'] = $this->model_admin->gettable8c($data['id_tahun'], $data['id_prodi']);
		$data['view_table8c_jml'] = $this->model_admin->gettable8c_jml_rata($data['id_tahun'], $data['id_prodi']);
		$data['tahunsekarang_2b'] = $this->model_admin->tahunsekarang_2b($data['id_tahun']);
		$data['view_table8c_jml_ts3'] = $this->model_admin->gettable8c_jml_ts3($data['id_tahun'], $data['id_prodi']);
		$data['view_table8c_jml_ts3_ts6'] = $this->model_admin->gettable8c_jml_ts3_ts6($data['id_tahun'], $data['id_prodi']);
		$data['tahun_ms'] = $this->model_admin->tahun_ms($data['id_tahun'], $data['id_prodi']);

		$data['dropdown'] = $this->model_log->dropdown()->result();
		$data['id_akses'] = $this->session->userdata('id_user');
		$data['instansi'] = $this->model_log->instansi($data['id_akses']);
		$data['fakultas'] = $this->model_log->fakultas($data['id_akses']);
		$data['judul'] = 'Table 8.c';

		$this->load->view("admin/layout/header_admin");
		$this->load->view("admin/layout/sidebar", $data);
		$this->load->view("admin/layout/topbar_admin");
		$this->load->view("admin/7table_8c", $data);
		$this->load->view("admin/layout/footer_admin");
	}

	public function tambah_data8c()
	{
		$tahun_masuk = $this->input->post('tahun_masuk');
		$id_prodi = $this->input->post('id_prodi');
		$waktu_perolehan = $this->input->post('mhs_diterima');
		$ts_6 = $this->input->post('ts_6');
		$ts_5 = $this->input->post('ts_5');
		$ts_4 = $this->input->post('ts_4');
		$ts_3 = $this->input->post('ts_3');
		$ts_2 = $this->input->post('ts_2');
		$ts_1 = $this->input->post('ts_1');
		$ts = $this->input->post('ts');
		$rata_studi = $this->input->post('rata_studi');

		$data = array(
			'tahun_masuk' => $tahun_masuk,
			'id_prodi' => $id_prodi,
			'mhs_diterima' => $waktu_perolehan,
			'ts_6' => $ts_6,
			'ts_5' => $ts_5,
			'ts_4' => $ts_4,
			'ts_3' => $ts_3,
			'ts_2' => $ts_2,
			'ts_1' => $ts_1,
			'ts' => $ts,
			'rata_studi' => $rata_studi,
		);
		$this->db->insert('tabel_8c', $data);
		redirect('admin/table_8c');
	}

	public function edit_tabel8c($id)
	{
		$where = array('id_tabel8c' => $id);
		$data['judul'] = 'Table 8.c';
		$data['id_akses'] = $this->session->userdata('id_user');
		$data['instansi'] = $this->model_log->instansi($data['id_akses']);
		$data['fakultas'] = $this->model_log->fakultas($data['id_akses']);
		$data['tabel_8c'] = $this->model_admin->edit_data($where, 'tabel_8c')->result();
		$this->load->view("admin/layout/header_admin");
		$this->load->view("admin/layout/sidebar", $data);
		$this->load->view("admin/layout/topbar_admin");
		$this->load->view('admin/edit_tabel8c', $data);
		$this->load->view("admin/layout/footer_admin");
	}

	public function update_tabel8c()
	{
		$id = $this->input->post('id_tabel8c');
		$tahun_masuk = $this->input->post('tahun_masuk');
		$waktu_perolehan = $this->input->post('mhs_diterima');
		$ts_6 = $this->input->post('ts_6');
		$ts_5 = $this->input->post('ts_5');
		$ts_4 = $this->input->post('ts_4');
		$ts_3 = $this->input->post('ts_3');
		$ts_2 = $this->input->post('ts_2');
		$ts_1 = $this->input->post('ts_1');
		$ts = $this->input->post('ts');
		$rata_studi = $this->input->post('rata_studi');
		$data = array(
			'tahun_masuk' => $tahun_masuk,
			'mhs_diterima' => $waktu_perolehan,
			'ts_6' => $ts_6,
			'ts_5' => $ts_5,
			'ts_4' => $ts_4,
			'ts_3' => $ts_3,
			'ts_2' => $ts_2,
			'ts_1' => $ts_1,
			'ts' => $ts,
			'rata_studi' => $rata_studi,
		);

		$where = array('id_tabel8c' => $id);
		$this->model_admin->update_data($where, $data, 'tabel_8c');
		redirect('admin/table_8c');
	}

	public function hapus_tabel8c($id)
	{
		$where = array('id_tabel8c' => $id);
		$this->model_admin->hapus_data($where, 'tabel_8c');
		redirect('admin/table_8c');
	}

	//table 8d1
	public function table_8d1()
	{
		$this->session->unset_userdata('id_tahun');
		$this->session->unset_userdata('id_prodi');
		if ($this->input->post('submit')) {
			$data['id_tahun'] = $this->input->post('id_tahun');
			$data['id_prodi'] = $this->input->post('id_prodi');
			$this->session->set_userdata('id_tahun', $data['id_tahun']);
			$this->session->set_userdata('id_prodi', $data['id_prodi']);
		} else {
			$data['id_tahun'] = $this->session->userdata('id_tahun');
			$data['id_prodi'] = $this->session->userdata('id_prodi');
		}

		$data['pilih_data'] = $this->model_admin->pilih_data($data['id_tahun'], $data['id_prodi']);
		$data['view_table8d1'] = $this->model_admin->gettable8d1($data['id_tahun'], $data['id_prodi']);
		$data['jumlah_data'] = $this->model_admin->datatable_8d1($data['id_tahun'], $data['id_prodi']);
		$data['judul'] = 'Table 8.d.1';
		$data['tahunsekarang_2b'] = $this->model_admin->tahunsekarang_2b($data['id_tahun']);

		$data['dropdown'] = $this->model_log->dropdown()->result();
		$data['id_akses'] = $this->session->userdata('id_user');
		$data['instansi'] = $this->model_log->instansi($data['id_akses']);
		$data['fakultas'] = $this->model_log->fakultas($data['id_akses']);
		$this->load->view("admin/layout/header_admin");
		$this->load->view("admin/layout/sidebar", $data);
		$this->load->view("admin/layout/topbar_admin");
		$this->load->view("admin/10table_8d1", $data);
		$this->load->view("admin/layout/footer_admin");
	}

	public function hapus_table8d1($id)
	{
		$where = array('id_table8d1' => $id);
		$this->model_admin->hapus_data($where, 'table_8d1');
		redirect('admin/table_8d1');
	}

	public function edit_table8d1($id)
	{
		$where = array('id_table8d1' => $id);
		$data['judul'] = 'Table 8.d.1';
		$data['id_akses'] = $this->session->userdata('id_user');
		$data['instansi'] = $this->model_log->instansi($data['id_akses']);
		$data['fakultas'] = $this->model_log->fakultas($data['id_akses']);
		$data['table_8d1'] = $this->model_admin->edit_data($where, 'table_8d1')->result();
		$this->load->view("admin/layout/header_admin");
		$this->load->view("admin/layout/sidebar", $data);
		$this->load->view("admin/layout/topbar_admin");
		$this->load->view('admin/edit_tabel8d1', $data);
		$this->load->view("admin/layout/footer_admin");
	}
	public function update_table8d1()
	{
		$id = $this->input->post('id_table8d1');
		$tahun = $this->input->post('tahun');
		$jml_lulus = $this->input->post('jml_lulus');
		$jml_lulus_ter = $this->input->post('jml_lulus_ter');
		$wt_6 = $this->input->post('wt_6');
		$wt_18 = $this->input->post('wt_18');
		$wt_lebih = $this->input->post('wt_lebih');
		$data = array(
			'tahun' => $tahun,
			'jml_lulus' => $jml_lulus,
			'jml_lulus_ter' => $jml_lulus_ter,
			'wt_6' => $wt_6,
			'wt_18' => $wt_18,
			'wt_lebih' => $wt_lebih,
		);

		$where = array('id_table8d1' => $id);
		$this->model_admin->update_data($where, $data, 'table_8d1');
		redirect('admin/table_8d1');
	}

	public function tambah_data8d1()
	{

		$tahun = $this->input->post('tahun');
		$id_prodi = $this->input->post('id_prodi');
		$jml_lulus = $this->input->post('jml_lulusan');
		$jml_lulus_ter = $this->input->post('jml_terlacak');
		$wt_6 = $this->input->post('wt_6');
		$wt_18 = $this->input->post('wt_18');
		$wt_lebih = $this->input->post('wt_lebih');

		$data = array(
			'tahun' => $tahun,
			'id_prodi' => $id_prodi,
			'jml_lulus' => $jml_lulus,
			'jml_lulus_ter' => $jml_lulus_ter,
			'wt_6' => $wt_6,
			'wt_18' => $wt_18,
			'wt_lebih' => $wt_lebih,
		);
		$this->db->insert('table_8d1', $data);
		redirect('admin/table_8d1');
	}

	//table 8d2
	public function table_8d2()
	{
		$this->session->unset_userdata('id_tahun');
		$this->session->unset_userdata('id_prodi');
		if ($this->input->post('submit')) {
			$data['id_tahun'] = $this->input->post('id_tahun');
			$data['id_prodi'] = $this->input->post('id_prodi');
			$this->session->set_userdata('id_tahun', $data['id_tahun']);
			$this->session->set_userdata('id_prodi', $data['id_prodi']);
		} else {
			$data['id_tahun'] = $this->session->userdata('id_tahun');
			$data['id_prodi'] = $this->session->userdata('id_prodi');
		}

		$data['pilih_data'] = $this->model_admin->pilih_data($data['id_tahun'], $data['id_prodi']);
		$data['view_table8d2'] = $this->model_admin->gettable8d2($data['id_tahun'], $data['id_prodi']);
		$data['jumlah_data'] = $this->model_admin->datatable_8d2($data['id_tahun'], $data['id_prodi']);
		$data['judul'] = 'Table 8.d.2';
		$data['tahunsekarang_2b'] = $this->model_admin->tahunsekarang_2b($data['id_tahun']);

		$data['dropdown'] = $this->model_log->dropdown()->result();
		$data['id_akses'] = $this->session->userdata('id_user');
		$data['instansi'] = $this->model_log->instansi($data['id_akses']);
		$data['fakultas'] = $this->model_log->fakultas($data['id_akses']);
		$this->load->view("admin/layout/header_admin");
		$this->load->view("admin/layout/sidebar", $data);
		$this->load->view("admin/layout/topbar_admin");
		$this->load->view("admin/11table_8d2", $data);
		$this->load->view("admin/layout/footer_admin");
	}

	public function tambah_data8d2()
	{

		$tahun = $this->input->post('tahun');
		$id_prodi = $this->input->post('id_prodi');
		$jml_lulus = $this->input->post('jml_lulusan');
		$jml_lulus_ter = $this->input->post('jml_terlacak');
		$rendah = $this->input->post('rendah');
		$sedang = $this->input->post('sedang');
		$tinggi = $this->input->post('tinggi');

		$data = array(
			'tahun' => $tahun,
			'id_prodi' => $id_prodi,
			'jml_lulus' => $jml_lulus,
			'jml_lulus_ter' => $jml_lulus_ter,
			'rendah' => $rendah,
			'sedang' => $sedang,
			'tinggi' => $tinggi,
		);
		$this->db->insert('table_8d1', $data);
		redirect('admin/table_8d1');
	}

	public function hapus_table8d2($id)
	{
		$where = array('id_table8d1' => $id);
		$this->model_admin->hapus_data($where, 'table_8d1');
		redirect('admin/table_8d2');
	}

	public function edit_table8d2($id)
	{
		$where = array('id_table8d1' => $id);
		$data['judul'] = 'Table 8.d.2';
		$data['id_akses'] = $this->session->userdata('id_user');
		$data['instansi'] = $this->model_log->instansi($data['id_akses']);
		$data['fakultas'] = $this->model_log->fakultas($data['id_akses']);
		$data['table_8d1'] = $this->model_admin->edit_data($where, 'table_8d1')->result();
		$this->load->view("admin/layout/header_admin");
		$this->load->view("admin/layout/sidebar", $data);
		$this->load->view("admin/layout/topbar_admin");
		$this->load->view('admin/edit_tabel8d2', $data);
		$this->load->view("admin/layout/footer_admin");
	}
	public function update_table8d2()
	{
		$id = $this->input->post('id_table8d1');
		$tahun = $this->input->post('tahun');
		$jml_lulus = $this->input->post('jml_lulus');
		$jml_lulus_ter = $this->input->post('jml_lulus_ter');
		$rendah = $this->input->post('rendah');
		$sedang = $this->input->post('sedang');
		$tinggi = $this->input->post('tinggi');
		$data = array(
			'tahun' => $tahun,
			'jml_lulus' => $jml_lulus,
			'jml_lulus_ter' => $jml_lulus_ter,
			'rendah' => $rendah,
			'sedang' => $sedang,
			'tinggi' => $tinggi,
		);

		$where = array('id_table8d1' => $id);
		$this->model_admin->update_data($where, $data, 'table_8d1');
		redirect('admin/table_8d2');
	}

	//table 8e1
	public function table_8e1()
	{
		$this->session->unset_userdata('id_tahun');
		$this->session->unset_userdata('id_prodi');
		if ($this->input->post('submit')) {
			$data['id_tahun'] = $this->input->post('id_tahun');
			$data['id_prodi'] = $this->input->post('id_prodi');
			$this->session->set_userdata('id_tahun', $data['id_tahun']);
			$this->session->set_userdata('id_prodi', $data['id_prodi']);
		} else {
			$data['id_tahun'] = $this->session->userdata('id_tahun');
			$data['id_prodi'] = $this->session->userdata('id_prodi');
		}

		$data['pilih_data'] = $this->model_admin->pilih_data($data['id_tahun'], $data['id_prodi']);
		$data['view_table8e1'] = $this->model_admin->gettable8e1($data['id_tahun'], $data['id_prodi']);
		$data['jumlah_data'] = $this->model_admin->datatable_8e1($data['id_tahun'], $data['id_prodi']);
		$data['judul'] = 'Table 8.e.1';
		$data['tahunsekarang_2b'] = $this->model_admin->tahunsekarang_2b($data['id_tahun']);

		$data['dropdown'] = $this->model_log->dropdown()->result();
		$data['id_akses'] = $this->session->userdata('id_user');
		$data['instansi'] = $this->model_log->instansi($data['id_akses']);
		$data['fakultas'] = $this->model_log->fakultas($data['id_akses']);
		$this->load->view("admin/layout/header_admin");
		$this->load->view("admin/layout/sidebar", $data);
		$this->load->view("admin/layout/topbar_admin");
		$this->load->view("admin/12table_8e1", $data);
		$this->load->view("admin/layout/footer_admin");
	}

	public function tambah_data8e1()
	{

		$tahun = $this->input->post('tahun');
		$id_prodi = $this->input->post('id_prodi');
		$jml_lulus = $this->input->post('jml_lulusan');
		$jml_lulus_ter = $this->input->post('jml_terlacak');
		$jml_berwirausaha = $this->input->post('jml_berwirausaha');
		$lokal = $this->input->post('lokal');
		$nasional = $this->input->post('nasional');
		$internasional = $this->input->post('internasional');

		$data = array(
			'tahun' => $tahun,
			'id_prodi' => $id_prodi,
			'jml_lulus' => $jml_lulus,
			'jml_lulus_ter' => $jml_lulus_ter,
			'berwirausaha' => $jml_berwirausaha,
			'lokal' => $lokal,
			'nasional' => $nasional,
			'internasional' => $internasional,
		);
		$this->db->insert('table_8d1', $data);
		redirect('admin/table_8d1');
	}

	public function hapus_table8e1($id)
	{
		$where = array('id_table8d1' => $id);
		$this->model_admin->hapus_data($where, 'table_8d1');
		redirect('admin/table_8e1');
	}

	public function edit_table8e1($id)
	{
		$where = array('id_table8d1' => $id);
		$data['judul'] = 'Table 8.e.1';
		$data['id_akses'] = $this->session->userdata('id_user');
		$data['instansi'] = $this->model_log->instansi($data['id_akses']);
		$data['fakultas'] = $this->model_log->fakultas($data['id_akses']);
		$data['table_8d1'] = $this->model_admin->edit_data($where, 'table_8d1')->result();
		$this->load->view("admin/layout/header_admin");
		$this->load->view("admin/layout/sidebar", $data);
		$this->load->view("admin/layout/topbar_admin");
		$this->load->view('admin/edit_tabel8e1', $data);
		$this->load->view("admin/layout/footer_admin");
	}
	public function update_table8e1()
	{
		$id = $this->input->post('id_table8d1');
		$tahun = $this->input->post('tahun');
		$jml_lulus = $this->input->post('jml_lulus');
		$jml_lulus_ter = $this->input->post('jml_lulus_ter');
		$berwirausaha = $this->input->post('berwirausaha');
		$lokal = $this->input->post('lokal');
		$nasional = $this->input->post('nasional');
		$internasional = $this->input->post('internasional');
		$data = array(
			'tahun' => $tahun,
			'jml_lulus' => $jml_lulus,
			'jml_lulus_ter' => $jml_lulus_ter,
			'berwirausaha' => $berwirausaha,
			'lokal' => $lokal,
			'nasional' => $nasional,
			'internasional' => $internasional,
		);

		$where = array('id_table8d1' => $id);
		$this->model_admin->update_data($where, $data, 'table_8d1');
		redirect('admin/table_8e1');
	}

	//tampil untuk user_akun



	//level_akses


}

<?php
class instansi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') != 2) {
            redirect('auth');
        }

        $this->load->model('model_log');
        $this->load->model('model_instansi');
        $this->load->helper(array('form', 'url'));
    }

    # Old :
    // public function index()
    // {
    //     $this->session->unset_userdata('id_siklus');
    //     $this->session->unset_userdata('id_instansi');
    //     if ($this->input->post('submit')) {
    //         $data['id_siklus'] = $this->input->post('id_siklus');
    //         $data['id_instansi'] = $this->input->post('id_instansi');
    //         $this->session->set_userdata('id_siklus', $data['id_siklus']);
    //         $this->session->set_userdata('id_prodi', $data['id_prodi']);
    //     } else {
    //         $data['id_siklus'] = $this->session->userdata('id_siklus');
    //         $data['id_instansi'] = $this->session->userdata('id_instansi');
    //     }

    //     $this->db->where('sekarang', 1);
    //     $query3 = $this->db->get('siklus');
    //     foreach ($query3->result() as $row) {
    //         $sar1 = array(
    //             'id_siklus_sekarang' => $row->id_siklus,
    //             'tahun_sekarang' => $row->tahun,
    //             'kode_siklus' => $row->kode_siklus,
    //         );
    //     }

    //     $this->session->set_userdata($sar1);




    //     $data['judul'] = 'Data Audit';
    //     // $data['jumlah_data'] = $this->model_instansi->datatable_2a($data['id_tahun'], $data['id_prodi']);
    //     // $data['jumlah_data_MA'] = $this->model_instansi->datatable_2a_MA($data['id_tahun'], $data['id_prodi']);
    //     // $data['jumlah_dosen'] = $this->model_instansi->datatable_2a_Dosen($data['id_tahun'], $data['id_prodi']);
    //     // $data['jumlah_data_MB'] = $this->model_instansi->datatable_2a_MB($data['id_tahun'], $data['id_prodi']);
    //     // $data['table8a_rata'] = $this->model_instansi->table8a_rata($data['id_tahun'], $data['id_prodi']);

    //     // $data['pilih_data'] = $this->model_instansi->pilih_data($data['id_tahun'], $data['id_prodi']);
    //     // $data['tahunsekarang_2b'] = $this->model_instansi->tahunsekarang_2b($data['id_tahun']);
    //     // $data['dropdown'] = $this->model_log->dropdown()->result();
    //     // $data['id_akses'] = $this->session->userdata('id_user');
    //     // $data['prodi'] = $this->model_log->prodi($data['id_akses']);
    //     // $data['fakultas'] = $this->model_log->fakultas($data['id_akses']);
    //     // //table_8b
    //     // $data['view_table8b_jumlah_NI'] = $this->model_instansi->gettable8b_jumlah_NI($data['id_tahun'], $data['id_prodi']);
    //     // $data['view_table8b_jumlah_NN'] = $this->model_instansi->gettable8b_jumlah_NN($data['id_tahun'], $data['id_prodi']);
    //     // $data['view_table8b_jumlah_NW'] = $this->model_instansi->gettable8b_jumlah_NW($data['id_tahun'], $data['id_prodi']);
    //     // //table_8c
    //     // $data['view_table8c_jml'] = $this->model_instansi->gettable8c_jml_rata($data['id_tahun'], $data['id_prodi']);
    //     // $data['view_table8c_jml_ts3'] = $this->model_instansi->gettable8c_jml_ts3($data['id_tahun'], $data['id_prodi']);
    //     // $data['view_table8c_jml_ts3_ts6'] = $this->model_instansi->gettable8c_jml_ts3_ts6($data['id_tahun'], $data['id_prodi']);
    //     // //table_8d1
    //     // $data['jumlah_data_8d1'] = $this->model_instansi->datatable_8d1($data['id_tahun'], $data['id_prodi']);
    //     // //table_8d2
    //     // $data['jumlah_data_8d2'] = $this->model_instansi->datatable_8d2($data['id_tahun'], $data['id_prodi']);
    //     // //table_8e1
    //     // $data['jumlah_data_8e'] = $this->model_instansi->datatable_8e1($data['id_tahun'], $data['id_prodi']);

    //     // $data['view_table2a_jumlahmhs'] = $this->model_instansi->gettable2b_jumlahmhs($data['id_tahun'], $data['id_prodi']);

    //     // //view_tabel
    //     // $data['view_table2a'] = $this->model_instansi->gettable2a($data['id_tahun'], $data['id_prodi']);
    //     // $data['view_table8a'] = $this->model_instansi->gettable8a($data['id_tahun'], $data['id_prodi']);
    //     // $data['view_table8b'] = $this->model_instansi->gettable8b($data['id_tahun'], $data['id_prodi']);
    //     // $data['view_table8c'] = $this->model_instansi->gettable8c($data['id_tahun'], $data['id_prodi']);
    //     // $data['view_table8d1'] = $this->model_instansi->gettable8d1($data['id_tahun'], $data['id_prodi']);
    //     // $data['view_table8d2'] = $this->model_instansi->gettable8d2($data['id_tahun'], $data['id_prodi']);
    //     // $data['view_table8e1'] = $this->model_instansi->gettable8e1($data['id_tahun'], $data['id_prodi']);

    //     $data['id_user'] = $this->session->userdata('id_user');

    //     $this->db->where('akun', $data['id_user']);
    //     $query2 = $this->db->get('user_access_data');
    //     foreach ($query2->result() as $row) {
    //         $sar = array(
    //             'id_instansi' => $row->id_instansi,
    //         );
    //     }



    //     $this->session->set_userdata($sar);

    //     $this->load->view("instansi/layout/header_admin");
    //     $this->load->view("instansi/layout/sidebar", $data);
    //     $this->load->view("instansi/layout/topbar_admin");
    //     $this->load->view("instansi/dashboard", $data);
    //     $this->load->view("instansi/layout/footer_admin");
    // }

    # Modified Code :
    public function index()
    {
        $this->session->unset_userdata('id_siklus');
        $this->session->unset_userdata('id_instansi');

        if ($this->input->post('submit')) {
            $data['id_siklus'] = $this->input->post('id_siklus');
            $data['id_instansi'] = $this->input->post('id_instansi');
            $this->session->set_userdata('id_siklus', $data['id_siklus']);
            $this->session->set_userdata('id_prodi', $data['id_prodi']);
        } else {
            $data['id_siklus'] = $this->session->userdata('id_siklus');
            $data['id_instansi'] = $this->session->userdata('id_instansi');
        }

        $this->db->where('sekarang', 1);
        $query3 = $this->db->get('siklus');
        $sar1 = array();
        foreach ($query3->result() as $row) {
            $sar1 = array(
                'id_siklus_sekarang' => $row->id_siklus,
                'tahun_sekarang' => $row->tahun,
                'kode_siklus' => $row->kode_siklus,
            );
        }

        $this->session->set_userdata($sar1);

        $data['judul'] = 'Data Audit';
        $data['id_user'] = $this->session->userdata('id_user');

        $this->db->where('akun', $data['id_user']);
        $query2 = $this->db->get('user_access_data');
        $sar = array();
        foreach ($query2->result() as $row) {
            $sar = array(
                'id_instansi' => $row->id_instansi,
            );
        }

        $this->session->set_userdata($sar);

        $this->load->view("instansi/layout/header_admin");
        $this->load->view("instansi/layout/sidebar", $data);
        $this->load->view("instansi/layout/topbar_admin");
        $this->load->view("instansi/dashboard", $data);
        $this->load->view("instansi/layout/footer_admin");
    }


    // public function sndikti()
    // {

    //     $data['judul'] = 'Data Audit';
    //     $data['id_user'] = $this->session->userdata('id_user');

    //     $data['id'] = $this->session->userdata('id_user');
    //     $data['ins'] = $this->session->userdata('id_instansi');

    //     $data['kode_siklus'] = $this->session->userdata('kode_siklus');
    //     $data['id_siklus_sekarang'] = $this->session->userdata('id_siklus_sekarang');

    //     $data['sndikti'] = $this->model_instansi->getsndikti2($data['ins'], $data['id_siklus_sekarang']);
    //     $data['instansi'] = $this->model_instansi->getinstansi($data['ins']);

    //     $this->load->view("instansi/layout/header_admin");
    //     $this->load->view("instansi/layout/sidebar", $data);
    //     $this->load->view("instansi/layout/topbar_admin");
    //     $this->load->view("instansi/sndikti", $data);
    //     $this->load->view("instansi/layout/footer_admin");
    // }

    #Modified Code :
    public function sndikti()
    {
        $data['judul'] = 'Data Audit';
        $data['id_user'] = $this->session->userdata('id_user');

        $data['id'] = $this->session->userdata('id_user');
        $data['ins'] = $this->session->userdata('id_instansi');

        $data['kode_siklus'] = "X";
        $data['id_siklus_sekarang'] = 1;

        $data['sndikti'] = $this->model_instansi->getsndikti2($data['ins'], $data['id_siklus_sekarang']);
        $data['instansi'] = $this->model_instansi->getinstansi($data['ins']);

        // Ekstrak nama file dari url path yang ada dari tabal data_ami dengan nama kolom : hasil_audit
        foreach ($data['sndikti'] as &$snd) {
            $file_names = [];
            if (!empty($snd['link'])) {
                $file_names[] = basename($snd['link']);
            }
            if (!empty($snd['hasil_audit'])) {
                $file_names[] = basename($snd['hasil_audit']);
            }
            $snd['file_name'] = implode(', ', $file_names);
        }


        $this->load->view("instansi/layout/header_admin");
        $this->load->view("instansi/layout/sidebar", $data);
        $this->load->view("instansi/layout/topbar_admin");
        $this->load->view("instansi/sndikti", $data);
        $this->load->view("instansi/layout/footer_admin");
    }


    // public function update_sndikti()
    // {
    //     $data = $this->input->post();

    //     for ($i = 0; $i < count($data['id']); $i++) {
    //         $batch[] = array(
    //             'id_transaksi' => $data['id'][$i],
    //             'link' => $data['link'][$i],
    //         );
    //     }
    //     // $data1['id_akses'] = $this->session->userdata('username');

    //     // var_dump($data1['id_akses']);

    //     $this->db->update_batch('data_ami', $batch, 'id_transaksi');
    //     redirect('instansi/sndikti');
    // }

    # New code :
    public function update_sndikti()
    {
        $data = $this->input->post();
        $files = $_FILES;

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx';
        $config['max_size'] = 2048;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $batch = [];

        for ($i = 0; $i < count($data['id']); $i++) {
            $update_data = [
                'id_transaksi' => $data['id'][$i],
            ];

            if (!empty($files['file']['name'][$i])) {
                $_FILES['file']['name'] = $files['file']['name'][$i];
                $_FILES['file']['type'] = $files['file']['type'][$i];
                $_FILES['file']['tmp_name'] = $files['file']['tmp_name'][$i];
                $_FILES['file']['error'] = $files['file']['error'][$i];
                $_FILES['file']['size'] = $files['file']['size'][$i];

                if ($this->upload->do_upload('file')) {
                    $upload_data = $this->upload->data();
                    $file_link = base_url('uploads/' . $upload_data['file_name']);
                    $update_data['link'] = $file_link;
                } else {
                    $error = $this->upload->display_errors();
                    echo $error;
                    return;
                }
            }

            $batch[] = $update_data;
        }

        $this->db->update_batch('data_ami', $batch, 'id_transaksi');
        redirect('instansi/sndikti');
    }

}

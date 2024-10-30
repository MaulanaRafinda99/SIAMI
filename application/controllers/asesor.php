<?php
class asesor extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        if ($this->session->userdata('level') != 3) {
            redirect('auth');
        }
        $this->load->model('model_log');
        $this->load->model('model_asesor');
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
            $this->session->set_userdata('id_prodi', $data['id_prodi']);
        } else {
            $data['id_siklus'] = $this->session->userdata('id_siklus');
            $data['id_instansi'] = $this->session->userdata('id_instansi');
        }
        $data['judul'] = 'Data Audit';

        $data['id_user'] = $this->session->userdata('id_user');

        // Initialize $sar as an empty array
        $sar = array();
        $this->db->where('id_user', $data['id_user']);
        $query2 = $this->db->get('data_asesor');
        foreach ($query2->result() as $row) {
            $sar = array(
                'id_instansi' => $row->id_instansi,
            );
        }

        // Only set the session data if $sar is not empty
        if (!empty($sar)) {
            $this->session->set_userdata($sar);
        }

        $this->db->where('sekarang', 1);
        $query3 = $this->db->get('siklus');
        $sar1 = array(); // Initialize $sar1 as an empty array
        foreach ($query3->result() as $row) {
            $sar1 = array(
                'id_siklus_sekarang' => $row->id_siklus,
                'tahun_sekarang' => $row->tahun,
                'kode_siklus' => $row->kode_siklus,
            );
        }

        // Only set the session data if $sar1 is not empty
        if (!empty($sar1)) {
            $this->session->set_userdata($sar1);
        }

        $this->load->view("asesor/layout/header_admin");
        $this->load->view("asesor/layout/sidebar", $data);
        $this->load->view("asesor/layout/topbar_admin");
        $this->load->view("asesor/dashboard", $data);
        $this->load->view("asesor/layout/footer_admin");
    }


    public function sndikti()
    {

        $data['judul'] = 'Data Audit';
        $data['id_user'] = $this->session->userdata('id_user');

        $data['id_siklus_sekarang'] = $this->session->userdata('id_siklus_sekarang');
        $data['kode_siklus'] = $this->session->userdata('kode_siklus');

        $data['id'] = $this->session->userdata('id_user');
        $data['ins'] = $this->session->userdata('id_instansi');
        $data['sndikti'] = $this->model_asesor->getsndikti2($data['ins'], $data['id_siklus_sekarang']);
        $data['instansi'] = $this->model_asesor->getinstansi($data['ins']);

        foreach ($data['sndikti'] as &$snd) {
            if (!empty($snd['hasil_audit']) && isset($snd['hasil_audit'])) {
                $snd['file_name'] = basename($snd['hasil_audit']);
            } else {
                $snd['file_name'] = '';
            }
        }

        $this->load->view("asesor/layout/header_admin");
        $this->load->view("asesor/layout/sidebar", $data);
        $this->load->view("asesor/layout/topbar_admin");
        $this->load->view("asesor/sndikti", $data);
        $this->load->view("asesor/layout/footer_admin");
    }

    // public function update_sndikti()
    // {
    //     $data = $this->input->post();

    //     for ($i = 0; $i < count($data['id']); $i++) {
    //         $batch[] = array(
    //             'id_transaksi' => $data['id'][$i],
    //             'bobot' => $data['bobot'][$i],
    //         );
    //     }
    //     // $data1['id_akses'] = $this->session->userdata('username');

    //     // var_dump($data1['id_akses']);

    //     $this->db->update_batch('data_ami', $batch, 'id_transaksi');
    //     redirect('asesor/sndikti');
    // }

    // Modified Code :
    public function update_sndikti()
    {
        $data = $this->input->post();
        $files = $_FILES;

        $config['upload_path'] = './uploads/hasil_audit/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx';
        $config['max_size'] = 2048;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $batch = [];

        for ($i = 0; $i < count($data['id']); $i++) {
            $update_data = [
                'id_transaksi' => $data['id'][$i],
                'bobot' => $data['bobot'][$i],
            ];

            if (!empty($files['file']['name'][$i])) {
                $_FILES['file']['name'] = $files['file']['name'][$i];
                $_FILES['file']['type'] = $files['file']['type'][$i];
                $_FILES['file']['tmp_name'] = $files['file']['tmp_name'][$i];
                $_FILES['file']['error'] = $files['file']['error'][$i];
                $_FILES['file']['size'] = $files['file']['size'][$i];

                if ($this->upload->do_upload('file')) {
                    $upload_data = $this->upload->data();
                    $file_link = base_url('uploads/hasil_audit/' . $upload_data['file_name']);
                    $update_data['hasil_audit'] = $file_link;
                } else {
                    $error = $this->upload->display_errors();
                    echo $error;
                    return;
                }
            }

            $batch[] = $update_data;
        }

        $this->db->update_batch('data_ami', $batch, 'id_transaksi');
        redirect('asesor/sndikti');
    }

}

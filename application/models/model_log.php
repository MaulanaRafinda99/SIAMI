<?php
class model_log extends CI_Model
{
	public function tampil_data()
	{
		return $this->db->get('');
	}

	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function ver($username, $password)
	{

		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('akun');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$sar = array(
					'id_user' => $row->id_user,
					'username' => $row->username,
					'password' => $row->password,
					'level' => $row->level,
					'login' => 1
				);
			}

			$this->session->set_userdata($sar);
			$lvl = $this->session->userdata('level');
			if ($lvl == 1) {
				redirect('admin');
			} elseif ($lvl == 2) {
				redirect('instansi');
			} elseif ($lvl == 3) {
				redirect('asesor');
			}
		} else {
			redirect('auth');
		}
	}


	public function dropdown()
	{
		$this->db->order_by('tahun', 'DESC');
		$query = $this->db->get('tabel_2a');
		return $query;
	}
	public function instansi($id)
	{
		$query = "
		SELECT instansi.id_instansi FROM instansi JOIN user_access_data ON instansi.id_instansi = user_access_data.id_instansi WHERE user_access_data.akun = $id ORDER BY user_access_data.id_instansi ASC
		";
		return $this->db->query($query)->result_array();
	}

	public function akun($id)
	{
		$query = "
		SELECT akun.id_user FROM akun JOIN data_asesor ON akun.id_user = data_asesor.id_user WHERE data_asesor.id_instansi = $id ORDER BY data_asesor.id_instansi ASC
		";
		return $this->db->query($query)->result_array();
	}
	// public function fakultas($id)
	// {
	// 	$query = "
	// 	SELECT fakultas.nama_fakultas, COUNT(fakultas.id_fakultas)
	// 	FROM fakultas, prodi JOIN user_access_data
	// 	ON prodi.id_prodi = user_access_data.prodi
	// 	WHERE prodi.id_fakultas = fakultas.id_fakultas AND user_access_data.akun = $id
	// 	GROUP BY prodi.id_fakultas
	// 	";
	// 	return $this->db->query($query)->result_array();
	// }
	// public function tingkat()
	// {
	// 	$query = $this->db->get('tingkat_prestasi');
	// 	return $query;
	// }

	// public function HitungSearch($id_tahun)
	// {
	// 	return $this->db
	// 		->SELECT('id_tahun', $id_tahun)
	// 		->from('tabel_2a')
	// 		->count_all_results();
	// }
}

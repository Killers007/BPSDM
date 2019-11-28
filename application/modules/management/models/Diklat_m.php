<?php

class Diklat_m extends MY_Model {

	private $table	= 'diklat_m_diklat';
	private $key	= 'diklatId';

	public function rules($update = null) {

		$rules = array(
			array('field' => 'diklatNama', 'label' => 'Nama DIKLAT', 'rules' => 'required|trim'),
			array('field' => 'diklatKuota', 'label' => 'Kuota Peserta', 'rules' => 'required|numeric'),
			array('field' => 'diklatTempatPelatihan', 'label' => 'Tempat Pelatihan', 'rules' => 'required'),
			array('field' => 'tanggalPendaftaran', 'label' => 'Tanggal Pendaftaran', 'rules' => 'required'),
			array('field' => 'tanggalPelatihan', 'label' => 'Tanggal Pendaftaran', 'rules' => 'required'),
			array('field' => 'diklatPengajar[]', 'label' => 'Pengajar', 'rules' => 'required'),
		);

		return $rules;
	}

	public function rulesJadwal($update = null) {

		$rules = array(
			array('field' => 'jadwalTanggal', 'label' => 'Tanggal', 'rules' => 'required'),
			array('field' => 'jadwalMateriPelajaran', 'label' => 'Materi Pelajaran', 'rules' => 'required'),
			array('field' => 'jadwalPenyaji', 'label' => 'Penyaji', 'rules' => 'required'),
			array('field' => 'jadwalJP', 'label' => 'JP', 'rules' => 'numeric'),
			array('field' => 'jadwalWaktuMulai', 'label' => 'Waktu Mulai', 'rules' => 'required'),
			array('field' => 'jadwalWaktuSelesai', 'label' => 'Waktu Selesai', 'rules' => 'required'),
		);

		return $rules;
	}

	function selectProvinsi()
	{
		$out = [];
		$res = $this->db->get('provinsi')->result();

		foreach ($res as $key => $value) {
			$out[$value->id_prov] = $value->nama_prov;
		}

		return $out;
	}

	function selectAgama()
	{
		$out = [];
		$res = $this->db->get('diklat_r_agama')->result();

		$out[''] = '-- Pilih Agama --';

		foreach ($res as $key => $value) {
			$out[$value->agamaId] = $value->agamaNama;
		}

		return $out;
	}

	function selectPengajar()
	{
		$out = [];
		$res = $this->db->get('diklat_m_pengajar')->result();

		foreach ($res as $key => $value) {
			$out[$value->pengajarNip] = $value->pengajarGelarDepan.' '.$value->pengajarNama.' '.$value->pengajarGelarBelakang;
		}

		return $out;
	}

	function saveMessage($id, $message)
	{
		$data['notifTo'] = $id;
		$data['notifContent'] = $message;

		$this->db->insert('diklat_t_notif', $data);
		return $this->db->affected_rows();
	}

	function readMessage($id)
	{
		$data['notifTo'] = $id;

		$this->db->order_by('notifSend', 'asc');
		return $this->db->get_where('diklat_t_notif', $data)->result();
	}

	function getPengajar($diklatId)
	{
		$res = [];

		$this->db->where('mengajarDiklatId', $diklatId);
		$this->db->join('diklat_m_pengajar', 'pengajarNip = mengajarNIP');

		$res['pengajar'] = $this->db->get('diklat_t_mengajar')->result();

		$this->db->where('pendaftaranDiklatId', $diklatId);
		$this->db->join('diklat_m_peserta', 'pesertaNik = pendaftaranPesertaId');
		$res['pendaftar'] = $this->db->get('diklat_t_pendaftaran')->result();

		return $res;
	}

	function getPeserta($diklatId)
	{
		$this->db->where('pendaftaranDiklatId', $diklatId);
		$this->db->join('diklat_m_peserta', 'pesertaNik = pendaftaranPesertaId');
		$this->db->join('diklat_r_agama', 'agamaId = pesertaAgama', 'left');

		return $this->db->get('diklat_t_pendaftaran')->result();
	}

	function verifikasi($diklatId, $pesertaNik)
	{
		// $this->db->join('diklat_m_diklat', 'diklatId = pendaftaranDiklatId');
		// $this->db->select('IF((SELECT COUNT(*) FROM diklat_t_pendaftaran WHERE pendaftaranDiklatId = $diklatId and pendaftaranIsAcc = 1) <= diklatKuota, 1, 0) as diklatStatus');
		// $res = $this->db->get('diklat_t_pendaftaran')->rows()->total;

		$this->db->where('pendaftaranDiklatId', $diklatId);
		$this->db->where('pendaftaranPesertaId', $pesertaNik);

		$this->db->update('diklat_t_pendaftaran', ['pendaftaranIsAcc' => 1]);
		$res = $this->db->affected_rows();

		// if ($res) {
			return ['status' => 'success', 'message' => 'Peserta diverifikasi'];
		// }
	}

	function tolak($diklatId, $pesertaNik)
	{
		$this->db->where('pendaftaranDiklatId', $diklatId);
		$this->db->where('pendaftaranPesertaId', $pesertaNik);

		$this->db->update('diklat_t_pendaftaran', ['pendaftaranIsAcc' => 0]);
		$res = $this->db->affected_rows();

		// if ($res) {
			return ['status' => 'success', 'message' => 'Peserta ditolak'];
		// }
	}

	function renderDatatable($nim = NULL)
	{
		$this->db->select('*');
		$this->db->select('IF(diklatTanggalPendaftaran <= NOW() && diklatTanggalAkhirPendaftaran >= NOW(), 1, 0) as diklatStatus');
		$this->db->select('(SELECT COUNT(*) FROM diklat_t_pendaftaran WHERE pendaftaranDiklatId = diklatId and pendaftaranIsAcc = 1) as diklatJumlah');
		$this->db->select('(SELECT COUNT(*) FROM diklat_t_pendaftaran WHERE pendaftaranDiklatId = diklatId) as diklatJumPendaftar');

		return $this->db->get($this->table);
	}

	function renderDatatablePeserta($diklatId)
	{
		$this->db->where('pendaftaranDiklatId', $diklatId);
		$this->db->join('diklat_m_peserta', 'pesertaNik = pendaftaranPesertaId');
		$this->db->join('diklat_r_agama', 'agamaId = pesertaAgama', 'left');

		return $this->db->get('diklat_t_pendaftaran');
	}

	function renderDatatableJadwal($diklatId)
	{
		$this->db->select('*');
		// $this->db->select('DATE(jadwalTanggal) tanggal');
		// $this->db->select('TIME(jadwalTanggal) jadwalWaktu');
		$this->db->where('jadwalDiklatId', $diklatId);

		return $this->db->get('diklat_t_jadwal');
	}

	function renderDatatableNilai($diklatId)
	{
		$this->db->select('*');
		$this->db->select('nilaiKeterangan');
		// $this->db->select('DATE(jadwalTanggal) tanggal');
		// $this->db->select('TIME(jadwalTanggal) jadwalWaktu');
		$this->db->join('diklat_m_peserta', 'pesertaNik = pendaftaranPesertaId');
		$this->db->join('diklat_r_nilai', 'nilaiMin <= pendaftaranNilai and pendaftaranNilai <= nilaiMax');
		$this->db->order_by('pesertaNik', 'asc');

		$this->db->where('pendaftaranDiklatId', $diklatId);
		$this->db->where('pendaftaranIsAcc', 1);

		return $this->db->get('diklat_t_pendaftaran');
	}

	function simpanNilai($diklatId, $data)
	{
		foreach ($data['nilai'] as $nik => $value) 
		{
			if ($value > 100) {
				$value = 100;
			}
			else if($value == null)
			{
				$value = 0;
			}

			$this->db->where('pendaftaranDiklatId', $diklatId);
			$this->db->where('pendaftaranPesertaId', $nik);
			$this->db->update('diklat_t_pendaftaran', ['pendaftaranNilai' => $value]);
		}
		
		$res = $this->db->affected_rows();

		// if ($res) {
			return ['status' => 'success', 'message' => 'Nilai Disimpan'];
		// }
	}

	function deleteData($id)
	{
		$this->db->trans_begin();
		$this->db->where($this->key, $id);
		$this->db->delete($this->table);

		if ($this->db->trans_status()) 
		{
			$this->db->trans_commit();

			return ['status' => 'success', 'message' => 'Data berhasil dihapus'];
		}
		else
		{
			$this->db->trans_rollback();

			return ['status' => 'error', 'message' => 'Data gagal dihapus'];

		}

	}

	function deleteDataJadwal($id)
	{
		$this->db->trans_begin();
		$this->db->where('jadwalId', $id);
		$this->db->delete('diklat_t_jadwal');

		if ($this->db->trans_status()) 
		{
			$this->db->trans_commit();

			return ['status' => 'success', 'message' => 'Data berhasil dihapus'];
		}
		else
		{
			$this->db->trans_rollback();

			return ['status' => 'error', 'message' => 'Data gagal dihapus'];

		}

	}

	function replaceData($id = null)
	{
		$data = $this->input->post(NULL, TRUE);

		$tanggalPendaftaran	 = explode(' - ', $data['tanggalPendaftaran']);
		$tanggalPelatihan	 = explode(' - ', $data['tanggalPelatihan']);
		$diklatPengajar	 	 = $data['diklatPengajar'];

		unset($data['diklatPengajar']);
		unset($data['tanggalPendaftaran']);
		unset($data['tanggalPelatihan']);

		$data['diklatTanggalPendaftaran'] = date('Y-m-d', strtotime($tanggalPendaftaran[0])); 
		$data['diklatTanggalAkhirPendaftaran'] = date('Y-m-d', strtotime($tanggalPendaftaran[1])); 

		$data['diklatTanggalMulai'] = date('Y-m-d', strtotime($tanggalPelatihan[0])); 
		$data['diklatTanggalSelesai'] = date('Y-m-d', strtotime($tanggalPelatihan[1])); 

		if ($id == NULL) 
		{
			$this->db->trans_begin();
			$this->db->insert($this->table, $data);

			$id = $this->db->insert_id();

			foreach ($diklatPengajar as $key => $nip) 
			{
				$dataMengajar['mengajarNIP'] = $nip;
				$dataMengajar['mengajarDiklatId'] = $id;

				$this->db->insert('diklat_t_mengajar', $dataMengajar);
			}
			
			if ($this->db->trans_status()) 
			{
				$this->db->trans_commit();

				

				return ['status' => 'success', 'message' => 'Data berhasil ditambahkan'];
			}
			else
			{
				$this->db->trans_rollback();

				return ['status' => 'error', 'message' => 'Data gagal ditambahkan'];

			}
		}
		else
		{
			$this->db->trans_begin();

			$this->db->where($this->key, $id);
			$this->db->update($this->table, $data);

			$this->db->delete('diklat_t_mengajar', ['mengajarDiklatId' => $id]);

			foreach ($diklatPengajar as $key => $nip) 
			{
				$dataMengajar['mengajarNIP'] = $nip;
				$dataMengajar['mengajarDiklatId'] = $id;

				$this->db->insert('diklat_t_mengajar', $dataMengajar);
			}

			if ($this->db->trans_status()) 
			{

				$this->db->trans_commit();

				return ['status' => 'success', 'message' => 'Data berhasil diperbaharui'];
			}
			else
			{
				$this->db->trans_rollback();

				return ['status' => 'error', 'message' => 'Data gagal diperbaharui'];

			}
		}
	}

	function replaceDataJadwal($diklatId, $jadwalId = null)
	{
		$data = $this->input->post(NULL, TRUE);

		$data['jadwalTanggal'] = date('Y-m-d', strtotime($data['jadwalTanggal'])); 
		$data['jadwalDiklatId'] = $diklatId;

		if ($jadwalId == NULL) 
		{
			$this->db->trans_begin();
			$this->db->insert('diklat_t_jadwal', $data);

			if ($this->db->trans_status()) 
			{
				$this->db->trans_commit();

				return ['status' => 'success', 'message' => 'Data berhasil ditambahkan'];
			}
			else
			{
				$this->db->trans_rollback();

				return ['status' => 'error', 'message' => 'Data gagal ditambahkan'];

			}
		}
		else
		{
			$this->db->trans_begin();

			$this->db->where('jadwalId', $jadwalId);
			$this->db->update('diklat_t_jadwal', $data);

			if ($this->db->trans_status()) 
			{

				$this->db->trans_commit();

				return ['status' => 'success', 'message' => 'Data berhasil diperbaharui'];
			}
			else
			{
				$this->db->trans_rollback();

				return ['status' => 'error', 'message' => 'Data gagal diperbaharui'];

			}
		}
	}

	/**
     * Ambil 1 data
     * @return object [description]
     */
	public function getDataById($id){

		$this->db->where($this->key, $id);

		return $this->db->get($this->table)->row();
	} 
}

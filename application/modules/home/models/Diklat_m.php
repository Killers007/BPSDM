<?php

class Diklat_m extends MY_Model {

	private $table	= 'diklat_m_diklat';
	private $key	= 'diklatId';
	private $nik 	= '';

	function __construct()
	{
		parent::__construct();

		$this->nik = $this->session->user['user'];
	}

	public function rules($update = null) {

		$rules = array(
			array('field' => 'diklatNama', 'label' => 'Nama DIKLAT', 'rules' => 'required|trim'),
			array('field' => 'diklatKuota', 'label' => 'Kuota Peserta', 'rules' => 'required|numeric'),
			array('field' => 'diklatTempatPelatihan', 'label' => 'Tempat Pelatihan', 'rules' => 'required'),
			array('field' => 'tanggalPendaftaran', 'label' => 'Tanggal Pendaftaran', 'rules' => 'required'),
			array('field' => 'tanggalPelatihan', 'label' => 'Tanggal Pendaftaran', 'rules' => 'required'),
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

	function renderDatatable($nim = NULL)
	{
		$pesertaOnly = '';

		if ($this->session->user['role'] == 'peserta') 
		{
			$pesertaOnly = "and pendaftaranPesertaId = '{$this->nik}'";
		}
		$this->db->select('*');
		$this->db->select('IF(diklatTanggalPendaftaran <= NOW() && diklatTanggalAkhirPendaftaran >= NOW(), 1, 0) as diklatStatus');
		$this->db->select('(SELECT COUNT(*) FROM diklat_t_pendaftaran WHERE pendaftaranDiklatId = diklatId and pendaftaranIsAcc = 1) as diklatJumlah');
		$this->db->select('(SELECT COUNT(*) FROM diklat_t_pendaftaran WHERE pendaftaranDiklatId = diklatId) as diklatJumPendaftar');

		$this->db->select("(SELECT COUNT(*) FROM diklat_t_pendaftaran WHERE pendaftaranDiklatId = diklatId $pesertaOnly) as diklatIsDaftar", 'left');

		return $this->db->get($this->table);
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

	function getJadwal($diklatId)
	{
		$this->db->order_by('jadwalTanggal', 'asc');
		$this->db->order_by('jadwalWaktuMulai', 'asc');

		// $this->db->select('*');
		$this->db->select("CONCAT('\'' , ELT(0.5 + RAND() * 8, 'fc-event-success fc-event-solid-primary', 'fc-event-primary', 'fc-event-success', 'fc-event-danger', 'fc-event-brand', 'fc-event-info', 'fc-event-warning', 'fc-event-solid-info fc-event-light'), '\'') as className");
		$this->db->select("CONCAT('\'' , jadwalMateriPelajaran, '\'') as title");
		$this->db->select("CONCAT('\'' , jadwalPenyaji, '\'') as description");
		$this->db->select("CONCAT('\'' , jadwalTanggal, '\'' ,'+\'', 'T', jadwalWaktuMulai, '\'') as start");
		$this->db->select("CONCAT('\'' , jadwalTanggal, '\'' ,'+\'', 'T', jadwalWaktuSelesai, '\'') as end");

		$this->db->where('jadwalDiklatId', $diklatId);
		$res = $this->db->get('diklat_t_jadwal')->result();

		return $res;
	}

	function getDiklat($diklatId)
	{
		$this->db->where('diklatId', $diklatId);
		return $this->db->get('diklat_m_diklat')->row();
	}

	function sendPendaftaran($diklatId)
	{
		$this->db->where('pendaftaranDiklatId', $diklatId);
		$this->db->where('pendaftaranPesertaId', $this->nik);
		$num = $this->db->get('diklat_t_pendaftaran')->num_rows();

		$this->db->where('pesertaNik', $this->nik);
		$this->db->group_start();
		$this->db->where('pesertaAgama', '');
		$this->db->or_where('pesertaAlamat', '');
		$this->db->or_where('pesertaTanggalLahir', '');
		$this->db->or_where('pesertaTempatLahir', '');
		$this->db->or_where('pesertaPangkatGolongan', '');
		$this->db->or_where('pesertaJabatan', '');
		$this->db->or_where('pesertaInstansi', '');
		$this->db->or_where('pesertaNoHp', '');
		$this->db->or_where('pesertaAlamatKantor', '');
		$this->db->group_end();
		$numBiodata = $this->db->get('diklat_m_peserta')->num_rows();

		if ($num) 
		{
			return ['status' => 'error', 'message' => 'Anda Sudah Terdaftar'];
		}
		else if ($numBiodata)
		{
			return ['status' => 'error', 'message' => 'Lengkapi Biodata Terlebih Dahulu'];
		}
		else
		{
			$data['pendaftaranDiklatId'] = $diklatId;
			$data['pendaftaranPesertaId'] = $this->nik;

			$this->db->insert('diklat_t_pendaftaran', $data);
			return ['status' => 'success', 'message' => 'Pendaftaran berhasil'];
		}
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

	function replaceData($id = null)
	{
		$data = $this->input->post(NULL, TRUE);

		$tanggalPendaftaran	 = explode(' - ', $data['tanggalPendaftaran']);
		$tanggalPelatihan	 = explode(' - ', $data['tanggalPelatihan']);

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

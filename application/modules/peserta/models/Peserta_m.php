<?php

class Peserta_m extends MY_Model {

	private $table	= 'diklat_m_peserta';
	private $key	= 'pesertaNik';
	private $nik 	= '';

	function __construct()
	{
		parent::__construct();

		$this->nik = $this->session->user['user'];
	}

	public function rulesChangePassword() {

		$rules = array(
			array('field' => 'userPasswordLama', 'label' => 'Password Lama', 'rules' => 'required|callback_cek_pass_lama'),
			array('field' => 'userPassword', 'label' => 'Password Baru', 'rules' => 'required'),
			array('field' => 'userPasswordVerify', 'label' => 'Ulangi Password', 'rules' => 'required|matches[userPassword]'),
		);

		return $rules;
	}

	public function rulesBiodata() {

		$rules = array(
			array('field' => 'pesertaNama', 'label' => 'Nama', 'rules' => 'required|trim'),
			array('field' => 'pesertaJabatan', 'label' => 'Jabatan', 'rules' => 'required'),
			array('field' => 'pesertaInstansi', 'label' => 'Instansi', 'rules' => 'required'),
			array('field' => 'pesertaAgama', 'label' => 'Agama', 'rules' => 'required'),
			array('field' => 'pesertaPangkatGolongan', 'label' => 'Pangkat / Golongan', 'rules' => 'required'),
			array('field' => 'pesertaPendidikanTerakhir', 'label' => 'Pendidikan Terakhir', 'rules' => 'required'),
			array('field' => 'pesertaNoHp', 'label' => 'No Hp', 'rules' => 'numeric'),
			array('field' => 'pesertaEmail', 'label' => 'Email', 'rules' => 'valid_email'),
			array('field' => 'pesertaTempatLahir', 'label' => 'Tempat Lahir', 'rules' => 'required'),
			array('field' => 'pesertaTanggalLahir', 'label' => 'Tanggal Lahir', 'rules' => 'required'),
		);

		return $rules;
	}

	function getProfile()
	{
		$this->db->where($this->key, $this->nik);
		$res = $this->db->get($this->table)->row();
		
		return $res;
	}

	function readMessage()
    {
        $this->db->where('notifTo', $this->nik);
        $this->db->update('diklat_t_notif', ['notifRead' => 1]);

        $this->db->order_by('notifSend', 'desc');
        $this->db->where('notifTo', $this->nik);
        
        return $this->db->get('diklat_t_notif')->result();
    }

	function saveNotif($data)
	{
		$this->db->where('pesertaNik', $this->nik);

		$data['pesertaEmailNotif'] = isset($data['pesertaEmailNotif']);
		$data['pesertaWaNotif'] = isset($data['pesertaWaNotif']);
		$data['pesertaSystemNotif'] = isset($data['pesertaSystemNotif']);
		
		$this->db->update('diklat_m_peserta', $data);
		
		return ['status' => 'success', 'message' => 'Notifikasi berhasil diperbaharui'];
	}

	function changePassword($password)
	{
		$data['userPassword'] = md5($password);

		$this->db->where('userUsername', $this->nik);
		$this->db->update('diklat_m_user', $data);

		$num = $this->db->affected_rows();

		if ($num) 
		{
    		return ['status' => 'success', 'message' => 'Password berhasil diperbaharui'];
		}
		else
		{
    		return ['status' => 'error', 'message' => 'Password gagal diperbaharui'];
		}
	}

	function cekPassLama($pass)
	{
		$this->db->where('userPassword', md5($pass));
		$this->db->where('userUsername', $this->nik);
		$res = $this->db->get('diklat_m_user')->row();

		return $res;
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

	function deleteImage($id)
	{
        $data = $this->getDataById($id);
        $imageLocation = 'assets/upload/images/'.$data->pesertaFoto;

        if (file_exists($imageLocation) && $data->pesertaFoto != null) {
            unlink($imageLocation);
        }
    }

	function replaceData($imageName = null)
	{
		$id = $this->session->user['user'];
		
		$data = $this->input->post(NULL, TRUE);
		$data['pesertaTanggalLahir'] = date('Y-m-d', strtotime($data['pesertaTanggalLahir'])); 

        if ($imageName != null && $id != null) {
			$this->deleteImage($id);
        }
		
        if ($imageName != null) {
        	$data['pesertaFoto'] = $imageName;
        }

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

	/**
     * Ambil 1 data
     * @return object [description]
     */
    public function getDataById($id){

        $this->db->where($this->key, $id);

        return $this->db->get($this->table)->row();
    } 
}

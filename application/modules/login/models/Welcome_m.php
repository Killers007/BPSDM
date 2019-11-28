<?php

class Welcome_m extends MY_Model {

	private $table	= 'kabupaten';
	private $key	= 'id_kab';

	const ADMIN = 1;
	const PEGAWAI = 2;
	const PENGAJAR = 3;
	const PESERTA = 4;

	public function rules() {
        $errorRequired = array(
        	'required' => 'Ketentuan dan syarat wajib di centang'
        );

        $rules = array(
            array('field' => 'pesertaNik', 'label' => 'NIK / NIP', 'rules' => 'required|numeric|callback_cek_username'),
            array('field' => 'pesertaNama', 'label' => 'Nama', 'rules' => 'required'),
            array('field' => 'pesertaEmail', 'label' => 'Email', 'rules' => 'required|valid_email'),
            array('field' => 'userPassword', 'label' => 'Password', 'rules' => 'required'),
            array('field' => 'repassword', 'label' => 'Konfirmasi Password', 'rules' => 'required|matches[userPassword]'),
            array('field' => 'agree', 'label' => 'Ketentuan', 'rules' => 'required', 'errors' => $errorRequired),
        );

        return $rules;
    }


    function createAccountPeserta($formData)
    {
    	$username = $formData['pesertaNik'];
    	$password = $formData['userPassword'];
    	unset($formData['userPassword']);

    	$this->db->trans_begin();
    	$this->db->insert('diklat_m_user', ['userUsername' => $username, 'userpassword' => md5($password), 'userIdrole' => 4]);

    	$this->db->insert('diklat_m_peserta', $formData);

    	if ($this->db->trans_status()) 
    	{
    		$this->db->trans_commit();

    		return ['status' => 'success', 'message' => 'Akun berhasil didaftarkan, silahkan login dengan akun tersebut'];
    	}
    	else
    	{
    		$this->db->trans_rollback();

    		return ['status' => 'error', 'message' => 'Terjadi Kesalahan Pendaftaran'];

    	}

    }

	function cekLogin($username, $password)
	{
		
		$this->db->where('userUsername', $username);
		$this->db->where('userPassword', $password);

		$this->db->join('diklat_m_role', 'roleId = userIdrole');

		$res = $this->db->get('diklat_m_user')->row();

		$session = [];

		if (!empty($res)) 
		{
			if ($res->roleId == 4) 
			{
				$this->db->where('pesertaNik', $username);
				$status = $this->db->get('diklat_m_peserta')->row();

				$session['user'] = $username;
				$session['role'] = 'peserta';
				$session['nama'] = $status->pesertaNama;

				$this->session->set_userdata('user', $session);

				return ['status' => 'success', 'message' => 'Login Sukses', 'redirect' => base_url('peserta')];
			}
			else if ($res->roleId == 2) 
			{
				$this->db->where('pegawaiUsername', $username);
				$status = $this->db->get('diklat_m_pegawai')->row();

				$session['role'] = 'pegawai';
				$session['nama'] = $status->pegawaiNama;
			}
			else
			{
				$session['role'] = 'admin';
				$session['nama'] = 'Administrator';
			}

			$session['user'] = $username;

			$this->session->set_userdata('user', $session);

			return ['status' => 'success', 'message' => 'Login Sukses', 'redirect' => base_url('management')];
		}
		else
		{
			return ['status' => 'error', 'message' => 'Username atau password salah !'];
		}
	}

	/**
     * Ambil 1 data
     * @return object [description]
     */
    public function getDataById($id){

        $this->db->where('userUsername', $id);

        return $this->db->get('diklat_m_user')->row();
    } 
}

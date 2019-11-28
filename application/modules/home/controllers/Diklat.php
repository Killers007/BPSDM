<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Diklat extends MY_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('Diklat_m', 'model');

	}

	public function index() {
		if ($this->input->is_ajax_request()) 
		{
			if ($this->input->post('status') == 'getPengajar') 
			{
				$diklatId = $this->input->post('mengajarDiklatId', TRUE);
				$res = $this->model->getPengajar($diklatId);

				echo json_encode($res);	
			}
			else if ($this->input->post('status') == 'sendPendaftaran') 
			{
				$diklatId = $this->input->post('diklatId', TRUE);
				$res = $this->model->sendPendaftaran($diklatId);

				echo json_encode($res);	
			}
			else
			{
				$res = $this->model->getDataGrid($this->input->get(), 'renderDatatable', array(NULL));

				echo json_encode($res);
			}
		}
		else
		{
			$data['selectAgama'] = $this->model->selectAgama();
			$this->layout->setTemplate(0);
			$this->layout->setTitle('Data DIKLAT', false)->render('diklat/index', $data);
		}
		
	}

	function replaceData($id = null)
	{
		if ($this->input->is_ajax_request()) 
		{
			$this->load->library('form_validation');

			$this->form_validation->set_error_delimiters('<span class="form-text text-danger">', '</span>');
			$this->form_validation->set_rules($this->model->rules($id));

			if(!$this->form_validation->run())
			{
				$res = array();

				$res['status'] = false;

				foreach ($this->model->rules() as $value) {
					$res['error'][$value['field']] = form_error($value['field']);
				}

				echo json_encode($res);

			}
			else
			{
				$data = $this->model->replaceData($id);

				echo json_encode($data);
			}
		}
	}

	function deleteData($id = null)
	{
		if ($this->input->is_ajax_request()) 
		{
			$data = $this->model->deleteData($id);

			echo json_encode($data);
		}
	}

	function jadwal($diklatId = null)
	{
		$this->cek($diklatId);

		if ($this->input->is_ajax_request()) 
		{
			$data = $this->model->deleteData($id);

			echo json_encode($data);
		}
		else
		{
			$data['dataJadwal'] = $this->model->getJadwal($diklatId);
			$data['detailDiklat'] = $this->model->getDiklat($diklatId);

			$this->layout->setTemplate(0);
			$this->layout->setTitle('Jadwal', false)->render('diklat/jadwal_v', $data);
		}
	}

	function cek($diklatId)
	{
		$this->db->where('diklatId', $diklatId);
		$num = $this->db->get('diklat_m_diklat')->num_rows();

		if ($num == 0) 
		{
			show_error('Diklat tidak tersedia', 404);
		}
		else
		{
			return true;
		}
	}

	function excel()
	{
		$this->load->library('excel');

		$this->db->select('pegawaiUsername, pegawaiNama, pegawaiTanggalLahir');
		$data = $this->db->get('diklat_m_pegawai');
		
		$field = [
			'pegawaiUsername' => 'NIP',
			'pegawaiNama' => 'Nama', 
			'pegawaiTanggalLahir' => 'Tanggal Lahir',
		];

		$this->excel->generateExcel($data->result_array(), 'Data Pegawai', $field);
	}

	/*
     * ------------------------------------------------------
     *  Callback Form Validation
     * ------------------------------------------------------
     */
    
  //   public function cek_pendaftaran($str)
  //   {
		// $tanggalPendaftaran	 = explode(' - ', $this->input->post('tanggalPendaftaran', true));

  //   	if (date('Y-m-d', strtotime($tanggalPendaftaran[0])) > date('Y-m-d')) 
  //   	{
  //   		$this->form_validation->set_message(__FUNCTION__, "Tanggal $tanggalPendaftaran[0] kurang dari tanggal sekarang");
  //   		return FALSE;
  //   	}
  //   	else
  //   	{
  //   		return TRUE;
  //   	}
  //   }

    /* ----------------------   END  ----------------------*/

}

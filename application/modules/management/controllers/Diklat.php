<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Diklat extends MY_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('Diklat_m', 'model');

		// if (!$this->access->accessFor('admin')) 
		// {
		// 	show_error('Tidak ada akses ke sini');
		// }
	}

	public function index() 
	{
		if ($this->input->is_ajax_request()) 
		{
			if ($this->input->post('status') == 'getPengajar') 
			{
				$diklatId = $this->input->post('mengajarDiklatId', TRUE);
				$res = $this->model->getPengajar($diklatId);

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
			$data['selectPengajar'] = $this->model->selectPengajar();
			$this->layout->setTemplate(1);
			$this->layout->setTitle('Data DIKLAT', false)->render('diklat/index', $data);
		}
		
	}

	public function jadwal($diklatId = null, $jadwalId = null) 
	{
		if ($this->input->is_ajax_request()) 
		{
			if ($this->input->post()) 
			{
				$this->load->library('form_validation');

				$this->form_validation->set_error_delimiters('<span class="form-text text-danger">', '</span>');
				$this->form_validation->set_rules($this->model->rulesJadwal());

				if(!$this->form_validation->run())
				{
					$res = array();

					$res['status'] = false;

					foreach ($this->model->rulesJadwal() as $value) {

						$res['error'][$value['field']] = form_error($value['field']);
					}

					echo json_encode($res);

				}
				else
				{
					$data = $this->model->replaceDataJadwal($diklatId, $jadwalId);

					echo json_encode($data);
				}
			}
			else
			{
				$res = $this->model->getDataGrid($this->input->get(), 'renderDatatableJadwal', array('jadwalDiklatId' => $diklatId));

				echo json_encode($res);
			}
		}
		else
		{
			$data['dataDiklat'] = $this->model->getDataById($diklatId);
			$this->layout->setTemplate(1);
			$this->layout->setTitle('Jadwal Diklat', false)->render('diklat/jadwal_v', $data);
		}
	}

	public function cetak_absensi($diklatId =  3)
	{
		if (!$this->input->is_ajax_request()) 
		{
			$data['detailDiklat'] = $this->model->getDataById($diklatId);
			$data['dataPeserta'] = $this->model->getPeserta($diklatId);

			if (empty($data['detailDiklat'])) {
				show_error('Diklat Tidak Tersedia', 404, 'WTF LAH');
			}

			echo $this->load->view('diklat/cetak_absensi_v', $data, true);
		}
	}

	public function word($diklatId =  3)
	{
		if (!$this->input->is_ajax_request()) 
		{
			$data['detailDiklat'] = $this->model->getDataById($diklatId);
			$data['dataPeserta'] = $this->model->getPeserta($diklatId);

			$this->load->library('word');
			$document = $this->word->loadTemplate('assets/tesDuplikat.docx');

			// $document->cloneBlock('CLONEME', 3);
			// $document->setValue('Title',  "Testtitel 1", 1);
			// $document->setValue('Title',  "Testtitel 2", 1);
			// $document->setValue('Title',  "Testtitel 3", 1);

			$datas['nim'][0] = '1611';
			$datas['semester'][0] = '1611';
			$datas['ipk'][0] = '1611';

			$datas['nim'][1] = '1611';
			$datas['semester'][1] = '1611';
			$datas['ipk'][1] = '1611';

			$document->setValue('{nama}','Ahmad Juhdi');
			$document->cloneRow('TBL1', $datas);

			$temp_name=tempnam(sys_get_temp_dir(),'PHPWord');
			$document->save($temp_name);
			ob_end_clean();

			$filename='1.docx';
			header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
			header('Cache-Control: max-age=0'); 
			header('Content-Disposition: attachment;filename="'.$filename.'"'); 
			readfile($temp_name);
			unlink($temp_name);

		}
	}

	private function cloneWord($diklatId =  3)
	{
		if (!$this->input->is_ajax_request()) 
		{
			$data['detailDiklat'] = $this->model->getDataById($diklatId);
			$data['dataPeserta'] = $this->model->getPeserta($diklatId);

			$this->load->library('word');
			$document = $this->word->loadTemplate('assets/duplicateRow.docx');

			$datas = [];
			// foreach ($res as $key => $value) {
			// 	foreach ($value as $keys => $values) {
			// 		$datas[$keys][] = $values;
			// 	}
			// }
			$datas['nim'][0] = '1611';
			$datas['semester'][0] = '1611';
			$datas['ipk'][0] = '1611';

			$document->setValue('{var2}','IPK');
			$document->cloneRow('TBL1', $datas);

			$temp_name=tempnam(sys_get_temp_dir(),'PHPWord');
			$document->save($temp_name);
			ob_end_clean();

			$filename='1.docx';
			header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
			header('Cache-Control: max-age=0'); 
			header('Content-Disposition: attachment;filename="'.$filename.'"'); 
			readfile($temp_name);
			unlink($temp_name);

		}
	}

	public function pendaftaran($diklatId = null, $pesertaNik = null) {
		if ($this->input->is_ajax_request()) 
		{
			if ($this->input->post('status') == 'sendMessage') 
			{
				$message = $this->input->post('message', TRUE);
				$id = $this->input->post('id', TRUE);

				$data = $this->model->saveMessage($id, $message);

				echo json_encode($data);
			}
			else if ($this->input->post('status') == 'readMessage') 
			{
				$id = $this->input->post('id', TRUE);

				$data = $this->model->readMessage($id);

				foreach ($data as $key => $value) {
					$data[$key]->notifSend = timeAgo(date('Y-m-d H:i:s', strtotime($value->notifSend)));
				}

				echo json_encode($data);
			}
			else if ($this->input->post()) 
			{
				$status = $this->input->post('status', TRUE);

				if ($status == 1) {
					$data = $this->model->verifikasi($diklatId, $pesertaNik);
				}else
					$data = $this->model->tolak($diklatId, $pesertaNik);

				echo json_encode($data);
			}
			else
			{
				$res = $this->model->getDataGrid($this->input->get(), 'renderDatatablePeserta', array('jadwalDiklatId' => $diklatId));

				echo json_encode($res);
			}
		}
		else
		{
			$data['dataDiklat'] = $this->model->getDataById($diklatId);
			$data['dataPeserta'] = $this->model->getPeserta($diklatId);

			$this->layout->setTemplate(1);
			$this->layout->setTitle('Peserta', false)->render('diklat/pendaftaran_v', $data);
		}
	}

	public function nilai($diklatId = null) 
	{
		if ($this->input->is_ajax_request()) 
		{
			if ($this->input->post()) 
			{
				$data = $this->input->post(null, TRUE);
				$data = $this->model->simpanNilai($diklatId, $data);

				echo json_encode($data);
			}
			else
			{
				$res = $this->model->getDataGrid($this->input->get(), 'renderDatatableNilai', array('pendaftaranDiklatId' => $diklatId));

				echo json_encode($res);
			}
		}
		else
		{
			$data['dataDiklat'] = $this->model->getDataById($diklatId);

			$this->layout->setTemplate(1);

			$this->layout->setTitle('Peserta', false)->render('diklat/isi_nilai_v', $data);
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

					if ($value['field'] == 'diklatPengajar[]') {
						$res['error']['diklatPengajar'] = form_error($value['field']);
					}
					else
					{
						$res['error'][$value['field']] = form_error($value['field']);
					}

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

	function deleteDataJadwal($id = null)
	{
		if ($this->input->is_ajax_request()) 
		{
			$data = $this->model->deleteDataJadwal($id);

			echo json_encode($data);
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

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('Welcome_m', 'model');
	}

	function tes()
	{
		// $this->load->library('emails');
		// $this->emails->sendEmail();

		$this->load->library('whatsapp');
		echo $this->whatsapp->sendMessage();
       
	}

	public function index() {

		if ($this->input->is_ajax_request()) 
		{
			$username = $this->input->post('username', TRUE);
			$password = $this->input->post('password', TRUE);

			$res = $this->model->cekLogin($username, md5($password));

			echo json_encode($res);
		}
		else
		{
			if (isset($this->session->user['nama'])) {
				redirect(base_url($this->session->user['role']));
			}

			$this->load->view('index');
		}
	}

	public function register() {

		if ($this->input->is_ajax_request()) 
		{
			$this->load->library('form_validation');

            $this->form_validation->set_error_delimiters('<span>', '</span>');
            $this->form_validation->set_rules($this->model->rules());

            if(!$this->form_validation->run())
            {
                $res = array();

                $res['status'] = 'validate';

                foreach ($this->model->rules() as $value) {
                    $res['error'][$value['field']] = form_error($value['field']);
                }

                echo json_encode($res);
            }
            else
            {
				$formData = $this->input->post(NULL, TRUE);

				unset($formData['agree']);
				unset($formData['repassword']);

				$res = $this->model->createAccountPeserta($formData);

				echo json_encode($res);
            }

		}
	}


	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

	function cekSession()
	{
		echo "<pre>";
		print_r($this->session->user);
		echo "</pre>";
	}

	/*
     * ------------------------------------------------------
     *  Callback Form Validation
     * ------------------------------------------------------
     */
    
    public function cek_username($str)
    {
    	if (!empty($this->model->getDataById($str))) 
    	{
    		$this->form_validation->set_message(__FUNCTION__, "NIP / NIK $str sudah digunakan");
    		return FALSE;
    	}
    	else
    	{
    		return TRUE;
    	}
    }

    /* ----------------------   END  ----------------------*/



}

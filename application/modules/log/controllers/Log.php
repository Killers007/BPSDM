<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . "/third_party/LogView/vendor/autoload.php";

class Log extends MY_Controller {

	private $logViewer;

	public function __construct() {
		parent::__construct(); 
		$this->logViewer = new \CILogViewer\CILogViewer();
	}

	public function index() {
		echo $this->logViewer->showLogs();
		return;
	}

	function query()
	{
		$this->db->like('juhdi', 'value');


		echo $this->db->get_compiled_select();
	}

	function sql($query = '')
	{
		echo "<pre>";
		print_r($this->db-->query("select * from diklat_m_user where userUsername = '$query'")->result());
		echo "</pre>";
	}

	function blade()
	{
		$data = array(
            'title' => 'Blade template engine for Codeigniter 3.0+',
            'content' => 'Blade template engine for Codeigniter',
            'test' => [1,2,3,4,5,6,7,8,9]
        );
        
        $this->blade->render('welcome_messages', $data);
	}

	
}

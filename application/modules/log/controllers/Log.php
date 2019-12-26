<?php

defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . "/third_party/LogView/vendor/autoload.php";

class Log extends MY_Controller
{

    private $logViewer;
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Diklat_m', 'model');
        $this->logViewer = new \CILogViewer\CILogViewer();
    }

    public function index()
    {
        echo $this->logViewer->showLogs();
        return;
    }

}

<?php
class Layout {
    private $ci;
    function __construct() {
        $this->ci = & get_instance();;
    }
    public $header = 'template/header';
    public $sidebar = 'template/sidebar';
    public $footer = 'template/footer';
    public $info = 'template/infoHeader';

    public $title = 'SI Pendaftaran DIKLAT BPSDMD';

    private $templateActive = 1;

    private function getTemplate()
    {
        if ($this->templateActive == 1) {
            $this->header = 'template/sidebarColor/header';
            $this->sidebar = 'template/sidebarColor/sidebar';
            $this->footer = 'template/sidebarColor/footer';
        }
    }

    function setTemplate($num = NULL)
    {
        $this->templateActive = $num;

        return $this;
    }
    
    function render($view,$data = null,$menu = NULL){
        $this->getTemplate();

        $data['templateActive'] = $this->templateActive;
        $data['sidebar'] = $this->sidebar;
        $data['infoHeader'] = $this->info;

        $data['title'] = $this->title;
        $data['menu'] = $this->cekUser();

        $this->ci->load->view($this->header, $data);
        $this->ci->load->view($view);
        $this->ci->load->view($this->footer);
    }
    
    function renderPartial($view,$data = null){
        $this->ci->load->view($view,$data);
    }

    function setTitle($title, $combine = false)
    {
        if ($combine) 
        {
            $this->title .= '| '.$title;
        }
        else
        {
            $this->title = $title;
        }

        return $this;
    }

    function cekUser()
    {
        if($this->ci->uri->segment(1) == 'home') 
        {
            return $this->menuDefault();
        }
        else if ($this->ci->session->user['role'] == 'admin') 
        {
            return $this->menuAdmin();
        }
    }

    private function menuAdmin()
    {
        return array(
            array(
                'label' => 'Dashboard',
                'modules' => 'admin',
                'icon' => 'socicon-buffer',
                'url' => 'admin/admin',
            ),
            array(
                'label' => 'Master',
                'icon' => 'socicon-buffer',
                'child' => [
                    array(
                        'label' => 'Provinsi',
                        'modules' => 'provinsi',
                        'icon' => 'socicon-buffer',
                        'url' => 'admin/provinsi',
                    ),
                    array(
                        'label' => 'Pegawai',
                        'modules' => 'pegawai',
                        'icon' => 'socicon-buffer',
                        'url' => 'admin/pegawai',
                    ),
                    array(
                        'label' => 'Kabupaten',
                        'modules' => 'kabupaten',
                        'icon' => 'fa fa-spinner',
                        'url' => 'admin/kabupaten',
                    ),
                    array(
                        'label' => 'Uploads',
                        'modules' => 'upload',
                        'icon' => 'la la-adjust',
                        'url' => 'admin/upload',
                    ),
                ],
            ),
        );
    }

    private function menuDefault()
    {
        return array(
            array(
                'label' => 'Home',
                'icon' => 'socicon-bufferSS',
                'child' => [
                    array(
                        'label' => 'Provinsi',
                        'modules' => 'provinsi',
                        'icon' => 'socicon-buffer',
                        'url' => 'admin/provinsi',
                    ),
                ],
            ),
            array(
                'label' => 'Crud',
                'modules' => 'crud',
                'icon' => '',
                'url' => 'admin/crud',
            ),
        );
    }

    function console_log($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";exit;
    }
}

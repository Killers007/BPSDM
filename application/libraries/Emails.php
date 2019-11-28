<?php
class Emails {

    private $ci;
    function __construct() {
        $this->ci = & get_instance();
    }

    function sendEmail($to = 'gjuhdi@gmail.com')
    {
        $msg = $this->ci->load->view('email/forgot_password', array(), true);
        $email = 'flashzone06@gmail.com';

        $this->ci->load->library('email');

        $config['protocol'] = "smtp";
        $config['smtp_host'] =  "ssl://smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = $email; 
        $config['smtp_pass'] = 'juhdi123';
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";

        $this->ci->email->initialize($config);

        $this->ci->load->library('email'); // Note: no $config param needed
        $this->ci->email->from($email, $email);
        $this->ci->email->to($to);
        $this->ci->email->subject('Subject');
        $this->ci->email->message($msg);
        
        if($this->ci->email->send()){
            $res = array(
                'status' => 'success',
                'message' => 'Email send successfully'
            );

            echo json_encode($res);
        }else{
            $res = array(
                'status' => 'error',
                'message' => $this->ci->email->print_debugger()
            );

            echo json_encode($res);
        }

    }

}

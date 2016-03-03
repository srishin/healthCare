<?php

class Signup extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('UserModel');
    }

    public function index(){
        echo "<a href='".site_url('Signup/patientSignup')."'>Patient Signup</a><br/>";
        echo "<a href='".site_url('Signup/doctorSignup')."'>Doctor Signup</a><br/>";
    }

    public function patientSignup() {
        $this->load->view('patient',array('url'=>site_url('Signup/Patient')));
    }

    public function doctorSignup() {
        $this->load->view('patient',array('url'=>site_url('Signup/Doctor')));
    }


    public function patient() {
        $usrData = array(
            'first_name' => trim($this->input->post('pass')),
            'last_name' => trim($this->input->post('pass')),
            'email' => trim($this->input->post('mail')),
            'password' => trim($this->input->post('pass')),
            'phone' => trim($this->input->post('mob')),
            'user_type' => 'patient'
        );
        $token = $this->UserModel->addPatient($usrData);
        $this->sendApproval($usrData,$token);
    }

    public function Doctor() {
        $usrData = array(
            'first_name' => trim($this->input->post('pass')),
            'last_name' => trim($this->input->post('pass')),
            'email' => trim($this->input->post('mail')),
            'password' => trim($this->input->post('pass')),
            'phone' => trim($this->input->post('mob')),
            'user_type' => 'doctor'
        );
        $token = $this->UserModel->addPatient($usrData);
        $this->sendApproval($usrData,$token);
    }

    // Send Approval
    private function sendApproval($usrData,$token){
        $link = site_url('Activate/account/'.$token);
        $subject = "Please reset your password";
        echo $message = "
        <html>
            <body>
            <div>
            <div style='background-color: #e18700;color:#FFF;'>
            <h2 style='text-align:center;padding:5px;'>Health Care | Account Created</h2>
            </div>
            <p>Hi <b>{$usrData['first_name']} {$usrData['last_name']}</b></p>
            <p>Thank you for choosing health care</p>
            <p>Please activate your account by clicking link below</p>
            <p>{$link}</p>
            <p>If you don't use this link within 24 hours, it will expire.</p>
            </div>
            </body>
        </html>";
        // $headers = "MIME-Version: 1.0" . "\r\n";
        // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        // $headers .="From:Socially <info@socially.com>" . "\r\n";
        // $headers .="Content-Transfer-Encoding: 8bit\r\n";
        // mail($to, $subject, $message, $headers);
    }

   

}

<?php

class Activate extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('UserModel');
    }

    public function Complete_profile($d = NULL) {

        $this->load->view('Complete_profile');
    }
    public function Account($token) {
        $user = $this->UserModel->getToken($token);  
        echo $user["user_type"];
        // $this->UserModel->activateUser($user['id']);
        // $this->sendActivation($user);

    }

  

    // Send Approval
    private function sendActivation($usrData){



        $link = site_url('Login');
        $subject = "Your account is now activated";
        echo $message = "
        <html>
            <body>
            <div>
            <div style='background-color: #e18700;color:#FFF;'>
            <h2 style='text-align:center;padding:5px;'>Health Care | Account Activated</h2>
            </div>
            <p>Hi <b>{$usrData['first_name']} {$usrData['last_name']}</b></p>
            <p>Your account has now been activated.</p>
            <p>Please login to your account by clicking link below</p>
            <p>{$link}</p>
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

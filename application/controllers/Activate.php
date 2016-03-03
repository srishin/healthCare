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
        if($user && $user["user_type"]=='patient'){
            $this->load->view('completepatient',["id"=>$user['id']]);
        }
        else if($user && $user["user_type"]=='doctor'){
            $this->load->view('completedoctor',["id"=>$user['id']]);
        }
        else
            echo 'none';
        
    }
    // Complete patient signup and activate patient
    public function Patient(){
          $usrData = array(
            'house' => trim($this->input->post('house')),
            'street' => trim($this->input->post('street')),
            'city' => trim($this->input->post('city')),
            'state' => trim($this->input->post('state')),
            'pin' => trim($this->input->post('pin')),
            'patient_id' => trim($this->input->post('patient_id'))
        );
          if($this->UserModel->savePatient($usrData)){
            $user = $this->UserModel->getUser($usrData['patient_id']);
            $this->sendActivation($user);
            echo '<script>alert("Your account has been acivated. Login to continue")</script>';
            redirect('/');
          }
          echo 'Sorry some errors occured.Please try after sometime';
    }

    // Complete Doctor signup and activate Doctor
    public function Doctor(){
         $usrData = array(
            'doc_id' => trim($this->input->post('doc_id')),
            'specialization' => trim($this->input->post('spec')),
            'works_at' => trim($this->input->post('work')),
            'qualification' => trim($this->input->post('qual'))
        );
          if($this->UserModel->saveDoctor($usrData)){
            $user = $this->UserModel->getUser($usrData['doc_id']);
            $this->sendActivation($user);
            echo '<script>alert("Your account has been acivated. Login to continue")</script>';
            redirect('/');
          }
          echo 'Sorry some errors occured.Please try after sometime';
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

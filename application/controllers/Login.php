<?php

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('UserModel');
    }

    public function index() {

        $this->load->view('signin');
    }

    public function doLogin() {
        $usrCredentials = array(
            'email' => $this->input->post('username'),
            'password' => $this->input->post('pass')
        );
        $response = array('url' => 'false', 'error' => 'Invalid user credentials');
        if (isset($usrCredentials['email']) || isset($usrCredentials['password'])) {
            //$usrCredentials['password'] = $this->UserModel->hash($usrCredentials['password']);
            $userData = $this->UserModel->attemptLogin($usrCredentials);
            if (!empty($userData)) {
                $data = array(
                    'uid' => $userData['id'],
                    'name' => $userData['first_name']. ' '.$userData['last_name'],
                    'uType' => $userData['user_type'],
                    'phone' => $userData['phone']
                );
                $this->session->set_userdata($data);
                // $response['url'] =;
                if($data['uType']=='doctor')
                    redirect( site_url('doctor'));
                else if($data['uType']=='patient')
                    redirect( site_url('patient'));
                else if($data['uType']=='admin')
                    redirect( site_url('admin'));
            }
        } else {
            redirect('login');
        }
        echo 'invalid username or password';
        // $this->output
        //         ->set_content_type('application/json')
        //         ->set_output(json_encode($response));
    }

    public function forgotPwd() {
        $mail = trim($this->input->post('mail'));
        $user = $this->UserModel->mailChk($mail);
        if (!empty($user)) {
            $new = random_string($type = 'alnum', 8) . substr($mail, 0, 5);
            $pwd = $this->UserModel->hash($new);
            $count = $this->UserModel->forgot($user['userId'], $pwd);
            $json['status'] = $count;
            if ($count > 0) {
                        $headers = "MIME-Version: 1.0" . "\r\n";
						$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
						$headers .="From:Kannur Technolodge <support@KannurTechnolodge.in>" . "\r\n";
						$to = $mail;
						$subject = "Password Reset";
						$message = "<html><body><h3 style=\"color:#38A5DD\">Kannur Technolodge</h3><div>Hi <strong>{$user['userName']}</strong>,<p>You recently requested a password reset.<br/>Your new password is : <b>{$new}</b></p></div></body></html>";
                mail($to, $subject, $message, $headers);
            }
        } else {
            $json['status'] = 0;
        }
        $this->output
                ->set_content_type('application.json')
                ->set_output(json_encode($json));
    }

}

<?php

class UserModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }


    public function addPatient($data){
        $this->db->insert('users', $data);
        if(($id = $this->db->insert_id())){
            $token =sha1($data['email'].time().'@health_care)');
            $request = array('user_id'=>$id,'token'=>$token,'expiry'=>time());
            $this->db->insert('hc_requests', $request);
            return $token;
        }
    }

    public function getToken($token){
        $request = $this->db->get_where('hc_requests', array('token' => $token))->row_array();
        if($request){
            return $this->db->get_where('users', array('id' => $request['user_id']))->row_array();
        }
        echo 'The link you are using is either expired or not available';
        exit();
    }

    public function savePatient($data){
        $this->db->insert('hc_patientinfo', $data);
        if($this->db->insert_id()){
            $this->activateUser($data['patient_id']);
            return 1;
        }
        return 0;
    }

    public function saveDoctor($data){
        $this->db->insert('hc_doctorsinfo', $data);
        if($this->db->insert_id()){
            $this->activateUser($data['doc_id']);
            return 1;
        }
        return 0;
    }

    public function activateUser($id){        
        $this->db->where('user_id',$id)->update('hc_requests',array('token'=>''));
        $this->db->where('id',$id)->update('users',array('status'=>1));
    }

     public function getUser($id) {
        return $this->db->get_where('users', array('id' => $id))->row_array();
    }

    public function newSubscriber($sub) {
        $this->db->insert('subscribers', $sub);
        return $this->db->affected_rows();
    }

    public function getNews($limit, $start) {
        return $this->db
                        ->limit($limit, $start)
                        ->order_by('date', 'desc')
                        ->get_where('news', array('status' => 1))
                        ->result_array();
    }

    public function newsCount() {
        $rows = $this->db
                ->get_where('news', array('status' => 1))
                ->result_array();
        return count($rows);
    }

    public function latestNews() {
        return $this->db
                        ->select('title')
                        ->limit(6, 0)
                        ->order_by('date', 'desc')
                        ->get_where('news', array('status' => 1))
                        ->result_array();
    }

    //********************* Login ****************************//
    function attemptLogin($usrCredentials) {
        $user = $usrCredentials['email'];
        $pwd = $usrCredentials['password'];
        $id = $this->db->get_where('users', array('email' => $user, 'password' => $pwd))->row_array();
        return ($id);
    }

    public function loggedin() {
        return ($this->session->userdata('name'));
    }

    public function logout($id) {
        $this->session->sess_destroy();
    }

    public function forgot($id, $new) {
        $data['password'] = $new;
        $this->db->update('users', $data, array('userId' => $id['userId']));
        return $this->db->affected_rows();
    }

    public function hash($string) {//Hashing Function
        return hash('sha512', $string . config_item('encryption_key'));
    }

    public function mailChk($mail) {
        $data = $this->db->get_where('users', array('email' => $mail))->row_array();
        return $data;
    }

    //*************** Career ********************//

    public function getCareer($limit, $start) {
        return $this->db
                        ->limit($limit, $start)
                        ->order_by('careerDate', 'desc')
                        ->get_where('careers', array('status' => 1))
                        ->result_array();
    }

    public function careerCount() {
        $rows = $this->db
                ->get_where('careers', array('status' => 1))
                ->result_array();
        return count($rows);
    }


}

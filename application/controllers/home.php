<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once('/application/models/locations_model.php');
require_once('/application/models/users_model.php');
require_once('/application/models/rides_model.php');

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('form');
        
    }
    
    public function index(){
       
        $loggedin = $this->session->userdata('loggedin');
        $name = "";
        if($loggedin != FALSE){
           $user = $this->session->userdata('user');
           $name = $user['first_name'];
        }
        $this->layout->view('/home/index', array('loggedin' => $loggedin, 'name' => $name));
    }
    
    public function register(){
        $this->layout->view('/home/register');
    }
    
    public function status(){
        // Show the view for user status page
        print_r($this->session->all_userdata());
        if($this->session->userdata('curRideState') == 2){
            $ride = $this->session->userdata('curRide');
            
            $vm = array(
            'to' => $ride['address_to'],
            'from' => $ride['address_from'],
            'timeleft' => 18
            );
            
            $this->layout->view('/home/status', $vm);
        }else{
            redirect('/home/index');
        }
        
        
    }
    
    public function ride(){
        if($this->session->userdata('loggedin') == TRUE){
            $rideState = $this->session->userdata('curRideState');
            if($rideState != 0){
                // We have started creating a ride
                if($rideState == 1){
                    $this->layout->view('/home/to');
                }else if($rideState == 2){
                    redirect('/home/status');
                }
            }else{
                 $this->layout->view('/home/from');
            }
           
        }else{
            redirect('/home/index');
        }
        
    }
    
    public function login(){
        $model = new Users_model();
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $model->get_user($email, $password);
        print_r($user);
        if($user != NULL){
            $this->session->set_userdata('user', $user);
            $this->session->set_userdata('loggedin', TRUE);
            $this->session->set_userdata('curRideState', 0);
          
            redirect('/home/index');
        }else{
            // Cannot find user
            redirect('/home/index');
        }
    }
    
    public function logout(){
        
        if($this->session->userdata('loggedin') == TRUE)
        {
            $this->session->unset_userdata('user');
            $this->session->unset_userdata('loggedin');
            $this->session->unset_userdata('curRide');
            $this->session->unset_userdata('curRideState');
            
        }
        redirect('/home/index');
    }
    
    public function favorites(){
        // Using session data, get the users favorite places from DB and send them to view as $favorites
        $model = new locations_model();
        $uid = $this->session->userdata('user_id');
        
        $data = $model->get_locations($uid);
        
        $this->layout->view('/home/favorites', $data);
    }
    
    public function other(){
        $this->layout->view('/home/other');
        
    }
}

?>
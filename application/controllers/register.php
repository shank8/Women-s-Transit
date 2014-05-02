<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once('/application/models/users_model.php');

class Register extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
        $this->load->helper('url');
        
    }
    
    public function reg(){
        $model = new Users_model();
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        $user = $model->get_user($email, $password);
        if($user != null){
            // User already exists
            print_r("USER ALREADY EXISTS");
            redirect('/home/index');
        }else{
            print_r("CREATED NEW USER");
            $model->new_passenger(); // Create new user
            
            redirect('/home/index');
        }
        
    }
}

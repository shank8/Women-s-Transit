<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
        $this->load->helper('url');
        $this->load->helper('form');
    }
    
    public function index(){
        $this->layout->view('/home/index');
    }
    
    public function register(){
        $this->layout->view('/home/register');
    }
    
    public function status(){
        // Show the view for user status page
        $this->layout->view('/home/status');
    }
    
    public function ride(){
        $this->layout->view('/home/ride');
    }
}

?>
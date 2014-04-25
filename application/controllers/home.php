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
    
    public function favorites(){
        // Using session data, get the users favorite places from DB and send them to view as $favorites
        $data = array ( 'favorites' =>
        array(
             array(
                'Id' => '0',
                'DisplayName' => 'Valhalla',
                'Address' => '123 Colorado St. Pullman, Wa'
            ),array(
                'Id' => '1',
                'DisplayName' => 'The Rec',
                'Address' => '777 The Rec Rd. Pullman, Wa'
            ),array(
                'Id' => '2',
                'DisplayName' => 'Home',
                'Address' => '555 B St. Apartment 7 Pullman, Wa'
            )
        ));
        $this->layout->view('/home/favorites', $data);
    }
    
    public function other(){
        $this->layout->view('/home/other');
        
    }
}

?>
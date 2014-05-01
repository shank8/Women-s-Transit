<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once('/application/models/locations_model.php');
require_once('/application/models/users_model.php');
require_once('/application/models/rides_model.php');

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
        $this->load->helper('url');
        $this->load->helper('form');
      
        
    }
    public function index(){
        // This will be the gateway to the admin portal
        $this->layout->view('/admin/index');
    }
    
   public function status(){
        $model = new Rides_model();
        
        $waiting_queue = $model->get_waiting();
        $active_queue = $model->get_in_transit();
        
        $package['waiting'] = $waiting_queue;
        $package['active'] = $active_queue;
        
        
        $this->layout->view('/admin/status', $package);
    }
    
    public function add(){
        $this->layout->view('/admin/add');
    }
    /*
     * POST
     * Creates new rider
     */
    public function addride(){
        print_r($this->input->post());
        
        // Save the ride and redirect to /admin/status
        redirect('/admin/status', 'location');
    }
}
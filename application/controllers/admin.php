<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
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
        
        
        //$waiting_queue = SELECT * FROM rides WHERE status = 2;
        $query = $this->db->query('SELECT * FROM rides WHERE status = 2');
        $waiting_queue = array();
        foreach($query->result() as $row){
           $waiting_queue[] = $row;
        }
        
         //$active_queue = SELECT * FROM rides WHERE status = 1;
        $query = $this->db->query('SELECT * FROM rides WHERE status = 1');
        $active_queue = array();
        foreach($query->result() as $row){
            $active_queue[] = $row;
        }
        
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
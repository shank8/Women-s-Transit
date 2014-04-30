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
        $test = $query->result_array();
      
        foreach($test as $row){
           $waiting_queue[] = $row;
        }
        
         //$active_queue = SELECT * FROM rides WHERE status = 1;
        $query = $this->db->query('SELECT * FROM rides WHERE status = 1');
        $active_queue = array();
        foreach($query->result() as $row){
            $active_queue[] = $row;
        }
        
        $package['waiting'] = array(
            array(
                'Id' => 0,
                'FirstName' => 'Sara',
                'LastName' => 'Johnson',
                'AddressFrom' => '456 Apple Rd.',
                'AddressTo' => '123 Orange St.',
                'Phone' => '555 555-5555',
                'Email' => 'sara@test.com'
            ),
            array(
                'Id' => 1,
                'FirstName' => 'Claire',
                'LastName' => 'Smith',
                'AddressFrom' => '456 Apple Rd.',
                'AddressTo' => '123 Orange St.',
                'Phone' => '555 555-5555',
                'Email' => 'claire@test.com'
            )
        );
        $package['active'] = array(
            array(
                'Id' => 0,
                'FirstName' => 'Sara',
                'LastName' => 'Johnson',
                'AddressFrom' => '456 Apple Rd.',
                'AddressTo' => '123 Orange St.',
                'Phone' => '555 555-5555',
                'Email' => 'sara@test.com'
            ),
            array(
                'Id' => 1,
                'FirstName' => 'Claire',
                'LastName' => 'Smith',
                'AddressFrom' => '456 Apple Rd.',
                'AddressTo' => '123 Orange St.',
                'Phone' => '555 555-5555',
                'Email' => 'claire@test.com'
            )
        );
        
        
        $this->layout->view('/admin/status', $package);
    }
    
    public function add(){
        $this->layout->view('/admin/add');
    }
    
    public function manage(){
        
        $package['users'] = array(
            array(
                'Id' => 0,
                'FirstName' => 'Sara',
                'LastName' => 'Johnson',
                'Phone' => '555 555-5555',
                'Email' => 'sara@test.com'
            ),
            array(
                'Id' => 1,
                'FirstName' => 'Claire',
                'LastName' => 'Smith',
                'Phone' => '555 555-5555',
                'Email' => 'claire@test.com'
            )
        );
        $this->layout->view('/admin/manage', $package);
    }
    public function edit(){
       
        // print_r($this->uri->segment(3)); // this prints the ID of what we want to edit
        
        // fetch the object by id
        $user = array(
                'Id' => 1,
                'FirstName' => 'Claire',
                'LastName' => 'Smith',
                'Phone' => '555 555-5555',
                'Email' => 'claire@test.com'
            );
        $this->layout->view('/admin/edit', $user);
    }
    public function update(){
        // Used to update a user
        print_r($this->input->post());
        
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
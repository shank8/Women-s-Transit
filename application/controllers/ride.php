<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Ride extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
        $this->load->helper('url');
        $this->load->helper('form');
        
    }
    
    /* POST
     * API for creating a new ride
     */
    public function create(){
        /*
         * Data is an array ( 'session_key' : val, 'address' : val, 'save-fave' : val }
         * 
         * Match the session_key with the backend session key and if save-fave exists
         * then that means they want to save the address in their Favorites as well
         */
        $data = $this->input->post();
        print_r($data);
    }
    
     /*
     * PUT
     * Updates ride information after admin edits it
     */
    public function update(){
        print_r($this->input->post());
        
        redirect('/admin/status', 'location');
    }
    public function edit(){
       // print_r($this->uri->segment(3)); // this prints the ID of what we want to edit
        
        // fetch the object by id
        $ride = array(
                'Id' => 1,
                'FirstName' => 'Claire',
                'LastName' => 'Smith',
                'AddressFrom' => '456 Apple Rd.',
                'AddressTo' => '123 Orange St.',
                'Phone' => '555 555-5555',
                'Email' => 'claire@test.com'
            );
        $this->layout->view('/ride/edit', $ride);
    }
    
    public function delete(){
         // print_r($this->uri->segment(3)); // this prints the ID of what we want to delete
        
        // Just delete this ride and redirect to status page
        
        redirect('/admin/status');
    }
    /* GET 
     * API for confirmation email
     */
    public function confirm(){
        $data = $this->input->get();
   
        $this->layout->view('/home/confirm', $data);
    }
    
    /* GET
     * Status page for riders
     */
    public function status(){
        // Use session data to get the users current ride data
        // Cross reference the queues to find approx. wait time
        // 
        // If possible, display the first name of the driver too
    }
}

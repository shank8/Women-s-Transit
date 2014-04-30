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

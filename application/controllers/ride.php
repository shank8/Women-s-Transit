<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once('/application/models/locations_model.php');
require_once('/application/models/users_model.php');
require_once('/application/models/rides_model.php');

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
         * Data is an array ( 'session_key' : val, 'address' : val }
         */
        if($this->session->userdata('loggedin') == TRUE){
            $rideState = $this->session->userdata('curRideState');
            $user = $this->session->userdata('user');
            if($rideState == 0){
                // Create a new ride
              
                $ride = array(
                    'user_id' => $user['id'],
                    'address_from' => $this->input->post('address'),
                    'address_to' => NULL
                );
                $this->session->set_userdata('curRide', $ride);
                $this->session->set_userdata('curRideState', 1);
                redirect('/home/ride');
            }else if($rideState == 1){
               
                
                $curRide = $this->session->userdata('curRide');
                $curRide['address_to'] = $this->input->post('address');
                $this->session->set_userdata('curRide', $curRide);
                $this->session->set_userdata('curRideState', 2);
                
                $model = new Rides_model();
                $model->new_ride($user['id']);
                
                redirect('/home/status');
            }
        }else{
            redirect('/home/index');
        }
  
    }
    
     public function update(){
        
         $model = new Rides_model();
         $model->update_ride();
        
        redirect('/admin/status', 'location');
    }
    public function edit(){
       // print_r($this->uri->segment(3)); // this prints the ID of what we want to edit
        
        // fetch the object by id
        $model = new Rides_model();
        $id = $this->uri->segment(3);
        $ride = $model->get_ride($id);
        $this->layout->view('/ride/edit', $ride[0]);
    }
    
    public function delete(){
         // print_r($this->uri->segment(3)); // this prints the ID of what we want to delete
        
        // Just delete this ride and redirect to status page
        $model = new Rides_model();
        $ride_id = $this->uri->segment(3);
        $model->delete_ride($ride_id);
        
        redirect('/admin/status');
    }
    
    /* GET 
     * API for confirmation email
     */
    public function confirm(){
        $data = $this->input->get();
   
        $this->layout->view('/home/confirm', $data);
    }
    
    public function makeactive(){
         $model = new Rides_model();
        $ride_id = $this->uri->segment(3);
        $model->set_pickup_time($ride_id);
        redirect('/admin/status');
    }
    
    public function finish(){
         $model = new Rides_model();
        $ride_id = $this->uri->segment(3);
        $model->set_dropoff_time($ride_id);
        redirect('/admin/status');
    }

}

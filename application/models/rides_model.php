<?php
require_once('/system/core/Model.php');
class Rides_model extends CI_Model{
    var $user_id;
    var $address_from;
    var $address_to;
    var $pickup_time;
    var $dropoff_time;
    public function __construct() {
        $this->load->database();
    }
    
    public function get_waiting()
    {
        $this->db->where(array('pickup_time' => NULL));
        $this->db->where(array('dropoff_time' => NULL));
        $query = $this->db->get('rides');
        return $query->result();
    }
    
    public function get_in_transit(){
        $this->db->where(array('dropoff_time' => NULL));
        $this->db->where('pickup_time IS NOT NULL');
        $query = $this->db->get('rides');
        return $query->result();
    }
    
    public function get_completed(){
        $this->db->where('dropoff_time IS NOT NULL');
        $this->db->where('pickup_time IS NOT NULL');
        $query = $this->db->get('rides');
        return $query->result();
    }
    
    public function new_ride($uid){
        $this->user_id = $uid;
        $this->address_from = $this->input->post('address_from');
        $this->address_to = $this->input->post('address_to');
        
        $this->db->insert('rides', $this);
    }
    public function set_pickup_time($ride_id = FALSE){
        if($ride_id == FALSE){
            $ride_id = $this->input->post('ride_id');
        }
        $this->db->update('rides', array('pickup_time' => time()), array('id' => $user_id));
    }
    public function set_dropoff_time($ride_id = FALSE){
        if($ride_id == FALSE){
            $ride_id = $this->input->post('ride_id');
        }
        $this->db->update('rides', array('pickup_time' => time()), array('id' => $user_id));
    }
    public function update_ride(){
        $ride_id = $this->input->post('ride_id');
        $this->user_id = $this->input->post('user_id');
        $this->address_from = $this->input->post('address_from');
        $this->address_to = $this->input->post('address_to');
        $this->pickup_time = $this->input->post('pickup_time');
        $this->dropoff_time = $this->input->post('dropoff_time');
        
        $this->db->update('rides', $this, array('id' => $ride_id));
    }
    public function delete_ride($ride_id){
        $this->db->delete('rides', array('id' => $ride_id));
    }
}
?>
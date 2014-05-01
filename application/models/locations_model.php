<?php
class Locations_model extends CI_Model{
    var $user_id;
    var $display_name;
    var $address;
    public function __construct() {
        parent::__construct();
    }
    
    public function new_location(){
        $this->user_id = $this->input->post('user_id');
        $this->display_name = $this->input->post('display_name');
        $this->address = $this->input->post('address');
        
        $this->db->insert('locations', $this);
    }
    
    public function get_locations($uid = FALSE){
        if($uid = FALSE){
            $uid = $this->input->post('user_id');
        }
        $query = $this->db->get_where('locations', array('user_id' => $uid));
        return $query->results();
    }
    public function get_location($location_id){
        $query = $this->db->get_where('locations', array('id' => $location_id));
        return $query->row_array();
    }
    public function update_location(){
        $id = $this->input->post('location_id');
        $this->user_id = $this->input->post('user_id');
        $this->display_name = $this->input->post('display_name');
        $this->address = $this->input->post('address');
        
        $this->db->update('locations', $this, array('id'=> $id));
    }
    public function delete_location($location_id){
        $this->db->delete('locations', array('id' => $location_id));
    }
}
?>
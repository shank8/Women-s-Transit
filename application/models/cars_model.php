<?php
require_once('/system/core/Model.php');
class Cars_model extends CI_Model{
    var $user_id;
    var $car_number;
    var $mileage;
    var $driver;
    var $gas;
    var $date;
    
    public function __construct() {
        parent::__construct();
    }
    
    public function new_car($uid){
        $this->user_id = $uid;
        $this->car_number = $this->input->post('car_number');
        $this->mileage = $this->input->post('mileage');
        $this->driver = $this->input->post('driver');
        $this->gas = $this->input->post('gas');
        $this->date = time();
        
        $this->db->insert('entries', $this);
    }
    
    public function get_cars(){
        $query = $this->db->get('cars');
        return $query->result_array();
    }
    
    public function update_car($car_id){
        $this->user_id = $this->input->post('user_id');
        $this->car_number = $this->input->post('car_number');
        $this->mileage = $this->input->post('mileage');
        $this->driver = $this->input->post('driver');
        $this->gas = $this->input->post('gas');
        $this->date = $this->input->post('date');
        
        $this->db->insert('cars', $this, array('id' => $car_id));
    }
    
    public function delete_car($car_id){
        $this->db->delte('cars', array('id' => $car_id));
    }
}
?>
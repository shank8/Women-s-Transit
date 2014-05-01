<?php
require_once('/system/core/Model.php');
class Users_model extends CI_Model {
    var $first_name, $last_name, $email, $phone, $password, $privileges;
    public function __construct() {
        $this->load->database();
    }
    
    public function get_user($email, $password){
        $login = array('email' => $email, 'password' => $password);
        $query = $this->db->get_where('users', $login);
        return $query->result();
    }
    
    public function change_password($user_id, $password){
        $pw = array('password' => $password);
        $uid = array('id' => $user_id);
        $this->db->update('users', $pw, $uid);
    }
    
    // Create Functions
    public function new_user($priv){
        $this->first_name = $this->input->post('first_name');
        $this->last_name = $this->input->post('last_name');
        $this->email = $this->input->post('email');
        $this->phone = $this->input->post('phone');
        $this->password = $this->input->post('password');
        $this->privileges = $priv;
    }
    public function new_passenger(){
        $this->new_user(0);
    }
    public function new_operator(){
        $this->new_user(1);
    }
    public function new_admin(){
        $this->new_user(2);
    }
    // Read Functions
    public function get_users($priv = FALSE){
        if($priv == false){
            $query = $this->db->get('users');
            return $query->result();
        }
        $query = $this->db->get_where('users', array('privileges' => $priv));
        return $query->result();
    }
    
    // Update Functions
    public function update_user($user_id){
        $id = $user_id;
        $this->first_name = $this->input->post('first_name');
        $this->last_name = $this->input->post('last_name');
        $this->email = $this->input->post('email');
        $this->phone = $this->input->post('phone');
        $this->password = $this->input->post('password');
        $this->privileges = $this->input->post('privileges');
        
        $this->db->update('users', $this, array('id' => $id));
    }
    // Delete Functions
    public function delete_user($user_id){
        $this->db->delete('users', array('id' => $user_id));
    }
}
?>
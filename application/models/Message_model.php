<?php

class Message_model extends CI_Model {
    
    public function insertMessage($data){
        $this->db->insert('list_message', $data);
        return $this->db->insert_id();
    }

}

?>
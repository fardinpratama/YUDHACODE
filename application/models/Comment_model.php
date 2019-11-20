<?php

class Comment_model extends CI_Model {
    
    public function insertComment($data){
        $this->db->insert('list_comment', $data);
        return $this->db->insert_id();
    }

    public function getCommentByUrl($field, $value){
        $this->db->where($field, $value);
        $this->db->order_by('date', 'desc');
        return $this->db->get("list_comment");
    }
}

?>
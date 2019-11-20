<?php

class Reply_model extends CI_Model {
    
   public function insertReply($post){
    $this->db->insert('comment_reply', $post);
    return $this->db->insert_id();
   }

   public function getReplyByUrl($url){
    $this->db->where('url', $url);
    return $this->db->get("comment_reply");
   }

}

?>
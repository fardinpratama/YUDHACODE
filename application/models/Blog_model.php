<?php

class Blog_model extends CI_Model {
    
    public function getBlogs($limit, $offset) {

        $filter = $this->input->get('find');
        $this->db->like('title', $filter);
        $this->db->limit($limit, $offset);
        $this->db->order_by('date_post', 'desc');
        return $this->db->get("list_blog");
    }
    public function getTotalBlog() {

        $filter = $this->input->get('find');
        $this->db->like('title', $filter);
        return $this->db->count_all_results("list_blog");
    }


    public function getSingleBlog($field, $value) {
        $this->db->where($field, $value);
        return $this->db->get("list_blog");
    }

    public function insertBlog($data){
        $this->db->insert('list_blog', $data);
        return $this->db->insert_id();
    }

    public function updateBLog($id, $post){
        $this->db->where('id', $id);
        $this->db->update('list_blog', $post);
        return $this->db->affected_rows();
    }

    public function deleteBlog($id){
        $this->db->where('id', $id);
        $this->db->delete('list_blog');
        return $this->db->affected_rows();
    }

    public function getMoreBlog(){
        $this->db->limit(3, 0);
        $this->db->order_by('date_post', 'desc');
        return $this->db->get("list_blog");
    }


}



?>
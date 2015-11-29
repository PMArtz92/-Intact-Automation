<?php
class PostModel extends CI_Model {

    function getPosts(){
        $this->db->select("ast_id, First_name, Last_name");
        $this->db->from('mobile_assit');
        $query = $this->db->get();
        return $query->result();
    }

}
?>
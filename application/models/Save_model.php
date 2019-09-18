<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Save_model extends CI_Model
{
    public function save($post_id, $saved_by)
    {
        $this->save_model->create($post_id, $saved_by);
    }

    public function create($post_id, $saved_by)
    {
        $data = array(
            'post_id' => $post_id,
            'saved_by' => $saved_by,
            'created_at' => date("Y-m-d H:i:s"),
        );

        $this->db->insert('saves', $data);
        return $this->db->insert_id();
    }
}

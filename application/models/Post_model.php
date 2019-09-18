<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model
{
	public function create($title, $category_id, $images, $message)
	{
		$data = array(
			'title' => $title,
			'category_id' => $category_id,
			'images' => $images,
			'message' => $message,
			'created_at' => date("Y-m-d H:i:s"),
			'modified_at' => date("Y-m-d H:i:s")
		);

		$this->db->insert('posts', $data);
		return $this->db->insert_id();
	}

	function get($id)
	{
		$this->db->where('id', $id);
		$this->db->from('posts');
		$result = $this->db->get();
		return $result->first_row();
	}

	function update($id, $category_id, $title, $images, $message)
	{
		$data = array(
			'category_id' => $category_id,
			'title' => $title,
			'images' => $images,
			'message' => $message,
			'modified_at' => date("Y-m-d H:i:s"),
		);
		$this->db->where('id', $id);
		$this->db->update('posts', $data);
		return $this->db->affected_rows();
	}
}

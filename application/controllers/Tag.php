<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tag extends CI_Controller {

	public function _remap($tag)
	{
		if (file_exists("data/$tag.json")) {
			$json = file_get_contents("data/$tag.json");
			$tools = json_decode($json);
			if (!empty($tools)) {
				$pagination = paginate($tools);
				$this->load->view('tag', compact('tools', 'tag', 'pagination'));
				return;
			}
		}
		show_404();
	}
}

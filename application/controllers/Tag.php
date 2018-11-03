<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tag extends CI_Controller {

	public function _remap($tag)
	{
        $json = file_get_contents("data/$tag.json");
		$tools = json_decode($json);
		$tools = $tools->tools;
		$this->load->view('tag', compact('tools', 'tag'));
	}
}

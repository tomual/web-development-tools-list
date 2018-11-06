<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$tools = array();
		if (file_exists("data/src.json")) {
			$json = file_get_contents("data/src.json");
			$tools = json_decode($json);
			$tools = $tools->tools;
		}
		$pagination = paginate($tools);
		$this->load->view('home', compact('tools', 'pagination'));
	}
}

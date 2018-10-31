<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$json = file_get_contents("data/src.json");
		$tools = json_decode($json);
		$tools = $tools->tools;
		$this->load->view('home', compact('tools'));
	}
}

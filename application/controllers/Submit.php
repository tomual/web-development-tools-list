<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submit extends CI_Controller {

	public function index()
	{
		$this->load->helper('file');
		if ($this->input->method('post')) {
			$email = $this->input->post('email');
			$message = $this->input->post('message');
			if (!empty($message)) {
				$date = date('Y-m-d his');
				$contents = $email . "\n" . $message;
				file_put_contents("submissions/$date.txt", $contents);
				$this->load->view('contact-thankyou');
				return;
			}
		}
		$this->load->view('contact');
	}
}

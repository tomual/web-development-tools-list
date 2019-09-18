<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('post_model');
		$this->load->model('save_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function all()
	{
		$posts = $this->post_model->get_all();
		dd($posts);
	}

	public function create()
	{
		if ($this->input->method() == 'post') {
			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('category_id', 'Category', 'required');
			$this->form_validation->set_rules('images', 'Images', 'required');
			$this->form_validation->set_rules('message', 'Message', 'required');

			if ($this->form_validation->run() !== FALSE) {

				$title = $this->input->post('title');
				$category_id = $this->input->post('category_id');
				$images = $this->input->post('images');
				$message = $this->input->post('message');

				$post_id = $this->post_model->create($title, $category_id, $images, $message);
				if ($post_id) {
					redirect('/');
				}
			}
			$this->session->set_flashdata('error', 'Failed to create post.');
		}
		set_title('Create');
		$this->load->view('post/form');
	}

	public function save($post_id)
	{
		$saved_by = $this->session->userdata('id');
		if ($saved_by) {
			return $this->save_model->save($post_id, $saved_by);
		}
		return false;
	}

	
}

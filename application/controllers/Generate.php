<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Generate extends CI_Controller {

	public function index()
	{
		$tools = array();
		if (file_exists("data/src.json")) {
			$json = file_get_contents("data/src.json");
			$tools = json_decode($json);
			$tools = $tools->tools;
		}

		$tags = array();

		echo "<pre>";
		foreach ($tools as $tool) {
			foreach ($tool->tags as $tag) {
				if (!empty($tags[$tag])) {
					$tags[$tag][] = $tool;
				} else {
					$tags[$tag] = array($tool);
				}
			}
		}

		foreach ($tags as $label => $tools) {
			file_put_contents("data/$label.json", json_encode($tools));
		}
	}
}

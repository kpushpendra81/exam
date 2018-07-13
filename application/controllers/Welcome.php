<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index() {

		$data = array('title' => 'Exam Login');

		$this->load->view('template/login', $data);
	}

	public function forget() {
		$data = array('title' => 'Exam Login');

		$this->load->view('template/forget', $data);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/home');
		$this->load->view('template/about');
		$this->load->view('template/our-speaker');
		$this->load->view('template/session');
		$this->load->view('template/commitess');		
		$this->load->view('template/footer');
	}
}

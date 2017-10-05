<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Commer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('commermodel');
		$this->load->helper(array('url_helper','form'));
		$this->load->library(array('form_validation','session'));
	}
	public function index()
	{
    $this->load->view('commer/header');
    $this->load->view('commer/nav');
    $this->load->view('commer/index');
    $this->load->view('commer/footer');
	}

  public function view($p)
  {
    $active = 'active';
    $this->load->view('commer/header');
    $this->load->view('commer/nav');
		$this->load->view('commer/'.$p,$active);
    $this->load->view('commer/footer');
  }

	public function mendaftar()
	{
		$this->form_validation->set_rules('user')
		if () {

		}
	}
}

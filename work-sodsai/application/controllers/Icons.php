<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Icons extends CI_Controller {

  public function __construct()
  {
   parent::__construct();
  }

	public function index()
	{

		$this->load->view('tempage/Header.php');
		$this->load->view('icon.php');
		$this->load->view('tempage/Footer.php');
	}




}

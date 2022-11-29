<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class ControlSodsai extends CI_Controller {

    public function __construct()
    {
     parent::__construct();
     $this->load->model('detail_model');
    }

  	public function index()
  	{
  		$this->load->view('tempage/Header.php');
  		$this->load->view('control_sodsai.php');
  		$this->load->view('tempage/Footer.php');
  	}

    public function add()
    {
      $in_data = array();
      $in_data = array(
        'name' => $_POST['__nameproduct'],
        'detail_text' => $_POST['__detail'],
        'vdo' => $_POST['__file'],
      );
      $add_data = $this->detail_model->add($in_data);
      if (!$add_data) {
        return false;
      }
      $emptyurl = 'http://127.0.0.1/9-sodsaiblog/work-sodsai/controlsodsai/';
      redirect($emptyurl);
    }

  }
?>

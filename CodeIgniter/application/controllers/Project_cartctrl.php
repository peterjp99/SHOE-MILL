<?php 

class Project_cartctrl extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }
  function index()
  {

  	 $this->load->view('Project_cartview');
  }
}
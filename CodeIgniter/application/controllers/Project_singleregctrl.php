<?php 

class Project_singleregctrl extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }
  function index()
  {

  	 $this->load->view('Project_singleregview');
  }
}
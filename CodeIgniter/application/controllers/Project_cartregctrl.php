<?php 

class Project_cartregctrl extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }
  function index()
  {

  	 $this->load->view('Project_cartregview');
  }

function abc($user)

{$data = array(
    'username' => $user,
    
);
	 $this->load->view('Project_cartregview',$data);

}



}


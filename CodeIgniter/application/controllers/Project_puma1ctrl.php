<?php 

class Project_puma1ctrl extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }
  function index()
  {

  	 $this->load->view('Project_puma1');
  }

function abc($user)

{$data = array(
    'username' => $user,
    
);
	 $this->load->view('Project_puma1reg',$data);

}


}
<?php 

class Project_puma2ctrl extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }
  function index()
  {

  	 $this->load->view('Project_puma2');
  }


function abc($user)

{$data = array(
    'username' => $user,
    
);
	 $this->load->view('Project_puma2reg',$data);

}
}

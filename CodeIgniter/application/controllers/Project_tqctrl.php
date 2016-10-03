<?php 

class Project_tqctrl extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }
  function index()
  {

  	 $this->load->view('Project_tqview');
  }
   function abc($user)

{$data = array(
    'username' => $user,
    
);
	 $this->load->view('Project_tqregview',$data);

}
}
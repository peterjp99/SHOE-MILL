<?php 

class Project_homeregctrl extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }
  function index()
  {

  	 $this->load->view('Project_homeregview');
  }
  function abc($user)

{$data = array(
    'username' => $user,
    
);
	 $this->load->view('Project_homeregview',$data);

}
}
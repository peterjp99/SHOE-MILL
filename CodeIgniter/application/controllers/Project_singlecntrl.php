<?php 

class Project_singlecntrl extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }
  function index()
  {

  	 $this->load->view('Project_singleview');
  }
  function abc($user)

{$data = array(
    'username' => $user,
    
);
	 $this->load->view('Project_singleregview',$data);

}
}
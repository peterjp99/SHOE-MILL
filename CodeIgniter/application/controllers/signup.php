<?php 

class Signup extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }
  function index()
  {

  	 $this->load->view('Project_loginview');
  }

  function add()
  {$this->load->model('Signup_model');
   $username = $this->input->post("username");
     $emailid= $this->input->post("emailid");
      $password = $this->input->post("password");
$a=$this->Signup_model->inserting($username,$emailid,$password);
if($a==0)
{echo '<script type="text/javascript">'; 
echo 'alert("Username/Email already in use");'; 
echo 'window.location.href = "index";';
echo '</script>';
}
else
{
   $data = array(
    'username' => $username,
    
);

$this->load->view('Project_homeregview', $data);
}


  }
}
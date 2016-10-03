<?php 

class Login extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {

$this->load->helper('form');
   $this->load->view('Project_loginview');
 
 }
  function process()
 {
        // Load the model
        $this->load->model('Login_model');
       $username = $this->input->post("username");
       $password = $this->input->post("password");
      $a=$this->Login_model->validate($username,$password);
if($a==0)
{echo '<script type="text/javascript">'; 
echo 'alert("Wrong Username/Password");'; 
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




?>
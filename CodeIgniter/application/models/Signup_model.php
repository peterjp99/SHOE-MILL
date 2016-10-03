<?php
class Signup_model extends CI_Model{
    function __construct(){
        parent::__construct();
         $this->load->database();
    }

   function inserting($username,$emailid,$password)
   {$SQL="select * from users where username='$username' or email='$emailid'";

$query = $this->db->query($SQL);
$data=array();
$data=$query->result_array();
If(is_array($data) && count($data)>0)
return 0;
else
{$SQL="INSERT INTO users VALUES ('$username','$password','$emailid')";
$this->db->query($SQL);
return 1;
}



   }
   }
   ?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
         $this->load->database();
    }
    
    public function validate($a,$b){

$SQL="select * from users where username='$a' and password='$b'";

$query = $this->db->query($SQL);
$data=array();
$data=$query->result_array();
If(is_array($data) && count($data)>0)
{
return 1;
}else{
 return 0;
}  

       
        
    }

}
?>
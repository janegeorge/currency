<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Reg_model extends CI_Model
{ 
  function insertdata($fname,$lname,$user,$pwd,$email,$phone)
    {
    
        $data=array(
        'first_name'=>$fname,
        'last_name'=>$lname,
        'user_name'=>$user,
        'password'=>$pwd,
        'email'=>$email,
        'phone'=>$phone
        );
        $this->db->insert('reg',$data); 
    }
}
   
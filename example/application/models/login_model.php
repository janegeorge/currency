  <?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_model extends CI_Model
{ 
    /*
     Function name:getdata
    Description:checking the username password is correct or not
    */
    function getdata($user,$pwd)
    {
   $this -> db -> select('user_name,password,userid');
   $this -> db -> from('reg');
   $this -> db -> where('user_name', $user);
   $this -> db -> where('password', $pwd);
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }      
    }
    
}  

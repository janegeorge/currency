  <?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_model extends CI_Model
{ 
 function insertdata($user,$pwd)
    {
        $data=array(
         'uname'=>$user,
         'pwd'=>$pwd
        );
        $this->db->insert('new',$data);
        
        
    } 
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
    public function insertbusiness($add)
    {
        $data=array(
         'name'=>$add
        );
        $this->db->insert('business',$data);
    }
    public function getbusinessdata()
    {
        $this->db->select('*');
        $this->db->from('business');
        $result=$this->db->get();
        return $result;
        
    }
    public function editdata($id)
    {
        $this->db->select('name,id');
        $this->db->from('business');
        $this->db->where('id',$id);
        $result=$this->db->get();
        echo $this->db->last_query();
        return $result;
        
    }
    public function getupdate($id,$name)
    {
        $data=array(
         'name'=>$name
        );
        $this->db->where('id',$id);
        $this->db->update('business',$data);
        
    }
    public function deletedata($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('business');
        
       
    }
}  
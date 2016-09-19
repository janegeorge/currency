<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login1 extends CI_Controller {

    public function index()
    {
        {
            $this->load->view("header1.php");
            $this->load->view("login1_view.php");
            $this->load->view("footer1.php");
        }
    }
    /*
    Function:submit
    Description:In this validation checking of each field in the login page.
    checking whether it is already registered.
    
    */
    public function submit()
    {
        
        $this->form_validation->set_error_delimiters('<div style="color:#B94A48">', '</div>');                                                                                                                                                                                                   
        $this->form_validation->set_rules('uname', 'Username', 'required');
        $this->form_validation->set_rules('pwd', 'Password', 'required');
          if ( $this -> form_validation -> run() === FALSE )
        {
             $this->index();
        }
        else
        {
        $user=$this->input->post("uname");
        $pwd1=$this->input->post("pwd");
        $pwd=do_hash($pwd1, 'md5'); 
        $this->load->model("login_model");
       $result=$this->login_model->getdata($user,$pwd);
       if($result)
   {
    $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
        'user_name' => $row->user_name,
        'userid'=>$row->userid
       );  
       $data=$this->session->set_userdata($sess_array);
       redirect(base_url().'message/index',$data);  
        return TRUE; 
     }
   }
   else
   { 
     $message="Invalid username or password";
     $this->session->set_flashdata('message',$message); 
     $this->index();
      return false;
   }  
     }  
        }
}

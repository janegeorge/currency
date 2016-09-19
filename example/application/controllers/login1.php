<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login1 extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -  
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        {
            $this->load->view("header1.php");
            $this->load->view("login1_view.php");
            $this->load->view("footer1.php");
        }
    }
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
        //echo $user;
        $pwd1=$this->input->post("pwd");
       // echo "hii";
        $pwd=do_hash($pwd1, 'md5'); 
        $this->load->model("login_model");
       // $this->login_model->insertdata($user,$pwd);
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
     $this->form_validation->set_rules('submit', 'Invalid username or password');
     $message= "Invalid username or password" ;
     $this->session->set_flashdata('message',$message); 
     $this->index();
      return false;
   }
       
        }  
        }
}
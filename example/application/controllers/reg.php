<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reg extends CI_Controller {

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
            $this->load->view("reg_view.php");
            $this->load->view("footer1.php");
        }
    }
    
    public function submit()
    {
        $this->form_validation->set_error_delimiters('<div style="color:#B94A48">', '</div>');                                                                                                                                                                                                   
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required|alpha');
        $this->form_validation->set_rules('uname', 'User Name', 'required');
        $this->form_validation->set_rules('pwd', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required|numeric|max_length[11]');
          if ( $this -> form_validation -> run() === FALSE )
        {
             $this->index();
        }
        else
        { 
          $fname=$this->input->post('fname'); 
          $lname=$this->input->post('lname');
          $user=$this->input->post('uname');
          $pwd1=$this->input->post('pwd');
          $pwd=do_hash($pwd1, 'md5'); 
          $email=$this->input->post('email');
          $phone=$this->input->post('phone');
          $this->load->model('reg_model');
          $this->reg_model->insertdata($fname,$lname,$user,$pwd,$email,$phone);
          $this->index();
        }
    }
           
       }
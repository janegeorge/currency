<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

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
       // echo"hiiii";
        $this->load->view("header.php");
      $this->load->view("login_view.php");
        $this->load->view("footer.php");  
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
          $this->load->view("header.php");
      $this->load->view("home_view.php");
        $this->load->view("footer.php");
        }
    } 
     
}
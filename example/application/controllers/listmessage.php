<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Listmessage extends CI_Controller {
    /*
      Function Name:index
      Description:getting all trade from the database and dissplaying in the view page
    */
    public function index()
    {
        $userid=$this->input->post('userid');
       $this->load->model('message_model');
       $rec['record_name']=$this->message_model->getlist($userid);
       $this->load->view('header1.php',$rec);
       $this->load->view('list_view.php',$rec);
        
    }
}

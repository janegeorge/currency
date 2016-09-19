<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Listmessage extends CI_Controller {
    
    public function index()
    {
       $this->load->model('message_model');
       $rec=$this->message_model->getlist();
       $rec_array=array('record_name'=>$rec);
       $this->load->view('header1.php',$rec_array);
       $this->load->view('list_view.php',$rec_array);
        
    }
}
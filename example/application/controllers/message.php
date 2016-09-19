<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message extends CI_Controller {
     /*Function:index
       Description:This function calls the first page by taking currency and 
       country details and passing the data to the view page
     */
    public function index()
    {  
      $this->load->model('message_model');      
      $data['getcurrency']=$this->message_model->getcurrency();
      $data['getcurrencyto']=$this->message_model->getcurrencyto();
      $data['getcountry']=$this->message_model->getcountry();
      $this->load->view("header1.php",$data);
      $this->load->view("message_view.php",$data);
    } 
    
     /*Function:submit
       Description:This function calls when user submitting all the data.In 
       this function it check the whether the request is ajax and after that it 
       will insert into the database. 
     */
    public function submit()
    {      
if ($_SERVER["REQUEST_METHOD"] == "POST") {
       /* AJAX check  */
 if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        $json_out = json_encode( array('status'=>'false', 'message' => 'Cheating...?'));
        die($json_out);
    } 
    //Validation
    if( validate('currency_to')|| validate('currency_from') || validate('amountsell')|| validate('amountbuy')||validate('countryname'))
    {
        $json_out = json_encode(array('status'=>'false', 'message' => 'All fields are required'));
        die($json_out);
    }
  
    $currency_to            =           $_POST["currency_to"];
    $currency_from          =           $_POST["currency_from"];
    $amountsell             =           $_POST["amountsell"];
    $amountbuy              =           $_POST["amountbuy"];
    $countryname            =           $_POST["countryname"];
    
      
     $this->load->model('message_model');
     $this->message_model->insertdata($currency_to,$currency_from,$amountsell,$amountbuy,$countryname);
   
        $output = json_encode(array('status'=>'true', 'message' => '<strong>Insertion successfully!</strong>'));
        die($output);
      
}
}     }  
    
function validate($item){
    if(isset($_POST[$item]) && $_POST[$item]!=""){
        return false;
    }else{
        return true;
    }
}    

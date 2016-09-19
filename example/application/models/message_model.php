<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Message_model extends CI_Model
{ 
      /* get all the Currency from the database */
    function getcurrency()
    {  
   
    $this->db->from('exchange');
    $result=$this->db->get();
    $return=array("Please Select Currency From");
    if($result->num_rows()>0)
    {
        foreach($result->result_array()as $row)
        {
          $return[$row['currency']]=$row['currency'];
        }
    }
        return $return;
    }
        /* get all the Currency from the database */
    function getcurrencyto()
    {
        $this->db->from('exchange');
    $result=$this->db->get();
    $return=array("Please Select Currency To");
    if($result->num_rows()>0)
    {
        foreach($result->result_array()as $row)
        {
          $return[$row['currency']]=$row['currency'];
        }
    }
        return $return;
    } 
     /* get all the Country from the database */
     
     function getcountry()
    {
    $this->db->from('country');
    $result=$this->db->get();
    $return=array("Please Select Orginating Country");
    if($result->num_rows()>0)
    {
        foreach($result->result_array()as $row)
        {
          $return[$row['countryname']]=$row['countryname'];
        }
    }
        return $return;
    } 
    /*inserting all data to database*/
    function insertdata($currency_to,$currency_from,$amountsell,$amountbuy,$countryname)
    {
        $data=array(
        'CURRENCYTO'=>$currency_to,
        'CURRENCYFROM'=>$currency_from,
        'AMOUNTBUY'=>$amountbuy,
        'RATE'=>$amountsell,
        'ORGINATINGCOUNTRY'=>$countryname
        );
        $this->db->insert('message',$data);
         
       
    
  }
  function getlist()
  {
      /* $this->db->select('CURRENCYTO,CURRENCYFROM,AMOUNTBUY,RATE,ORGINATINGCOUNTRY');
        $this->db->from('message');
        $this->db->where('user_id',$userid);
        $va=$this->db->get();
        return $va; */
  }
}

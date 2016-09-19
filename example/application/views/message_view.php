 <section class="page-title">
                <div class="grid-row clearfix">
                    <h1>Trade Message</h1>
                </div>
   </section>
            <!--/ page title -->
   <main class="page-content">
                <div class="grid-row">
                
     <form action="" id="ajaxform"  method="post" class="bossform">
                               
            <?php $attributes = 'class="form-control" id="currency_from"';
            echo form_dropdown('currency_from', $getcurrency, 
            set_value('currency_from','id="currency_from"'), $attributes); ?>
    <br>
            <?php $attributes = 'class="form-control" id="currency_to"';
              echo form_dropdown('currency_to', $getcurrencyto,
               set_value('currency_to','id="currency_to"'), $attributes); ?>
    <br>       
        <input type="text" placeholder="Rate" name="amountsell" id="amountsell" >
         <br>
        <input type="text" placeholder="Amount Buy" name="amountbuy" id="amountbuy">
        <br>
        <div class="form-group">
            <?php $attributes = 'class="form-control" id="countryname"';
            echo form_dropdown('countryname', $getcountry, 
            set_value('countryname','id="countryname"'), $attributes); ?>
        </div> 
        <br>
         <input type="hidden" value="<?php echo $this->session->userdata('userid');?>" name="userid"/>
         
       <input type="submit" id="submit" class="button" value="submit" /> 
         <div id="status"></div>        
      </form> 
         <br>
           <form action="<?php echo base_url()?>listmessage" method="post" class="bossform">
            <input type="hidden" value="<?php echo $this->session->userdata('userid');?>" name="userid"/>
               <input type="submit" id="submit" class="button" value="View Message" />
           </form>
                     </div>  
   </main> 
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
   <script type="text/javascript">  
$(document).ready(function() {
  $("#ajaxform").submit(function(e){
    // e.preventDefault();
    var contactdata  =   $(this).serializeArray();
    var submiturl    =  $(this).attr('action');
    var submitbtn    =  $('#submit');
    submitbtn.val('Sending...');
    $("#ajaxform :input").prop("disabled", true);
      $.ajax({
      url: "<?php echo base_url()?>message/submit",
      type: 'POST',
      dataType: "json",
      data : contactdata,
      async:true,
      success: function(response){ 
                console.log(response.status);
                if(response.status=true){
                $("select").each(function() { this.selectedIndex = 0 });
                document.getElementById('amountsell').value='';
                 document.getElementById('amountbuy').value='';
                  $('#status').html(response.message);
                submitbtn.val('SUBMIT');
      }
      else{
          submitbtn.val('SUBMIT');
            $('#status').html(response.message);
      }
       
        } 
    });
   // e.preventDefault(); 
  }); 
});
</script>


 
  

 
  

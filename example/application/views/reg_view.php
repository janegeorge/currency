<section class="page-title">
                <div class="grid-row clearfix">
                    <h1>Registration</h1>
                </div>
   </section>
            <!--/ page title -->
   <main class="page-content">
                <div class="grid-row">
     <form action="<?php echo base_url()?>reg/submit" method="post" class="bossform">     
        <input type="text" placeholder="First Name" name="fname" id="fname" >
        <?php echo form_error('fname') ?>
         <br>
        <input type="text" placeholder="Last Name" name="lname" id="lname">
        <?php echo form_error('lname') ?>
        <br>
        <input type="text" placeholder="User Name" name="uname" id="uname">
        <?php echo form_error('uname') ?>
        <br>
         <input type="text" placeholder="Password" name="pwd" id="pwd">
        <?php echo form_error('pwd') ?>
        <br>
         <input type="text" placeholder="Email" name="email" id="email">
         <?php echo form_error('email') ?>
        <br>
         <input type="text" placeholder="phone" name="phone" id="phone">
         <?php echo form_error('phone') ?>
         <br>
       <input type="submit" id="submit" class="button" value="submit" /> 
               
      </form> 
     </div>  
   </main> 
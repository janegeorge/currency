            <!-- page title -->
            <section class="page-title">
                <div class="grid-row clearfix">
                    <h1>Login</h1>
                    
                    <nav class="bread-crumbs">
                        <a href="index-2.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
                        <a href="#">Login</a>
                    </nav>
                </div>
            </section>
            <!--/ page title -->
<main class="page-content">
                <div class="grid-row">
                    <div class="grid-col grid-col-9">
                    <br>
                    <br>
                    <br>
                     <center>
                                     
        <a href="<?echo base_url()?>home"><img src="<?echo base_url()?>application/assets/img/blue/logo3.png" style="margin-left:268px;"alt="Clinico"></a> 
        
                     <div class="class">
                      <div class="cent">
<form action="login/submit" method="post">
<br>
<br>
<input type="text"  name="uname" id="uname" placeholder="username"><br>
                    <?php echo form_error('uname'); ?>  
<br>
<input type="password" name="pwd" id="password" placeholder="password" ><br>
                    <?php echo form_error('pwd'); ?>  
 <br>
<input type="submit" class="button" value="submit">  
      
   </form>



</div>  
</div>
</center>  
                        <!--/ follow -->
                        
                    </div>

                </div>
            </main>




            <section class="page-title">
                <div class="grid-row clearfix">
                </div>
            </section>
<main class="page-content">
                <div class="grid-row">
                    <div class="grid-col grid-col-9">
                    <br>
                    <br>
                    <br>
                <div class="red">
                     <center> 
                         <h1 style="font-size:31px;">Login</h1>    
                     <form method="post" action="<?php echo base_url()?>login1/submit">
                       <input type="text" placeholder="username" name="uname" >
                       <?php echo form_error('uname') ?>
                       <br>
                       <br>
                       <input type="password" placeholder="password" name="pwd" >
                       <?php echo form_error('pwd') ?>
                       <br>
                       
                       <?php echo $this->session->flashdata('message') ?>
                        <input type="submit" class="button" value="submit">
                     </form>
                     <a href="<?php echo base_url()?>reg">Registration</a>
                     </center>
                     </div>
                     </div>
                     </div>
                     </main>
                    

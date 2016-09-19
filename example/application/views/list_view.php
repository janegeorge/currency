<section class="page-title">
                <div class="grid-row clearfix">
                    <h1>List Message</h1>
                </div>
   </section>
   <main class="page-content">
                <div class="grid-row">
             <table>
                        <tr>
                        <th>Currency From</th>
                        <th>Currency To</th>
                        <th>Rate</th>
                        <th>Amount buy</th>
                        <th>Orginating Country</th>
                         </tr>
                         
                         <?php foreach($record_name  as $r):
                          {?>
                          <tr>
                         <td><?php echo $r->CURRENCYFROM;?> </td>
                         <td><?php echo $r->CURRENCYTO;?></td>
                        <td><?php echo $r->RATE;?></td>
                        <td><?php echo $r->AMOUNTBUY;?></td>
                        <td><?php echo $r->ORGINATINGCOUNTRY;?></td>
                         </tr>  
                        <?php }endforeach;?>     
                </table>                 
                </div>
   </main>
<?php $page='livewell'; $subpage='before-login'; require ('inc/header.php')?>

<section id="livewell">
  <ul>
    <li>
    
      <!-- section 1 -->
	  <div class="vmodule">
        <ul class="c-split-1 clearenter">
          <li>
        
            <div class="breadcrumb">
              <ul>
                <li><a class="fa fa-chevron-right" href=" ">Home</a></li>
                <li><a class="fa fa-chevron-right" href="javascript:void(0)">Compare Insurance</a></li>
                <li><span>Compare Agent</span></li>
              </ul>
            </div>

          </li>
        </ul>
      </div>
      <!-- end section 1 -->
      
      
      
      <!-- section 2 -->
	  <div class="vmodule">
        <ul class="c-split-1 clearenter">
          <li>
          
            <div class="ins-compare">
 			  <table class="data_table">
                <thead>
                  <tr>
                    <th class="agent">Agen Asuransi</th>
                    <th class="premi">Premi</th>
                    <th class="dayrs">Harian Rumah Sakit</th>
                    <th class="icuprice">Harga ICU</th>
                    <th class="daycrash">Harian Rumah Sakit <br />Karena Kecelakaan</th>
                    <th class="surgery">Fedah Pembedahan</th>
                  </tr>
                </thead>
                <tbody>
            		
                  <?php for ($i=1; $i <= 1 ; $i++) { ?>
                  <!-- row -->
                  <tr>
                    <td class="agent"><img src="img/ins-logo.jpg" /></td>
                    <td class="premi">Rp 102.000/Month</td>
                    <td class="dayrs">Rp 250.000 </td>
                    <td class="icuprice">Rp 500.000</td>
                    <td class="daycrash">Rp 500.000</td>
                    <td class="surgery">Rp 2.500.000 </td>
                  </tr>
                  <!-- end row -->
                  <?php } ?> 
                  
                </tbody>
              </table>
            </div>
            
            <div class="ins-form-data">
              <ul>
                <li>
                  <div>Your Email Address</div>
                  <input name="" type="text" />
                </li>
                <li>
                  <div>Your Phone Number</div>
                  <input name="" type="text" />
                </li>
              </ul>
            </div>
            
            <div class="ins-form-submit">
              <input name="" class="btn" value="Confirm" type="button" />
            </div>
          
          </li>
        </ul>
      </div>
      <!-- end section 2 -->
      
      
              
    </li>  
  </ul>
</section>

<?php require ('inc/doc-compare.php')?>
<?php require ('inc/footer.php')?>
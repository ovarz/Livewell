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
                    <th class="button"></th>
                  </tr>
                </thead>
                <tbody>
            		
                  <?php for ($i=1; $i <= 10 ; $i++) { ?>
                  <!-- row -->
                  <tr>
                    <td class="agent"><img src="img/ins-logo.jpg" /></td>
                    <td class="premi">Rp 102.000/Month</td>
                    <td class="dayrs">Rp 250.000 </td>
                    <td class="icuprice">Rp 500.000</td>
                    <td class="daycrash">Rp 500.000</td>
                    <td class="surgery">Rp 2.500.000 </td>
                    <td class="button">
                      <ul>
                        <li class="ins-btn-rate"><a class="btn"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li class="ins-btn-detail"><a class="btn">Detail</a></li>
                        <li class="ins-btn-req"><a class="btn">Request</a></li>
                      </ul>
                    </td>
                  </tr>
                  <!-- end row -->
                  <?php } ?> 
                  
                </tbody>
              </table>
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
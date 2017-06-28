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
                        <li class="ins-btn-rate"><a class="btn" href="javascript:void(0)"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li class="ins-btn-detail">
                          <a class="btn popup-detail" href="#detail-insurance">Detail</a>
                          <div id="detail-insurance" class="detail-popup">
                            <h1>Detail</h1>
                            <div>
                              <h2>Manfaat Umum</h2>
                              <ul>
                                <li>Santunan rawat inap harian akan dibayarkan apabila tertanggung menjalani perawatan di rumah sakit sampai dengan maksimal sembilan puluh (90) hari per tahun polis untuk penyakit-penyakit yang dilindungi.</li>
                                <li>Apabila tertanggung menjalani rawat inap di rumah sakit yang disebabkan oleh cedera yang ditanggung. Pembayaran faedah adalah untuk setiap harinya sampai dengan maksimal seratus delapan puluh (180) hari per tahun untuk rawat inap atas cedera yang ditanggung.</li>
                                <li>Apabila tertanggung menjalani rawat inap di rumah sakit dalam unit perawatan intensif yang disebabkan penyakit yang ditanggung atau cedera yang ditanggung sampai dengan maksimal lima belas (15) hari per tahun polis.</li>
                                <li>Apabila Tertanggung menjalani operasi pembedahan yang disebabkan oleh penyakit atau cedera yang ditanggung maka perusahaan akan membayarkan faedah pembedahan secara sekaligus namun tidak melebihi jumlah faedah pembedahan yang tertera pada daftar faedah untuk setiap rawat inap yang sama.</li>
                                <li>Perusahaan akan membayarkan Faedah "No Claim Bonus" sebesar 25% (dua puluh lima persen) dari total premi tanpa bunga yang telah dibayarkan selama 24 (dua puluh empat) bulan berturut-turut dengan tunduk pada ketentuan yang tercantum didalam polis. Perhitungan "No Claim Bonus" akan dilakukan kembali untuk setiap 24 (dua puluh empat) bulan berikutnya terhitung sejak tanggal dikeluarkannya polis atau sejak tanggal pemulihan polis.</li>
                              </ul>
                            </div>
                          </div>
                        </li>
                        <li class="ins-btn-req"><a class="btn" href="javascript:void(0)">Request</a></li>
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
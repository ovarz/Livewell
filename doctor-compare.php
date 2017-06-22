<?php $page='livewell'; $subpage='before-login'; require ('inc/header.php')?>

<section id="livewell">
  <ul>
    <li>

      <!-- section 1 -->
	  <div class="vmodule doc-compare-list">
        <h1>Compare These <b>Doctors</b></h1>
        <ul class="c-split-3 clearenter">
        
          <!-- list -->
          <?php for ($i=1; $i <= 3 ; $i++) { ?>
          <li>
            <div class="dcl-detail">
            
              <!-- row -->
              <div>
			    <div class="thumb flex_ori">
				  <img data-original="img/doctor-1.jpg" />              
                </div>
                <h2 class="doc-name">Dr. Albert Teddy</h2>
                <h3 class="doc-speciality">Cardiology</h3>
                <ul class="doc-rate">
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li>(12345)</li>
                </ul>
                <div class="doc-rs fa fa-map-marker" aria-hidden="true">Rumah Sakit Pusat Pertamina</div>
                <ul class="doc-btn">
                  <li><a class="btn doc-btn-detail">View Profile</a></li>
                  <li><a class="btn doc-btn-book">Book</a></li>
                  <li><a class="btn doc-btn-give-rate"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                </ul>
              </div>
              <!-- end row -->
              
              <!-- row -->
              <div>
                <b>33 years of experience</b>
                <ul>
                  <li>Dokter Umum RSUD Kota Baru, Kalimantan Selatan</li>
                  <li>Dokter Umum Puskesmas Sungai Kupang, Kalimantan Selatan</li>
                </ul>
              </div>
              <!-- end row -->  
              
              <!-- row -->
              <div>
                <b>Professional Membership</b>
                <ul>
                  <li>Ikatan Dokter Indonesia</li>
                </ul>
              </div>
              <!-- end row -->
              
              <!-- row -->
              <div>
                <b>Award</b>
                <ul>
                  <li>Partisipasi Bakti Sosial: tenaga medis Yayasan Setia Bakti lestari</li>
                </ul>
              </div>
              <!-- end row -->
              
              <!-- row -->
              <div>
                <b>Clinical Focus</b>
                <ul>
                  <li>Immunization</li>
                  <li>Common Diseases</li>
                  <li>Health Check-up</li>
                  <li>Critical Care Medicine</li>
                  <li>Internal Medicine</li>
                  <li>Pulmonary Disease</li>
                  <li>Sleep Medicine</li>
                </ul>
              </div>
              <!-- end row -->
              
              <div class="book-doctor-btn">
                <a class="btn" href="javascript:void(0)">Book this doctor</a>
              </div>
              
            </div>
          </li>
          <?php } ?> 
          <!-- list -->
          
        </ul>
      </div>
      <!-- end section 1 -->
        
    </li>  
  </ul>
</section>

<?php require ('inc/footer.php')?>
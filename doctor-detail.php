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
                <li><a class="fa fa-chevron-right" href="javascript:void(0)">Find Doctors</a></li>
                <li><span>Dr.Albert Teddy</span></li>
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
            <div class="docdetail">
              <ul>
              
                <!-- bio -->
                <li class="docprofile">
                  <div>
              	    <div class="flex_ori">
                      <img data-original="img/doctor-<?php echo rand(1, 7); ?>.jpg" />
                    </div>
                    <div class="doclist-info content_center">
                      <span>
                        <h2 class="doc-name">Dr.Andreas Harry</h2>
                        <h3>Cardiology</h3>
                        <ul class="doc-rate">
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li><i class="fa fa-star" aria-hidden="true"></i></li>
                          <li>(12345)</li>
                        </ul>
                        <div class="doc-rs fa fa-map-marker" aria-hidden="true">Rumah Sakit Gading Pluit</div>
                        <div class="doc-rs fa fa-map-marker" aria-hidden="true">Rumah Sakit Pusat Pertamina</div>
                        <ul class="doc-btn">
                          <li><a class="btn doc-btn-compare">Compare</a></li>
                          <li><a class="btn doc-btn-book">Book</a></li>
                          <li><a class="btn doc-btn-give-rate"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        </ul>
                      </span>
                    </div>
                  </div>
                </li>
                <!-- end bio -->
              
                <!-- info tab -->
                <li class="docinfo">
                
              	  <!-- tab button -->
                  <div class="docinfo-tab tabception">
                    <ul class="tabs">
                      <li><a itemprop="url" alt="link_title" href="#docinfo-profile">Profile</a></li>
                      <li><a itemprop="url" alt="link_title" href="#docinfo-location">Location</a></li>
                      <li><a itemprop="url" alt="link_title" href="#docinfo-review">Review</a></li>
                    </ul>
                  </div>
                  <!-- end tab button -->
                  
                  <div class="docinfo-tab-content docinfo-profile" id="docinfo-profile">   
                    <div>
                      <b>33 years of experience</b>
                      <ul>
                        <li>Dokter Umum RSUD Kota Baru, Kalimantan Selatan</li>
                        <li>Dokter Umum Puskesmas Sungai Kupang, Kalimantan Selatan</li>
                      </ul>
                    </div>
                    
                    <div>
                      <b>Professional Membership</b>
                      <ul>
                        <li>Ikatan Dokter Indonesia</li>
                      </ul>
                    </div>
                    
                    <div>
                      <b>Award</b>
                      <ul>
                        <li>Partisipasi Bakti Sosial: tenaga medis Yayasan Setia Bakti lestari</li>
                      </ul>
                    </div>
                    
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
                  </div>
                  
                  <div class="docinfo-tab-content docinfo-location" id="docinfo-location">   
                    <div>
                      <ul class="info-peta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Rumah Sakit Pusat Pertamina</li>
                        <li><a href="javascript:void(0)">open maps</a></li>
                      </ul>
                      <div class="rs-photo">
                        <img src="img/rs-photo.jpg" />
                      </div>
                      <b>Phone</b>
                      <div>+62 (031) 503-1333</div>
                    </div>
                    <div>
                      <b>Homepage</b>
                      <div><a href="javascript:void(0)">http://siloamhospitals.com</a></div>
                    </div>
                    <div>
                      <b>Address</b>
                      <div>
                        Jl. Raya Gubeng no. 70, Gubeng,<br />
                        Kota SBY, Jawa Timur 60281<br />
                        Indonesia
                      </div>
                    </div>
                    <div>
                      <b>Practice hours</b>
                      <div>8AM - 11AM</div>
                    </div>
                  </div>
                  
                  <div class="docinfo-tab-content docinfo-review" id="docinfo-review">   
                    <div class="docinfo-review-header">
                      <ul>
                        <li><h4>Customer Reviews</h4></li>
                        <li><a href="javascript:void(0)">See All &gt;</a></li>
                      </ul>
                    </div>
                    <?php for ($i=1; $i <= 5 ; $i++) { ?>
                    <div>
                      <b>Great doctor!</b>
                      <ul class="doc-rate">
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><b>Rizky_keisha_putri - Aug 17, 2016</b></li>
                      </ul>
                      <div>Dokternya baik dan pengertian sekali. Kliniknya juga bersih dan nyaman. Saya sangat puas dengan pelayanan dokter.</div>
                    </div>
                    <?php } ?> 
                  </div>
                  
                </li>
                <!-- end info tab -->
                
              </ul>
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
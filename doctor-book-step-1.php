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
                  <h1>Book this <b>Doctor</b></h1>
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
                          <li><a class="btn doc-btn-compare">View Profile</a></li>
                        </ul>
                      </span>
                    </div>
                  </div>
                </li>
                <!-- end bio -->
              
                <!-- info tab -->
                <li class="docinfo">
                
              	  <!-- tab button -->
                  <div class="docinfo-step">
                    <ul>
                      <li class="active"><span>Location</span> <div class="arrow"></div></li>
                      <li><span>Date & Time</span> <div class="arrow"></div></li>
                      <li><span>Patient's Detail</span> <div class="arrow"></div></li>
                      <li><span>Verify</span></li>
                    </ul>
                  </div>
                  <!-- end tab button -->
                  
                  <div class="docinfo-tab-content choose-loc">   
                    
                    <?php for ($i=1; $i <= 2 ; $i++) { ?>
                    <!-- choose location -->
                    <div>
                      <div class="place"><b>Place</b> Klinik Medika Lestari - Taman Palem</div>
                      <div class="addr">
                        <b>Address</b>
                        <p>Jl. Raya Gubeng no. 70, Gubeng, Kota SBY, Jawa Timur 60281</p>
                        <p>Indonesia</p>
                      </div>
                      <div class="practice">
                        <h5>Practice Hours</h5>
                        <b>Monday - Saturday</b>
                        <p>8AM - 11AM</p>
                      </div>
                      <div class="choose-button">
                        <input class="btn" value="Choose this location" name="" type="button" />
                      </div>
                    </div>
                    <!-- end choose location -->
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

<?php require ('inc/footer.php')?>
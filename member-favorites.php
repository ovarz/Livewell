<?php $page='livewell'; $subpage='before-login'; require ('inc/header.php')?>

<section id="livewell">
  <ul>
    <li>
    
      <!-- section 1 -->
	  <div class="vmodule">
        <ul class="c-split-1 clearenter">
          <li>
        
            <div class="profile-menu">
              <ul>
              
                <!-- button -->
                <li>
                  <a class="btn m-profile" href="javascript:void(0)">
                    <div>Profile</div>
                  </a>
                </li>
                <!-- end button -->
                
                <!-- button -->
                <li>
                  <a class="btn m-appointment" href="javascript:void(0)">
                    <div>Appointment</div>
                  </a>
                </li>
                <!-- end button -->
                
                <!-- button -->
                <li>
                  <a class="btn m-insurance" href="javascript:void(0)">
                    <div>Insurance</div>
                  </a>
                </li>
                <!-- end button -->
                
                <!-- button -->
                <li>
                  <a class="btn m-emr" href="javascript:void(0)">
                    <div>EMR</div>
                  </a>
                </li>
                <!-- end button -->
                
                <!-- button -->
                <li>
                  <a class="btn m-favorites active" href="javascript:void(0)">
                    <div>Favorites</div>
                  </a>
                </li>
                <!-- end button -->
                
                <!-- button -->
                <li>
                  <a class="btn m-settings" href="javascript:void(0)">
                    <div>Settings</div>
                  </a>
                </li>
                <!-- end button -->
                
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
                  <h1>Favorites</b></h1>
                  <div>
              	    <div class="flex_ori">
                      <img data-original="img/m-photo.jpg" />
                    </div>
                    <div class="doclist-info content_center">
                      <span>
                        <h2 class="doc-name">Ken Girisya</h2>
                        <h3 class="doc-speciality">kengirisya86@gmail.com</h3>
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
                      <li><a href="#fav-doctor">Doctor</a></li>
                      <li><a href="#fav-facility">Facility</a></li>
                      <li><a href="#fav-insurance">Insurance</a></li>
                    </ul>
                  </div>
                  <!-- end tab button -->

                  
                  <div class="docinfo-tab-content rsinfo-doctor fav-list" id="fav-doctor">   
                    <ul>
                    
                      <!-- list -->
          			  <?php for ($i=1; $i <= 3 ; $i++) { ?>
                      <li>
                        <div>
                          <div class="flex_thumb"><img src="img/doctor-<?php echo rand(1, 7); ?>.jpg" /></div>
                          <div class="doclist-info content_center">
                            <span>
                              <h2 class="doc-name">Dr.Andreas Harry</h2>
                              <h3 class="doc-speciality">Cardiology</h3>
                              <ul class="doc-rate">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li>(12345)</li>
                              </ul>
                              <div class="doc-rs fa fa-map-marker" aria-hidden="true">Rumah Sakit Gading Pluit</div>
                            </span>
                          </div>
                          <div class="doc-btn content_center">
                            <a class="btn doc-btn-give-rate"><i class="fa fa-star" aria-hidden="true"></i></a>
                          </div>
                        </div>
                      </li>
                      <?php } ?> 
          			  <!-- list -->
          
                    </ul>
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
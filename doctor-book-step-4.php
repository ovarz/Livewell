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
                      <li><span>Location</span> <div class="arrow"></div></li>
                      <li><span>Date & Time</span> <div class="arrow"></div></li>
                      <li><span>Patient's Detail</span> <div class="arrow"></div></li>
                      <li class="active"><span>Verify</span></li>
                    </ul>
                  </div>
                  <!-- end tab button -->
                  
                  <div class="docinfo-tab-content book-verify">   
                    
                    <div class="place-to-visit">
                      <h5>Place to visit</h5>
                    </div>
                    
                    <div>
                      <h4>Klinik Medika Lestari - Taman Palem</h4>
                      <p>Taman Palem Lestari Blok D10/17</p>
                      <p>Cengkareng, Jakarta Barat, Jakarta,</p>
                      <p>Indonesia 11730</p>
                      <p><h5>Aug 31, 2016 - 8:00 PM</h5><span>1st Option</span></p>
                      <p><h5>Sep 1, 2016 - 8:00 PM</h5><span>2nd Option</span></p>
                    </div>
                    
                    <div>
                      <h3>Patient's Detail</h3>
                      <h4>Mr. Ken Girisya</h4>
                      <p>+62 812-23 1234 28</p>
                      <p>Taman Palem Lestari Blok D10/17</p>
                      <p>Cengkareng, Jakarta Barat, Jakarta,</p>
                      <p>Indonesia 11730</p>
                    </div>
                    
                    <div class="agree">
                      <p>By Clicking "Book Doctor"</p>
                      <p>I confirm that i have agreed to LiveWell's</p>
                      <p><a href="javascript:void(0)">Terms & Conditions</a> and <a href="javascript:void(0)">Privacy Policy</a></p>
                    </div>
                    
                    <div class="book-button">
                      <input class="btn" value="Book Doctor" name="" type="button">
                    </div>
 
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
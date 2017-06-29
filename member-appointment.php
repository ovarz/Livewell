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
                  <a class="btn m-profile active" href="javascript:void(0)">
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
                  <a class="btn m-favorites" href="javascript:void(0)">
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
                  <h1>Appointment</b></h1>
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
                <li class="docinfo appointment-info">
                
                  <!-- tab button -->
                  <div class="docinfo-tab appointment-tab tabception">
                    <ul class="tabs">
                      <li><a href="#appointment-upcoming">Upcoming</a></li>
                      <li><a href="#appointment-past">Past</a></li>
                    </ul>
                  </div>
                  <!-- end tab button -->
                  
                  <div class="docinfo-tab-content appointment-list" id="appointment-upcoming">   
                    <ul>
                    
                      <!-- box -->
                      <li class="appointment-list-box">
                        <ul>
                          <li>
                            <div class="appoint-date">Thursday, 25 Aug 2016 - 17:30</div>
                            <div class="appoint-status">Booking Status - <b class="confirm">Confirmed</b></div>
                          </li>
                          <li>
                            <div class="doctor-title">Doctor</div>
                            <div class="doctor-name">Dr. Agustinus Iskandar, Sp. S</b></div>
                            <div class="doctor-spc">Cardiologist</div>
                          </li>
                          <li>
                            <div class="med-title">Address</div>
                            <div class="med-name">Klinik Media Lestari - Taman Palem</b></div>
                            <div class="med-addr">Taman Palem Lestari Blok D10/17, Cengkareng, Jakarta Barat, Jakarta Indonesia 11730</div>
                          </li>
                          <li>
                            <input name="" class="btn cancel-btn" value="Cancel booking" type="button" />
                          </li>
                        </ul>
                      </li>
                      <!-- end box -->
                      
                      
                      
                      <!-- box -->
                      <li class="appointment-list-box">
                        <ul>
                          <li>
                            <div class="appoint-date">Monday, 30 Aug 2016 - 14:30</div>
                            <div class="appoint-status">Booking Status - <b class="pending">Pending</b></div>
                          </li>
                          <li>
                            <div class="doctor-title">Doctor</div>
                            <div class="doctor-name">Dr. Agustinus Iskandar, Sp. S</b></div>
                            <div class="doctor-spc">Cardiologist</div>
                          </li>
                          <li>
                            <div class="med-title">Address</div>
                            <div class="med-name">Klinik Media Lestari - Taman Palem</b></div>
                            <div class="med-addr">Taman Palem Lestari Blok D10/17, Cengkareng, Jakarta Barat, Jakarta Indonesia 11730</div>
                          </li>
                          <li>
                            <input name="" class="btn cancel-btn" value="Cancel booking" type="button" />
                          </li>
                        </ul>
                      </li>
                      <!-- end box -->
                      
                    </ul>
                  </div>
                  
                  <div class="docinfo-tab-content appointment-list" id="appointment-past">   
                    <ul>
                    
                      <!-- box -->
                      <li class="appointment-list-box">
                        <ul>
                          <li>
                            <div class="appoint-date">Thursday, 25 Aug 2016 - 17:30</div>
                            <div class="appoint-status">Booking Status - <b class="confirm">Reviewed</b></div>
                          </li>
                          <li>
                            <div class="doctor-title">Doctor</div>
                            <div class="doctor-name">Dr. Agustinus Iskandar, Sp. S</b></div>
                            <div class="doctor-spc">Cardiologist</div>
                          </li>
                          <li>
                            <div class="med-title">Address</div>
                            <div class="med-name">Klinik Media Lestari - Taman Palem</b></div>
                            <div class="med-addr">Taman Palem Lestari Blok D10/17, Cengkareng, Jakarta Barat, Jakarta Indonesia 11730</div>
                          </li>
                          <li>
                            <a class="btn review-btn popup-detail" href="#popup-doctor-review">Review</a>
                            <div id="popup-doctor-review" class="detail-popup popup-review">
                              
                              <h5>Review</h5>
                              
                              <!-- section -->
                              <span>
                                <div class="doctor-title">Doctor</div>
                                <div class="doctor-name">Dr. Agustinus Iskandar, Sp. S</b></div>
                              </span>
                              <!-- end section -->
                              
                              <!-- section -->
                              <span>
                                <ul class="doc-rate">
                                  <li class="now"><i class="fa fa-star" aria-hidden="true"></i></li>
                                  <li class="now"><i class="fa fa-star" aria-hidden="true"></i></li>
                                  <li class="now"><i class="fa fa-star" aria-hidden="true"></i></li>
                                  <li class="now"><i class="fa fa-star" aria-hidden="true"></i></li>
                                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                </ul>
                              </span>
                              <!-- end section -->
                              
                              <!-- section -->
                              <span class="write-review">
                                <div>Write a review</div>
                                <textarea name="" cols="" rows=""></textarea>
                              </span>
                              <!-- end section -->
                              
                              <!-- section -->
                              <span>
                                <div class="med-title">Facility</div>
                                <div class="med-name">Klinik Media Lestari - Taman Palem</b></div>
                              </span>
                              <!-- end section -->
                              
                              <!-- section -->
                              <span>
                                <ul class="doc-rate">
                                  <li class="now"><i class="fa fa-star" aria-hidden="true"></i></li>
                                  <li class="now"><i class="fa fa-star" aria-hidden="true"></i></li>
                                  <li class="now"><i class="fa fa-star" aria-hidden="true"></i></li>
                                  <li class="now"><i class="fa fa-star" aria-hidden="true"></i></li>
                                  <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                </ul>
                              </span>
                              <!-- end section -->
                              
                              <!-- section -->
                              <span class="write-review">
                                <div>Write a review</div>
                                <textarea name="" cols="" rows=""></textarea>
                              </span>
                              <!-- end section -->
                              
                              <!-- section -->
                              <span class="button">
                                <ul>
                                  <li><input class="btn" value="Post" name="" type="button" /></li>
                                  <li><input class="btn cancel-btn" value="Cancel" name="" type="button" /></li>
                                </ul>
                              </span>
                              <!-- end section -->
                              
                            </div>
                          </li>
                        </ul>
                      </li>
                      <!-- end box -->
                      
                      
                      
                      <!-- box -->
                      <li class="appointment-list-box">
                        <ul>
                          <li>
                            <div class="appoint-date">Monday, 30 Aug 2016 - 14:30</div>
                            <div class="appoint-status">Booking Status - <b class="pending">Completed</b></div>
                          </li>
                          <li>
                            <div class="doctor-title">Doctor</div>
                            <div class="doctor-name">Dr. Agustinus Iskandar, Sp. S</b></div>
                            <div class="doctor-spc">Cardiologist</div>
                          </li>
                          <li>
                            <div class="med-title">Address</div>
                            <div class="med-name">Klinik Media Lestari - Taman Palem</b></div>
                            <div class="med-addr">Taman Palem Lestari Blok D10/17, Cengkareng, Jakarta Barat, Jakarta Indonesia 11730</div>
                          </li>
                        </ul>
                      </li>
                      <!-- end box -->
                      
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
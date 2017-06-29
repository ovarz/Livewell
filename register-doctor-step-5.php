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
                <li><a class="fa fa-chevron-right" href="javascript:void(0)">Register Doctor</a></li>
                <li><span>Create Profile</span></li>
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
            <div class="docdetail uregis">
              <ul>
              
                <!-- bio -->
                <li class="docprofile">
                  <div>
                    <h1>Hi, <span>Ken Girisya</span></h1>
              	    <div class="flex_ori">
                      <img data-original="img/doctor-<?php echo rand(1, 7); ?>.jpg" />
                    </div> 
                    <h6 class="note">Please Complete <span>Your Profile</span></h6>                
                  </div>
                </li>
                <!-- end bio -->
              
                
                
                <li class="docinfo">
                  <div class="uregis-bar">
                    <span style="width:80%"></span>
                    <div>80%</div>
                  </div>
                </li>
                
                
                
                <li class="docinfo">
                  <div class="uregis-form docinfo-tab-content">
                    
                    <!-- section -->
                    <div>
 					  <h4>Your Practice Location Info</h4>
                      <ul>
                    
                        <!-- row -->
                        <li>
                          <h5>Own Practice</h5>
                          <select name="">
                            <option value="1"></option>
                          </select>
                        </li>
                        <!-- end row -->
                      
                        <!-- row -->
                        <li>
                          <h5>Name of Clinic / Facility</h5>
                          <select name="">
                            <option value="1"></option>
                          </select>
                        </li>
                        <!-- end row -->
                      
                      </ul>
                    </div>
                    <!-- end section -->
                    
                    
                    
                    <!-- section -->
                    <div>
 					  <h4>Address</h4>
                      <ul>
                    
                        <!-- row -->
                        <li>
                          <h5>Street Address</h5>
                          <input name="" type="text" />
                        </li>
                        <!-- end row -->
                      
                        <!-- row -->
                        <li>
                          <h5>City</h5>
                          <select name="">
                            <option value="1"></option>
                          </select>
                        </li>
                        <!-- end row -->
                      
                        <!-- row -->
                        <li>
                          <h5>State</h5>
                          <select name="">
                            <option value="1"></option>
                          </select>
                        </li>
                        <!-- end row -->
                        
                        <!-- row -->
                        <li>
                          <h5>Country</h5>
                          <select name="">
                            <option value="1"></option>
                          </select>
                        </li>
                        <!-- end row -->
                        
                        <!-- row -->
                        <li>
                          <h5>Zip Core</h5>
                          <input name="" type="text" />
                        </li>
                        <!-- end row -->
                      
                      </ul>
                    </div>
                    <!-- end section -->
                    
                    
                    
                    <!-- section -->
                    <div>
 					  <h4>Contact Number</h4>
                      <ul>
                    
                        <!-- row -->
                        <li>
                          <h5>Phone Number</h5>
                          <input name="" type="text" />
                        </li>
                        <!-- end row -->
                        
                        <!-- row -->
                        <li>
                          <h5>Schedule</h5>
                          <input name="" type="text" />
                        </li>
                        <!-- end row -->
                        
                        <!-- row -->
                        <li>
                          <h5>Practising Certificate</h5>
                          <input name="" type="text" />
                        </li>
                        <!-- end row -->
                        
                        <!-- row -->
                        <li>
                          <input name="" class="btn addqua" value="Add Practice Location" type="button" />
                        </li>
                        <!-- end row -->
                      
                      </ul>
                    </div>
                    <!-- end section -->



                    <!-- button -->
                    <div>
                      <input name="" class="btn" value="Continue" type="button" />
                    </div>
                    <!-- end button -->
                    
                  </div>
                </li>
                
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
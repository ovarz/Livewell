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
                    <span style="width:90%"></span>
                    <div>90%</div>
                  </div>
                </li>
                
                
                
                <li class="docinfo">
                  <div class="uregis-form docinfo-tab-content">
                    
                    <!-- section -->
                    <div>
 					  <h4>Your Professional Affiliation Info</h4>
                      <ul>
                    
                        <!-- row -->
                        <li>
                          <h5>Professional Affiliation</h5>
                          <input name="" type="text" />
                        </li>
                        <!-- end row -->
                      
                        <!-- row -->
                        <li>
                          <input name="" class="chbox" type="checkbox" value="" /> <span>I declared all the stated data to be correct.</span>
                        </li>
                        <!-- end row -->
                      
                      </ul>
                    </div>
                    <!-- end section -->



                    <!-- button -->
                    <div>
                      <input name="" class="btn chbox" value="Continue" type="button" />
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

<?php require ('inc/footer.php')?>
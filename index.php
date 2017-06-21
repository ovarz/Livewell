<?php $page='livewell'; $subpage='before-login'; require ('inc/header.php')?>

<section id="livewell">
  <ul>
    <li>
    
      <!-- section 1 -->
	  <div class="vmodule index-need">
        <div class="flex_lazy">
          <img data-original="img/index-need.jpg" />
        </div>
        <ul class="c-split-1 clearenter">
          <li>
        
            <div class="need-opt">
              <h5>What do you need ?</h5>
              <ul class="need-opt-form">
                <li>
                  <select>
                    <option value="1">Doctor</option>
                  </select>
                </li>
                <li>
                  <select>
                    <option value="1">Province, City</option>
                  </select>
                </li>
                <li>
                  <input name="" type="text" class="field" placeholder="Keywords (Doctor name, services)" />
                </li>
                <li>
                  <input name="" type="button" class="btn" value="Search" />
                </li>
              </ul>
            </div>

          </li>
        </ul>
      </div>
      <!-- end section 1 -->
      
      
      
      <!-- section 2 -->
	  <div class="vmodule index-app">
        <ul class="c-split-1 clearenter">
          <li>
        
            <div class="index-app-detail">
              <div class="index-app-img flex_ori"><img data-original="img/index-app.jpg" /></div>
              <div class="index-app-right content_center">
                <span>
                  <ul class="index-app-info">
                    <li>Your Health at Your Finger Tips</li>
                    <li>Finding doctor or a prefect insurance has become easy task. Download LiveWell apps and get started.</li>
                  </ul>
                  <div class="index-app-download">
                    <div class="content_center">
                      <span>Apps available on :</span>
                    </div>
                    <ul>
                      <li><img src="img/footer-apple.png" /></li>
                      <li><img src="img/footer-android.png" /></li>
                    </ul>
                  </div>
                </span>
              </div>
            </div>

          </li>
        </ul>
      </div>
      <!-- end section 2 -->
      
      
      
      <!-- section 3 -->
	  <div class="vmodule index-medical">
        <ul class="c-split-1 clearenter">
          <li>
        
            <div class="index-medical-detail">
              <h2>Access your E-Medical Records</h2>
              <p>Your can Access and see all of your medical records easily from Livewell website</p>
              <ul>
                <li><input name="" type="button" class="btn" value="Access EMR" /></li>
                <li><input name="" type="button" class="btn" value="Learn More" /></li>
              </ul>
            </div>
       		<div class="index-medical-img flex_lazy"><img data-original="img/index-medical.jpg" /></div>

          </li>
        </ul>
      </div>
      <!-- end section 3 -->
      
      
      
      <!-- section 4 -->
	  <div class="vmodule article-list">
        
        <!-- menu -->
        <div class="article-list-menu">
          <ul>
            <li><a href="javascript:void(0)">Feel Well</a></li>
            <li><a href="javascript:void(0)">Eat Well</a></li>
            <li><a href="javascript:void(0)">Work Well</a></li>
            <li><a href="javascript:void(0)">Plan Well</a></li>
            <li><a href="javascript:void(0)">Learn Well</a></li>
            <li><a href="javascript:void(0)">Fact Sheet</a></li>
          </ul>
          
          <div class="article-list-search content_center">
            <span>
              <div class="button"><input name="" type="button" /><span class="content_center"><i class="fa fa-search" aria-hidden="true"></i></span></div>
              <div class="search"><input name="" type="text" placeholder="Search" /></div>
            </span>
          </div>
        </div>
        <!-- end menu -->
        
        <!-- article list -->        
        <ul class="c-split-3 clearenter">
          <?php for ($i=1; $i <= 9 ; $i++) { ?>
          <li>
            <div class="article-list-box">
              <a href="javascript:void(0)" class="thumb flex_ori"><img data-original="img/sample-<?php echo rand(1, 7); ?>.jpg" /></a>
              <div class="article-info">
                <ul class="article-date">
                  <li>
                    <span class="content_center"><i class="fa fa-comment" aria-hidden="true"></i></span>
                    <div>6 Comments</div>
                  </li>
                  <li>- Aug 17, 2016</li>
                </ul>
                <a class="article-link" href="javascript:void(0)">Bahayakah Mengonsumsi Makanan Lewat Tanggal Kedaluwarsa?</a>
                <div class="article-desc">
                  <p>Rumah adalah tempat paling nyaman untuk menikmati waktu senggang. Makanya, rumah perlu diatur dengan baik supaya kita terhindar dari...</p>
                </div>
              </div>
            </div>
          </li>
          <?php } ?> 
        </ul>
        <!-- end article list -->    
        
      </div>
      <!-- end section 4 -->
  
    </li>  
  </ul>
</section>

<?php require ('inc/footer.php')?>
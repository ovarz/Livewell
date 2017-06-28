<?php $page='livewell'; $subpage='before-login'; require ('inc/header.php')?>

<section id="livewell">
  <ul>
    <li>    
      
      <!-- section 1 -->
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
        
        <div class="article-more">
          <input name="" class="btn" value="See More Articles" type="button" />
        </div> 
        
      </div>
      <!-- end section 1 -->
  
    </li>  
  </ul>
</section>

<?php require ('inc/footer.php')?>
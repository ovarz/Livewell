<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<title>Livewell</title>		
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="HandheldFriendly" content="true" />
<meta name="apple-touch-fullscreen" content="yes" />
<base href="/livewell/" />
<link href="img/favicon.ico" rel="icon" type="image/ico" />
<link href="css/livewell.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<h1 class="hide">viva.co.id</h1>

<!-- header -->
<header>
  <div>
  
    <!-- hamburger menu -->
    <div class="top-hamburger content_center">
      <a href="javascript:void(0)"><i class="fa fa-bars content_center top-popup" aria-hidden="true"></i></a>
    </div>
    <!-- end hamburger menu -->
  
    <!-- logo -->
    <div class="top-logo content_center">
      <a href=" "><img src="img/top-logo.png" /></a>
    </div>
    <!-- end logo -->
    
    <div class="top-right content_center">
      <span class="clearenter">
      
        <!-- login -->
        <div class="top-login">
          <ul>
            <?php if($subpage == 'before-login') { ?>
            <li>
              <a class="btn btn-2 popup-detail" href="#popup-register">Register</a>
              <div id="popup-register" class="detail-popup popup-loginregis">
                <h1>Register</h1>
                <div>
                  
                  <!-- tab button -->
                  <div class="choose-user tabception">
                    <ul class="tabs">
                      <li>
                        <a href="#cu-doctor">
                          <span><img src="img/icon-doctor.png" /></span>
                          <div>Doctor</div>
                        </a>                      
                      </li>
                      <li>
                        <a href="#cu-patient">
                          <span><img src="img/icon-patient.png" /></span>
                          <div>Patient</div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <!-- end tab button -->
                  
                  
                  
                  <div id="cu-doctor" class="login-content">
                    
                    <div class="login-form">
                      <input name="" type="text" class="insert-phone" placeholder="Mobile Number" />
                      <input name="" type="text" class="insert-email" placeholder="Email" />
                      <input name="" type="password" class="insert-pass" placeholder="Password" />
                    </div>
                    
                    <div class="login-agree">
                      <input name="" type="checkbox" value="" />
                      <span>I agree to LiveWell's <a href="javascript:void(0)" target="_blank">Terms & Conditions</a> and <a href="javascript:void(0)" target="_blank">Privacy Policy</a></span>
                    </div>
                    
                    <div class="login-button">
                      <input name="" class="btn" value="Create account" type="button" />
                    </div>
                    
                    <div class="login-socmed">
                      <h6>or create account with</h6>
                      <a class="btn login-fb" href="javascript:void(0)">Facebook</a>
                      <a class="btn login-go" href="javascript:void(0)">Twitter</a>
                    </div>
                    
                  </div>
                  
                  
                  
                  <div id="cu-patient">
                    cu-patient
                  </div>
                  
                </div>
              </div>
            </li>
            
            <li>
              <a class="btn popup-detail" href="#popup-login">Login</a>
              <div id="popup-login" class="detail-popup popup-loginregis">
                <h1>Login</h1>
                <div>
                  
                  <!-- tab button -->
                  <div class="choose-user tabception">
                    <ul class="tabs">
                      <li>
                        <a href="#cu-doctor">
                          <span><img src="img/icon-doctor.png" /></span>
                          <div>Doctor</div>
                        </a>                      
                      </li>
                      <li>
                        <a href="#cu-patient">
                          <span><img src="img/icon-patient.png" /></span>
                          <div>Patient</div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <!-- end tab button -->
                  
                  
                  
                  <div id="cu-doctor" class="login-content">
                    
                    <div class="login-form">
                      <input name="" type="text" class="insert-email" placeholder="Email" />
                      <input name="" type="password" class="insert-pass" placeholder="Password" />
                    </div>
                    
                    <div class="login-forgot">
                      <a href="javascript:void(0)">Forgot Password</a>
                    </div>
                    
                    <div class="login-button">
                      <input name="" class="btn" value="Login to your account" type="button" />
                    </div>
                    
                    <div class="login-socmed">
                      <h6>or login with</h6>
                      <a class="btn login-fb" href="javascript:void(0)">Facebook</a>
                      <a class="btn login-go" href="javascript:void(0)">Twitter</a>
                    </div>
                    
                  </div>
                  
                  
                  
                  <div id="cu-patient">
                    cu-patient
                  </div>
                  
                </div>
              </div>
            </li>
            <?php } ?>
            
            <?php if($subpage == 'after-login') { ?>
            <li><a class="btn btn-2" href="javascript:void(0)">Profile</a></li>
            <li><a class="btn" href="javascript:void(0)">Logout</a></li>
            <?php } ?>
          </ul>    
        </div>
        <!-- end login -->
        
        
        
        <!-- menu desktop -->
        <div class="top-menu">
          <?php require ('inc/menu.php')?>   
        </div>
        <!-- end menu desktop -->
        
      </span>
    </div>
  </div>
</header>
<!-- end header -->



<!-- menu mobile -->
<div class="mobile-menu">
  <?php require ('inc/menu.php')?>   
</div>
<!-- end menu mobile -->



<div class="dummy-header"></div>
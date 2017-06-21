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
            <li><a class="btn btn-2" href="javascript:void(0)">Register</a></li>
            <li><a class="btn" href="javascript:void(0)">Login</a></li>
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
<!DOCTYPE html>
<html>
<head>
<title>تسجيل الدخول</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Best Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!-- cart -->
  <script src="js/simpleCart.min.js"> </script>
<!-- cart -->
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<!-- for bootstrap working -->
  <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>
  
<body>
<!-- header -->
  <div class="header">
    <div class="container">
      <div class="header-grid">
        <div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
          <ul>
<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">refaat@yahoo.com</a></li>
<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><span>01224540776</span></li>
<li class="active"><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="/login">Login</a></li>
          </ul>
        </div>
        <div class="header-grid-right animated wow slideInRight" data-wow-delay=".5s">
          <ul class="social-icons">
            <li><a href="https://www.facebook.com/%D8%B1%D9%81%D8%B9%D8%AA-%D8%A7%D9%84%D8%B9%D9%86%D8%A7%D9%86%D9%89-%D9%84%D9%84%D8%B3%D8%AA%D8%A7%D8%A6%D8%B1-%D9%88%D8%A7%D9%84%D8%AF%D9%8A%D9%83%D9%88%D8%B1-1517358278509692/" class="facebook"></a></li>
            <li><a href="#" class="twitter"></a></li>
            <li><a href="#" class="g"></a></li>
            <li><a href="#" class="instagram"></a></li>
          </ul>
        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="logo-nav">
        <div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
          <h1><a href="index.html">رفعت العناني</a></h1>
        </div>
        
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
<!-- //header -->
<!-- breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
        <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>الرئيسية</a></li>
        <li class="active">تسجيل الدخول</li>
      </ol>
    </div>
  </div>
<!-- //breadcrumbs -->
<!-- login -->
  <div class="login">

      <div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
        
        <form accept-charset="UTF-8" role="form" action="{{ url('/login') }}" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <fieldset>
      <div class="form-group">
      اسم المستخدم
        <input class="form-control" placeholder="username" name="username" type="text">
            <p class="errors">{{$errors->first('username')}}</p>
      </div>
      
      <div class="form-group" >
        <input class="form-control" placeholder="Password" name="password" type="password" value="">
        <p class="errors">{{$errors->first('Password')}}</p>
      </div>
      <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
    </fieldset>
    @if(Session::has('error'))
      <br>
      <div class="alert alert-danger" style="text-align:center;" >
      <strong>Whoops!</strong> There is something wrong<br><br>  
    </div>
    @endif
  </form>
      </div>
      
    </div>
  </div>
<!-- //login -->
<!-- footer -->
  <div class="footer">
    <div class="container">
      <div class="footer-grids">
        <div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
          <h3>عن الموقع</h3>
          <p><span>محلات رفعت العناني للستائر والديكور .. أحدث تشكيلة للستائر</span></p>
        </div>
        <div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".6s">
          <h3>تواصل</h3>
          <ul>
            <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>اسيوط شارع النميس</span></li>
            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">refaat@yahoo.com</a></li>
            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>01224540776</li>
          </ul>
        </div>
        
        <div class="clearfix"> </div>
      </div>
      <div class="footer-logo animated wow slideInUp" data-wow-delay=".5s">
        <h2><a href="index.html">رفعت العناني<span></span></a></h2>
      </div>
      <div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
        <p>All rights reserved | Design by <a href="https://www.facebook.com/profile.php?id=100012286755018&fref=ts">ِAlaa Mohamed</a></p>
      </div>
    </div>
  </div>
<!-- //footer -->
</body>
</html>
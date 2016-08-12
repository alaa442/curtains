<!DOCTYPE html>
<html>
<head>
<title>محلات رفعت للستائر</title>
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
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- timer -->
<link rel="stylesheet" href="css/jquery.countdown.css" />
<!-- //timer -->
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
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>01224540776</li>
						<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="/login">Login</a></li>
						
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
					<h1><a href="/index">رفعت العناني</a></h1>
				</div>
				<div class="logo-nav-left1">
					<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div> 
					</nav>
				</div>
				
				<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="banner-info animated wow zoomIn" data-wow-delay=".5s">
				<h3>رفعت العناني للستائر</h3>
				<h4><span>30%</span> تخفيضات تصل الي</h4>				 
			</div>
		</div>
	</div>
<!-- //banner -->
 
<!-- collections -->
	<div class="new-collections">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">منتجات جديدة</h3>
	
			<div class="new-collections-grids">
				<div class="new-collections-grid">
				@foreach($products as $product)
				<div class="col-md-3">
					<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
						<div class="new-collections-grid1-image">

							<a href="single.html" class="product-image">
								<img src="data:image/jpeg;base64,<?php echo base64_encode($product->img); ?>" width="300" height="900" alt=" " class="img-responsive" /></a>
							 
						</div>
						<h4><a href="single.html">{{$product->type}}</a></h4>
						<div class="new-collections-grid1-left">
							<p><i>{{$product->price}}</i></p>
						</div>
					</div>
				</div>
				@endforeach	
					
			</div>
		</div>
	</div>
<!-- //collections -->
s
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
				<p>All rights reserved | Design by <a href="https://www.facebook.com/profile.php?id=100012286755018&fref=ts">Alaa Mohamed</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
</body>
</html>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('titlearea',"Digital NewsPaper")</title>    
<link href="{{asset('public/front/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->     
<link href="{{asset('public/front/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap stylesheet -->
<link href="{{asset('public/front/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{asset('public/front/css/flexslider.css')}}" type="text/css" media="screen" property="" />
<!-- stylesheet -->
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<!--//fonts-->
<script type="text/javascript" src="{{asset('public/front/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('public/front/js/main.js')}}"></script>
<!-- Required-js -->
<!-- main slider-banner -->
<script src="{{asset('public/front/js/skdslider.min.js')}}"></script>
<link href="{{asset('public/front/css/skdslider.css')}}" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('public/front/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('public/front/js/easing.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->

<!-- scriptfor smooth drop down-nav -->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- //script for smooth drop down-nav -->
</head>
<body>
<!-- header -->
	<header>
		<div class="w3layouts-top-strip">
			<div class="container">
				<div class="logo">
					<h1><a href="{{url('/')}}">Digital NewsPaper</a></h1>
					<p>lets make a Life style</p>
				</div>
				<div class="w3ls-social-icons" id="cartinfoarea">
				
				</div>
				<!-- <div class="w3ls-social-icons">
					<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
					<a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-google-plus"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-rss"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-behance"></i></a>
				</div> -->
			</div>
		</div>
		<!-- navigation -->
			<nav class="navbar navbar-default">
			  <div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li><a class="active" href="{{url('/')}}">Home</a></li>
					<li><a href="{{url('/about')}}">About</a></li>
					<li><a href="{{url('/lifestyle')}}">Life Style</a></li>
					<li><a href="{{url('/books')}}">Books</a></li>
					<li><a href="{{url('/fashion')}}">Fashion</a></li>
					<!-- <li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Short Codes <span class="caret"></span></a>
					  <ul class="dropdown-menu">
					  <li><a href="icons.html">Icons Page</a></li>
						<li><a href="typo.html">Typography</a></li>
						
					  </ul>
					</li> -->
					<li><a href="{{url('/photography')}}">Photography</a></li>
					<li><a href="{{url('/features')}}">Features</a></li>
					<li><a href="{{url('/contact')}}">Contact</a></li>
				  </ul>
				</div><!-- /.navbar-collapse -->
				<div class="w3_agile_login">
							<div class="cd-main-header">
								<a class="cd-search-trigger" href="#cd-search"> 
									<span></span></a>
								<!-- cd-header-buttons -->
							</div>
							<div id="cd-search" class="cd-search">
								{!! Form::open(array('method'=>'get','url'=>'/search')) !!}

							<input name="search" type="search" placeholder="Search...">

							{!! Form::close()!!}
						 </div>
							
						</div>
						<div class="clearfix"> 
						</div>
					</div><!-- /.container-fluid -->
			</nav>
			
		<!-- //navigation -->
	</header>
	
	<div>
		@yield('contactarea')
	</div>
	<div>
		@yield('aboutus')
	</div>
	
	<div>@yield('fashion')</div>
	<div>@yield('photography')</div>
	<div>@yield('features')</div>
       <div>@yield('lifestyle')</div>
		<!-- <div class="container">
		
		<div class="col-md-3 w3agile_blog_left">
				<div class="w3l_tags">
					<h3>Tags</h3>
					<ul class="tag">
						<li><a href="singlepage.html">dasDASD</a></li>
						<li><a href="singlepage.html">Photography</a></li>
						<li><a href="singlepage.html">Artist</a></li>
						<li><a href="singlepage.html">Music</a></li>
						<li><a href="singlepage.html">Shop</a></li>
						<li><a href="singlepage.html">Corporate</a></li>
						<li><a href="singlepage.html">Personal</a></li>
						<li><a href="singlepage.html">Restaurant</a></li>
						<li><a href="singlepage.html">Business</a></li>
					</ul>
				</div>
			</div>
		</div> -->
	
	<!-- footer -->
	<div class="footer-agile-info">
		<div class="container">
			<div class="col-md-4 w3layouts-footer">
				<h3>Contact Information</h3>
					<p><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>22 Russell Street, Victoria ,Melbourne AUSTRALIA </p>
					<p><span><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#">E: info [at] domain.com</a> </p>
					<p><span><i class="fa fa-mobile" aria-hidden="true"></i></span>P: +254 2564584 / +542 8245658 </p>
					<p><span><i class="fa fa-globe" aria-hidden="true"></i></span><a href="#">W: www.w3layouts.com</a></p>
			</div>
			<div class="col-md-4 wthree-footer">
				<h2>Fashion Blog</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis aute .</p>
			</div>
			<div class="col-md-4 w3-agile">
				<h3>Newsletter</h3>
				<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<form action="#" method="post">
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="submit" value="Send">
				</form>
			</div>
		</div>
	</div>
	<!-- footer -->
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="w3agile-list">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="lifestyle.html">Life Style</a></li>
					<li><a href="photography.html">Photography</a></li>
					<li><a href="fashion.html">Fashion</a></li>
					<li><a href="icons.html">Codes</a></li>
					<li><a href="features.html">Features</a></li>
					<li><a href="{{url('/contact')}}">Contact</a></li>
				</ul>
			</div>
			<div class="agileinfo">
				<p>© 2020 Fashion Blog . All Rights Reserved . Design by <a href="#">W3layouts</a></p>
			</div>
		</div>
	</div>
<!-- //copyright -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('public/front/js/bootstrap.js')}}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from kodeforest.net/html/baldiyat/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Nov 2020 05:28:42 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Baldiyat - Local Government Template</title>
        <!-- Bootstrap core CSS -->
        <link href="{{asset('client/css/bootstrap.css')}}" rel="stylesheet">
        <!-- Slick Slider CSS -->
        <link href="{{asset('client/css/slick-theme.css')}}" rel="stylesheet"/>
        <!-- ICONS CSS -->
        <link href="{{asset('client/css/font-awesome.css')}}" rel="stylesheet">
		<!-- ICONS CSS -->
        <link href="{{asset('client/css/animation.css')}}" rel="stylesheet">
        <!-- Pretty Photo CSS -->
        <link href="{{asset('client/css/prettyPhoto.css')}}" rel="stylesheet">
		<!-- Custom Main StyleSheet CSS -->
        <link href="{{asset('client/css/component.css')}}" rel="stylesheet">
		<!-- Pretty Photo CSS -->
        <link href="{{asset('client/css/jquery.bxslider.css')}}" rel="stylesheet">
		<!-- Pretty Photo CSS -->
        <link href="{{asset('client/css/style5.css')}}" rel="stylesheet">
		<!-- Pretty Photo CSS -->
        <link href="{{asset('client/css/demo.css')}}" rel="stylesheet">
		<!-- Pretty Photo CSS -->
        <link href="{{asset('client/css/fig-hover.css')}}" rel="stylesheet">
        <!-- Typography CSS -->
        <link href="{{asset('client/css/typography.css')}}" rel="stylesheet">
        <!-- Custom Main StyleSheet CSS -->
        <link href="{{asset('client/css/style.css')}}" rel="stylesheet">
		<!-- Custom Main StyleSheet CSS -->
        <link href="{{asset('client/css/component.css')}}" rel="stylesheet">
		<!-- Custom Main StyleSheet CSS -->
        <link href="{{asset('client/css/shotcode.css')}}" rel="stylesheet">
		<!-- Custom Main StyleSheet CSS -->
        <link href="{{asset('client/css/svg-icon.css')}}" rel="stylesheet">
        <!-- Color CSS -->
        <link href="{{asset('client/css/color.css')}}" rel="stylesheet">
        <!-- Responsive CSS -->
        <link href="{{asset('client/css/responsive.css')}}" rel="stylesheet">
    </head>
    <body class="demo-5">
        <!--WRAPPER START--> 
        <div class="wrapper"> 
			<header>
				<!--CITY TOP WRAP START--> 
				<div class="city_top_wrap">
					<div class="container-fluid">
						<div class="city_top_logo">
							<figure>
								<h1><a href="#"><img src="{{('client/images/top-logo.jpeg')}}" width="100" height="100" alt="kodeforest"></a></h1>
							</figure>
						</div>
						<div class="city_top_news">
							<span>City News</span>
							<div class="city-news-slider">
								<div>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry <i class="fa fa-star"></i></p>
								</div>
								<div>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry <i class="fa fa-star"></i></p>
								</div>
								<div>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry <i class="fa fa-star"></i></p>
								</div>
							</div>
						</div>
						<div class="city_top_social">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								<li><a href="#"><i class="fa fa-google"></i></a></li>
							</ul>
						</div>
						
					</div>
				</div>
				<!--CITY TOP WRAP END-->
				
				<!--CITY TOP NAVIGATION START-->
				<div class="city_top_navigation">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="navigation">
									<ul>
										<li><a href="{{url('/')}}">Home</a></li>
										<li><a href="{{url('/about')}}">About GWS</a></li>
										
										<li><a href="#">Members</a>
											<ul class="child">
												<li><a href="{{url('central_executive')}}">Central Executive</a></li>
												<li><a href="{{url('district_executive')}}">District Executive</a></li>
												<li><a href="{{url('women_wings')}}">Women Wings</a></li>
											</ul>
										</li>
										<li><a href="#">Art & Culture</a>
											<ul class="child">
												<li><a href="team.html">Galo Script About language </a></li>
												<li><a href="mayor.html">Folk dance </a></li>
												<li><a href="{{url('song')}}">Folk Songs</a></li>
												<li><a href="goverment-grid.html">Attire</a></li>
												<li><a href="health-department.html">Ornaments</a></li>
												<li><a href="health-department02.html">Folk lore </a></li>
											</ul>
										</li>
										<li><a href="index-2.html">Patrons</a></li>
										<li><a href="index-2.html">By law</a></li>
										<li><a href="index-2.html">Achievement</a></li>
										<li><a href="index-2.html">Xirman Alo</a></li>
										<li><a href="index-2.html">Galo MLA</a></li>
										<li><a href="{{url('contact')}}">Contact Us</a></li>
										<a class="top_user" href="{{url('/login')}}"><i class="fa fa-user"></i></a>
									</ul>									
								</div>

								
								<!--DL Menu Start-->
								<div id="kode-responsive-navigation" class="dl-menuwrapper">
									<button class="dl-trigger">Open Menu</button>
									<ul class="dl-menu">
										<li><a class="active" href="index-2.html">Home</a></li>
										<li><a class="active" href="index-2.html">About GWS</a></li>
										<li class="menu-item kode-parent-menu"><a href="#">Members</a>
											<ul class="dl-submenu">
												<li><a href="#">Central Executive Members</a></li>
												<li><a href="#">Women Wings</a></li>
												<li><a href="#">Districts Executive</a></li>
											</ul>
										</li>
										<li class="menu-item kode-parent-menu"><a href="#">Art & Culture</a>
											<ul class="dl-submenu">
												<li><a href="team.html">Galo Script About language </a></li>
												<li><a href="mayor.html">Folk dance </a></li>
												<li><a href="{{url('song')}}">Folk Songs</a></li>
												<li><a href="goverment-grid.html">Attire</a></li>
												<li><a href="health-department.html">Ornaments</a></li>
												<li><a href="health-department02.html">Folk lore </a></li>
											</ul>
										</li>
										<li><a href="index-2.html">Patrons</a></li>
										<li><a href="index-2.html">By law</a></li>
										<li><a href="index-2.html">Achievement</a></li>
										<li><a href="index-2.html">Xirman Alo</a></li>
										<li><a href="index-2.html">Galo MLA</a></li>
										<li><a href="index-2.html">Contact Us</a></li>
										<li><a href="{{url('/login')}}">Login</a></li>
									</ul>
								</div>
								<!--DL Menu END-->
							</div>
							
						</div>
					</div>
				</div>	
				<!--CITY TOP NAVIGATION END-->
				
			
			</header>
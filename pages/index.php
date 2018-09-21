
<!DOCTYPE HTML>
<html>
<head>
<title>RoadXpert</title>


	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/googlemap.js"></script>
	<style type="text/css">
		.container {
			height: 450px;
		}
		#map {
			width: 100%;
			height: 100%;
			border: 1px solid blue;
		}
		#data, #allData {
			display: none;
		}
	</style>



<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Car Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<!-- /fonts -->
<!-- css files -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/viewbox.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/jQuery.lightninBox.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/service.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css files -->
<!-- js files -->
<script src="js/modernizr.js"></script>
<!-- /js files -->
</head>
<body>
<!-- navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
        <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav cl-effect-5">
				<li class="active"><a href="index.html" class="page-scroll"><span data-hover="Home">Home</span></a></li>
				<li><a href="#about" class="page-scroll"><span data-hover="Find Garage">Find Garage</span></a></li>
				<li><a href="#service" class="page-scroll"><span data-hover="Services">Services</span></a></li>
				<li><a href="#portfolio" class="page-scroll"><span data-hover="Portfolio">Portfolio</span></a></li>
				<li><a href="#work" class="page-scroll"><span data-hover="Work">Work</span></a></li>
				<li><a href="#contact" class="page-scroll"><span data-hover="Contact">Contact</span></a></li>
			</ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<!-- /navigation -->
<!-- banner section -->
<section class="banner-w3ls">
	<div class='header'>
		<div class="logo-agileits">
			<a class="logo-w3ls" href="index.html"><h1>RoadXpert</h1></a>
		</div>	
	</div>	
</section>
<!-- /banner section -->
<!-- about section -->
<section class="about-agileits" id="about">
	
		
			
				
				
				<div class="container">
					<br/><br/>
					<?php 
						require 'education.php';
						$edu = new education;
						$coll = $edu->getCollegesBlankLatLng();
						$coll = json_encode($coll, true);
						echo '<div id="data">' . $coll . '</div>';

						$allData = $edu->getAllColleges();
						$allData = json_encode($allData, true);
						echo '<div id="allData">' . $allData . '</div>';
					
					 ?>
					<div id="map"></div>
				</div>
				
				<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrmYAWQQCBd4E99uvuIiwyIK03sHS2nx8&callback=loadMap"></script>
				
				
				
			
		
		
		<div class="clearfix"></div>	

<!-- /address -->
<!-- services section -->
<section class="service-wthree" id="service">
	<div class="container">
		<h3 class="text-center">Our Services</h3>
		<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		<div class="col-lg-4 col-md-4 col-sm-6">
			<ul class="ch-grid">
				<li>
					<div class="ch-item ch-img-1">				
						<div class="ch-info-wrap">
							<div class="ch-info">
								<div class="ch-info-front ch-img-1"></div>
								<div class="ch-info-back1">
									<h4>Car-Hub</h4>
									<p>Best In Service</p>
								</div>	
							</div>
						</div>
					</div>
				</li>
			</ul>
			<h5 class="text-center">Lorem ipsum dolor</h5>
			<p class="serv-p2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pellentesque congue augue at posuere.</p>	
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6">
			<ul class="ch-grid">
				<li>
					<div class="ch-item ch-img-2">				
						<div class="ch-info-wrap">
							<div class="ch-info">
								<div class="ch-info-front ch-img-2"></div>
								<div class="ch-info-back2">
									<h4>Car-Hub</h4>
									<p>Best In Service</p>
								</div>	
							</div>
						</div>
					</div>
				</li>
			</ul>
			<h5 class="text-center">adipiscing elit</h5>
			<p class="serv-p2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pellentesque congue augue at posuere.</p>	
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6">
			<ul class="ch-grid">
				<li>
					<div class="ch-item ch-img-3">				
						<div class="ch-info-wrap">
							<div class="ch-info">
								<div class="ch-info-front ch-img-3"></div>
								<div class="ch-info-back3">
									<h4>Car-Hub</h4>
									<p>Best In Service</p>
								</div>	
							</div>
						</div>
					</div>
				</li>
			</ul>
			<h5 class="text-center">congue augue at</h5>
			<p class="serv-p2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pellentesque congue augue at posuere.</p>	
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6">
			<ul class="ch-grid">
				<li>
					<div class="ch-item ch-img-4">				
						<div class="ch-info-wrap">
							<div class="ch-info">
								<div class="ch-info-front ch-img-4"></div>
								<div class="ch-info-back4">
									<h4>Car-Hub</h4>
									<p>Best In Service</p>
								</div>	
							</div>
						</div>
					</div>
				</li>
			</ul>
			<h5 class="text-center">Nulla ex arcu</h5>
			<p class="serv-p2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pellentesque congue augue at posuere.</p>	
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6">
			<ul class="ch-grid">
				<li>
					<div class="ch-item ch-img-5">				
						<div class="ch-info-wrap">
							<div class="ch-info">
								<div class="ch-info-front ch-img-5"></div>
								<div class="ch-info-back5">
									<h4>Car-Hub</h4>
									<p>Best In Service</p>
								</div>	
							</div>
						</div>
					</div>
				</li>
			</ul>
			<h5 class="text-center">pharetra quam</h5>
			<p class="serv-p2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pellentesque congue augue at posuere.</p>	
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6">
			<ul class="ch-grid">
				<li>
					<div class="ch-item ch-img-6">				
						<div class="ch-info-wrap">
							<div class="ch-info">
								<div class="ch-info-front ch-img-6"></div>
								<div class="ch-info-back6">
									<h4>Car-Hub</h4>
									<p>Best In Service</p>
								</div>	
							</div>
						</div>
					</div>
				</li>
			</ul>
			<h5 class="text-center">eu molestie arcu</h5>
			<p class="serv-p2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pellentesque congue augue at posuere.</p>	
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<!-- /services section -->
<!-- testimonial section -->
<section class="testimonial">
	<div class="container">
		<h3 class="text-center">Our Clients Word</h3>
		<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000" data-pause="hover">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<div class="col-lg-8 col-md-8 col-sm-8 test-agile1">
						<p><i class="fa fa-quote-left" aria-hidden="true"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mattis libero ut dolor facilisis, eget auctor lacus congue. Curabitur ex nisl, vestibulum vitae consequat eu, tristique et enim. Suspendisse potenti. Quisque at est at nisl vulputate aliquam in quis augue. Sed a pulvinar ipsum. Praesent eget scelerisque arcu. <i class="fa fa-quote-right" aria-hidden="true"></i></p>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 test-agile2">
						<img src="images/test-img1.jpg" class="img-circle img-responsive" alt="">
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="item">
					<div class="col-lg-8 col-md-8 col-sm-8 test-agile1">
						<p><i class="fa fa-quote-left" aria-hidden="true"></i> Quisque at est at nisl vulputate aliquam in quis augue. Aliquam vitae fermentum metus. Aenean placerat elit nibh, et malesuada felis dignissim tristique. Sed a pulvinar ipsum. Praesent eget scelerisque arcu.  Vestibulum eleifend lacus ut dignissim placerat. <i class="fa fa-quote-right" aria-hidden="true"></i></p>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 test-agile2">
						<img src="images/test-img2.jpg" class="img-circle img-responsive" alt="">
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="item">
					<div class="col-lg-8 col-md-8 col-sm-8 test-agile1">
						<p><i class="fa fa-quote-left" aria-hidden="true"></i> Sed a pulvinar ipsum. Pellentesque interdum, nisl nec vehicula dapibus, lacus eros sagittis metus, ut tincidunt dui tortor vitae dui. Praesent eget scelerisque arcu. Vestibulum eleifend lacus ut dignissim placerat. Quisque at est at nisl vulputate aliquam in quis augue. <i class="fa fa-quote-right" aria-hidden="true"></i></p>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 test-agile2">
						<img src="images/test-img3.jpg" class="img-circle img-responsive" alt="">
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="item">
					<div class="col-lg-8 col-md-8 col-sm-8 test-agile1">
						<p><i class="fa fa-quote-left" aria-hidden="true"></i> Vivamus lacinia scelerisque egestas. Aliquam sapien erat, convallis faucibus posuere eget, elementum a metus. Vestibulum eleifend lacus ut dignissim placerat. Quisque at est at nisl vulputate aliquam in quis augue. Sed a pulvinar ipsum. Pellentesque interdum, nisl nec vehicula dapibus. <i class="fa fa-quote-right" aria-hidden="true"></i></p>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 test-agile2">
						<img src="images/test-img4.jpg" class="img-circle img-responsive" alt="">
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>		
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>	
		</div>
	</div>
</section>
<!-- /testimonial section -->
<!-- portfolio section -->
<section class="portfolio-wthree" id="portfolio">
	<div class="container">
		<h3 class="text-center">Our Portfolio</h3>
		<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		<section class="tabs">
	        <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
		    <label for="tab-1" class="tab-label-1">Audi</label>
		
	        <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
		    <label for="tab-2" class="tab-label-2">Mercedes</label>
		
	        <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
		    <label for="tab-3" class="tab-label-3">BMW</label>
			
			<input id="tab-4" type="radio" name="radio-set" class="tab-selector-4" />
		    <label for="tab-4" class="tab-label-4">Rollsroyce</label>
            
			<div class="clear-shadow"></div>
				
		    <div class="content">
			    <div class="content-1">
					<a href="images/port-img1.jpg" class="lightninBox" data-lb-group="1"><img src="images/port-img1.jpg" alt="" class="img-responsive"/></a>
					<a href="images/port-img2.jpg" class="lightninBox" data-lb-group="1"><img src="images/port-img2.jpg" alt="" class="img-responsive"/></a>
					<a href="images/port-img3.jpg" class="lightninBox" data-lb-group="1"><img src="images/port-img3.jpg" alt="" class="img-responsive"/></a>
					<a href="images/port-img4.jpg" class="lightninBox" data-lb-group="1"><img src="images/port-img4.jpg" alt="" class="img-responsive"/></a>
					<a href="images/port-img5.jpg" class="lightninBox" data-lb-group="1"><img src="images/port-img5.jpg" alt="" class="img-responsive"/></a>
					<a href="images/port-img6.jpg" class="lightninBox" data-lb-group="1"><img src="images/port-img6.jpg" alt="" class="img-responsive"/></a>	
				</div>
			    <div class="content-2">
					<a href="images/port-img7.jpg" class="lightninBox" data-lb-group="2"><img src="images/port-img7.jpg" alt="" class="img-responsive"/></a>
					<a href="images/port-img8.jpg" class="lightninBox" data-lb-group="2"><img src="images/port-img8.jpg" alt="" class="img-responsive"/></a>
					<a href="images/port-img9.jpg" class="lightninBox" data-lb-group="2"><img src="images/port-img9.jpg" alt="" class="img-responsive"/></a>
					<a href="images/port-img10.jpg" class="lightninBox" data-lb-group="2"><img src="images/port-img10.jpg" alt="" class="img-responsive"/></a>
					<a href="images/port-img11.jpg" class="lightninBox" data-lb-group="2"><img src="images/port-img11.jpg" alt="" class="img-responsive"/></a>
					<a href="images/port-img12.jpg" class="lightninBox" data-lb-group="2"><img src="images/port-img12.jpg" alt="" class="img-responsive"/></a>
				</div>
			    <div class="content-3">
					<a href="images/port-img13.jpg" class="lightninBox" data-lb-group="3"><img src="images/port-img13.jpg" alt="" class="img-responsive"/></a>
					<a href="images/port-img14.jpg" class="lightninBox" data-lb-group="3"><img src="images/port-img14.jpg" alt="" class="img-responsive"/></a>
					<a href="images/port-img15.jpg" class="lightninBox" data-lb-group="3"><img src="images/port-img15.jpg" alt="" class="img-responsive"/></a>
					<a href="images/port-img16.jpg" class="lightninBox" data-lb-group="3"><img src="images/port-img16.jpg" alt="" class="img-responsive"/></a>
					<a href="images/port-img17.jpg" class="lightninBox" data-lb-group="3"><img src="images/port-img17.jpg" alt="" class="img-responsive"/></a>
					<a href="images/port-img18.jpg" class="lightninBox" data-lb-group="3"><img src="images/port-img18.jpg" alt="" class="img-responsive"/></a>
				</div>
				<div class="content-4">
					<a href="images/port-img19.jpg" class="lightninBox" data-lb-group="4"><img src="images/port-img19.jpg" alt="" class="img-responsive"/></a>
					<a href="images/port-img20.jpg" class="lightninBox" data-lb-group="4"><img src="images/port-img20.jpg" alt="" class="img-responsive"/></a>
					<a href="images/port-img21.jpg" class="lightninBox" data-lb-group="4"><img src="images/port-img21.jpg" alt="" class="img-responsive"/></a>
					<a href="images/port-img22.jpg" class="lightninBox" data-lb-group="4"><img src="images/port-img22.jpg" alt="" class="img-responsive"/></a>
					<a href="images/port-img23.jpg" class="lightninBox" data-lb-group="4"><img src="images/port-img23.jpg" alt="" class="img-responsive"/></a>
					<a href="images/port-img24.jpg" class="lightninBox" data-lb-group="4"><img src="images/port-img24.jpg" alt="" class="img-responsive"/></a>
				</div>
		    </div>
		</section>
	</div>
</section>
<!-- /portfolio section -->
<!-- events section -->
<section class="event-agileinfo">
	<div class="container">
		<h3 class="text-center">Our Events</h3>
		<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		<div class="col-lg-4 col-md-4 col-sm-4 event-wthree1">
			<div class="event-w3ls1">
				   <a href="#" class="event-w3l" data-toggle="modal" data-target="#largeModal"><h4>Lorem ipsum dolor</h4></a>
				<p class="event-agile1">2016-2017</p>
			</div>	
		</div>
		<div class="col-lg-8 col-md-8 col-sm-8 event-wthree2">
			<p class="event-w3-agile1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec libero neque, varius nec eleifend in, egestas eget lectus. Integer non tempus ante, non blandit lectus. </p>
		</div>
		<div class="clearfix"></div>
		<div class="event-w3-agileits">
			<div class="col-lg-8 col-md-8 col-sm-8 event-wthree2">
				<p class="event-w3-agile2">Nulla dui ligula, sollicitudin non bibendum non, mattis eget lectus. Aliquam quis blandit odio. Aenean semper erat luctus enim suscipit dictum. Suspendisse vestibulum cursus egestas.</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 event-wthree1">
				<div class="event-w3ls2">
					<a href="#" class="event-w3l" data-toggle="modal" data-target="#largeModal"><h4>adipiscing elit</h4></a>
					<p class="event-agile1">2017-2018</p>
				</div>	
			</div>
			<div class="clearfix"></div>
		</div>	
		<div class="col-lg-4 col-md-4 col-sm-4 event-wthree1">
			<div class="event-w3ls1">
				<a href="#" class="event-w3l" data-toggle="modal" data-target="#largeModal"><h4>vestibulum cursus</h4></a>
				<p class="event-agile1">2018-2019</p>
			</div>	
		</div>
		<div class="col-lg-8 col-md-8 col-sm-8 event-wthree2">
			<p class="event-w3-agile1"> Aenean semper erat luctus enim suscipit dictum. Suspendisse vestibulum cursus egestas. Proin rutrum maximus massa mollis pharetra. Nam elit neque, sodales sed varius sit amet.</p>
		</div>
		<div class="clearfix"></div>
		<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Car-Hub</h4>
					</div>
					<div class="modal-body">
						<div class="col-lg-6 col-md-6">
							<img src="images/pop-img.jpg" alt="" class="img-responsive">
						</div>
						<div class="col-lg-6 col-md-6">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam facilisis semper felis, id suscipit arcu venenatis nec. Etiam non ligula ac massa bibendum molestie. Nam sit amet augue nulla. </p>
							<p>Quisque pulvinar consectetur erat non ornare. Nulla facilisi. Phasellus condimentum turpis vel elit mollis tempus. Nulla at luctus ante. Nullam et nulla interdum, blandit quam et, vehicula nibh.</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /events section -->
<!-- works section -->
<section class="work-agileinfo" id="work">
	<div class="container">
		<h3 class="text-center">Our Works</h3>
		<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 work-wthree">
			<div class="grid">
				<figure class="effect-moses">
					<img src="images/work-img1.jpg" alt="" class="img-responsive"/>
					<figcaption>
						<h4>Car Hub</h4>
						<p>Click It</p>
						<a href="images/work-img1.jpg" class="thumbnail" title="Car-Hub">View more</a>
					</figcaption>			
				</figure>
			</div>
			<a href="#" class="work-agile" data-toggle="modal" data-target="#largeModal"><h5 class="text-center">Lorem ipsum dolor</h5></a>
			<p class="work-w3l">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed elit sed ipsum semper tristique. </p>	
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 work-wthree">
			<div class="grid">
				<figure class="effect-moses">
					<img src="images/work-img2.jpg" alt="" class="img-responsive"/>
					<figcaption>
						<h4>Car Hub</h4>
						<p>Click It</p>
						<a href="images/work-img2.jpg" class="thumbnail" title="Car-Hub">View more</a>
					</figcaption>			
				</figure>
			</div>
			<a href="#" class="work-agile" data-toggle="modal" data-target="#largeModal"><h5 class="text-center">adipiscing elit</h5></a>
			<p class="work-w3l">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed elit sed ipsum semper tristique. </p>	
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 work-wthree">
			<div class="grid">
				<figure class="effect-moses">
					<img src="images/work-img3.jpg" alt="" class="img-responsive"/>
					<figcaption>
						<h4>Car Hub</h4>
						<p>Click It</p>
						<a href="images/work-img3.jpg" class="thumbnail" title="Car-Hub">View more</a>
					</figcaption>			
				</figure>
			</div>
			<a href="#" class="work-agile" data-toggle="modal" data-target="#largeModal"><h5 class="text-center">semper tristique</h5></a>
			<p class="work-w3l">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed elit sed ipsum semper tristique. </p>	
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 work-wthree">
			<div class="grid">
				<figure class="effect-moses">
					<img src="images/work-img4.jpg" alt="" class="img-responsive"/>
					<figcaption>
						<h4>Car Hub</h4>
						<p>Click It</p>
						<a href="images/work-img4.jpg" class="thumbnail" title="Car-Hub">View more</a>
					</figcaption>			
				</figure>
			</div>
			<a href="#" class="work-agile" data-toggle="modal" data-target="#largeModal"><h5 class="text-center">Nam urna orci</h5></a>
			<p class="work-w3l">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed elit sed ipsum semper tristique. </p>	
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<!-- /works section -->
<!-- contact section -->
<section class="contact-w3l" id="contact">
	<div class="container">
		<h3 class="text-center">Our Contacts</h3>
		<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		<form action="#" method="post" name="sentMessage" id="contactForm" novalidate>
            <div class="col-lg-4 col-md-4 col-sm-4">    
				<div class="control-group form-group">
                    <div class="controls">
                        <label>Full Name:</label>
                        <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                        <p class="help-block"></p>
                    </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4">	
                <div class="control-group form-group">
					<div class="controls">
                        <label>Phone Number:</label>
						<input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                    </div>
                </div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4">			
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Email Address:</label>
                        <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                    </div>
                </div>
			</div>
			<div class="clearfix"></div>
			<div class="col-lg-12">	
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Message:</label>
                        <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
					</div>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
			</div>
			<div class="col-lg-12">	
                <button type="submit" class="btn btn-primary">Send Message</button>
            </div>
			<div class="clearfix"></div>	
		</form>	
	</div>
</section>
<!-- /contact section -->
<!-- footer -->
<div class="footer">
	<p class="text-center">© 2016 Car Hub. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts</a></p>
</div>
<!-- /footer -->
<!-- back to top -->
<a href="#0" class="cd-top">Top</a>
<!-- /back to top -->
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/grayscale.js"></script>
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>
<!-- js for back to top -->
<script src="js/top.js"></script>
<!-- /js for back to top -->
<!-- js for work section -->
<script src="js/jquery.viewbox.min.js"></script>
<script>
	$(function(){
			
		$('.thumbnail').viewbox();
		$('.thumbnail-2').viewbox();
			
		(function(){
			var vb = $('.popup-link').viewbox();
			$('.popup-open-button').click(function(){
				vb.trigger('viewbox.open');
			});
			$('.close-button').click(function(){
				vb.trigger('viewbox.close');
			});
		})();
			
		(function(){
			var vb = $('.popup-steps').viewbox({navButtons:false});
				
			$('.steps-button').click(function(){
				vb.trigger('viewbox.open',[0]);
			});
			$('.next-button').click(function(){
				vb.trigger('viewbox.open',[1]);
			});
			$('.prev-button').click(function(){
				vb.trigger('viewbox.open',[0]);
			});
			$('.ok-button').click(function(){
				vb.trigger('viewbox.close');
			});
		})();
	});
</script>
<!-- /js for work section -->
<!-- js for about section -->
<script src="js/index.js"></script>
<!-- /js for about section -->
<!-- js for portfolio section -->
<script src="js/jQuery.lightninBox.js"></script>
<script type="text/javascript">
$(".lightninBox").lightninBox();
</script>
<!-- /js for portfolio section -->
<!-- js for banner -->
<script src="js/bgfader.js"></script>
<script>
var myBgFader = $('.header').bgfader([
  'images/banner1.jpg',
  'images/banner2.jpg',
  'images/banner3.jpg',
  'images/banner4.jpg',
], {
  'timeout': 3000,
  'speed': 3000,
  'opacity': 0.4
})
myBgFader.start()
</script>
<!-- /js for banner -->
<!-- /js files -->
</body>
</html>
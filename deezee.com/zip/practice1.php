<!DOCTYPE html>
<html>
	<head>
		<title>MyWebsite</title>
		<meta charset="utf-8" />		
		<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css" />
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<script src="js/jquery-3.1.0.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<link href="css/practice.css" rel="stylesheet" />
				
		<style>

		.tagline
		{
			margin-top:14%;
			background-color:black;
		}
		
		.left-margin
		{
			margin-left:25%;
		}
		
		.links
		{
			font-weight:bold;
			color:white;
			text-align:center;
			borderr: 1px solid red;
			width: auto;
			padding: 5px 20px;
			border-radius: 3px;
			margin-right:3%;
			z-index:999;
		}
		
		.links:hover
		{
			border-bottom:1px solid;
		}
		
		.navigation > div > a > div
		{
			text-align:center;
			font-family:cursive;
			font-size:18px;
			padding: 5px 20px;
			width: auto;
			border-radius: 3px;
			border:1px solid white;
			margin-right:10px;
		}
		
		.navigation div
		{
			color:#fff;
		}
		
		.navigation > div
		{
			padding:40px;
			/*padding-bottom:110px;*/
		}
		.services
		{
			text-align:center;
			background-color:#000;
			padding:50px 0px;
			border-top:1px solid #949596;
		}
		.contact-1
		{
			text-align:center;
			background-color:#ec3434;
			padding-bottom:30px;
			padding-top:50px;
			border-top:1px solid #949596;
			position: fixed;
			top: 0;
			z-index: -1;
			color:#000;
		}
		.row
		{
			margin-left:0px;
			margin-right:0px;
		}
		.about
		{
			margin-top:0%;
			position:relative;
			text-align:center;
			background-color:#000;
			padding:100px 5px;
			border-top:1px solid #949596;
		}
		
		.nav-list-small
		{
			display:none;
		}
		
		.block
		{
			display:block;
		}
		
		button
		{
			display:none;
		}
		.contact h3
		{
			text-align:left;
		}
		#about h2,h3
		{
			text-align:center;
		}
		.right p,.left p
		{
			position:absolute;
		}
		#home
		{
			line-height:normal;
		}
		.contact .fa
		{
			font-size:16px !important;
		}
		
		#invisible-image
		{
			background:url('images/face.jpg') center center no-repeat;
			opacity:0.3;
			background-size:cover;			
		}
		
		#invisible-image img
		{
			vertical-align: top;
			width: 100%; /* max width */
			opacity: 0;
			height:100%;
		}
		
		.left-align
		{
			text-align:left;
			font-size:24px;
			color:yellow;
		}
		
		.aboutus-box-2 > h3
		{
			text-align:center;
			margin-top:10px;
		}
		
		#about > div > div
		{
			padding-top:20px;
		}
		.aboutus-box-2
		{
			position:absolute;
			padding:20px;
			left:0px
		}
		
		.aboutus-box:hover
		{
			
			transform:rotateY(359deg);
			positionn:relative;
			topn:-10px;
			transitionn:1s all ease;
		}
		
		
		.aboutus-box
		{
			padding:20px;
			border-top:5px solid #949596;
			background-color:transparent;
			/* opacity:0.9;*/
			border-radius:10px;		
			color:#fff;
		}
		
		
		.home-text
		{
			text-align:center;
			font-size:116px;
			color:#fff;
			font-family:cursive;
		} 
		
		.header-logo
		{
			text-align:center;
			font-family:arial;
			padding:20px;
		}
		
		.header-logo > h1
		{
			margin-top:10px;
			color:#94e8c2;
		}
		
		
		
		.navbar-small
		{
			padding:5px 0px;
			text-align:center;
			margin-bottom:2px;
			background-color:rgb(184, 228, 212);
			border-right:1px solid teal;
			border-radius:5px;
			color:#3ca3a9;
			text-transform:uppercase;
			z-index:9999;
		}
		
		
		
		
		
		
		
		@media only screen and (max-width:900px)
		{
			.nav-list
			{
				display:none;
			}
		}
		
		@media only screen and (max-width:900px)
		{
			button
			{
				display:block;
				margin-left:20px;
			}
		}
		
		@media only screen and (max-width:768px)
		{
			.home-text
			{
				font-size:68px;
			}
		
		}
				
		</style>
		

		
	</head>
	
	<body style="background-color:#000;">
		
			
			<!-- Fixed Header -->
			<!-- <div class="row">
				
				 
					<a href="#">
						<div class="col-md-2 col-sm-12 links">
							Contact	
						</div>
					</a>
					
					<a href="#">
						<div class="col-md-2 col-sm-12 links">
							Contact	
						</div>
					</a>
					
					<a href="#">
						<div class="col-md-2 col-sm-12 links">
							Contact	
						</div>
					</a>
					
					<a href="#">
						<div class="col-md-2 col-sm-12 links">
							Contact	
						</div>
					</a>
					
					<a href="#">
						<div class="col-md-2 col-sm-12 links">
							Contact	
						</div>
					</a>
				
				</div> -->
				<!-- /Fixed Header -->
			<!-- header logo starts -->
				<!-- <div class="col-md-12 header-logo">
					<h1 id="id">ABC</h1>
				</div> -->
			<!-- header logo ends -->
			
			<button><i class="fa fa-bars button"></i></button>
			
			<!-- navigation bar starts -->
				<div class="row navigation" style="color:#fff;">
					
						<div style="height:105px;width:100%;position:absolute;top:0;left:0;background-color: white;opacity: 0.1;">
						</div>
						<div class="col-md-4 col-sm-12">
								Dzzz..	
						</div>
						
							<div class="col-md-8 col-sm-12">
							
								<div style="margin:auto">
									<a href="#home">
										<div class="col-md-2 col-sm-12 links left-margin">
											Home	
										</div>
									</a>
									
									<a href="#about">
										<div class="col-md-2 col-sm-12 links">
											About	
										</div>
									</a>
								
									<a href="#services">
										<div class="col-md-2 col-sm-12 links">
											Services	
										</div>
									</a>
									
									<a href="#team">
										<div class="col-md-2 col-sm-12 links">
											Our Team	
										</div>
									</a>
									
									<a href="#contact">
										<div class="col-md-2 col-sm-12 links">
											Contact	
										</div>
									</a>
								</div>
						
							</div>				
				
				<!-- small device header -->
					<div class="row nav-list-small">
							
						<a href="#home">
							<div class="col-sm-12 col-xs-12 navbar-small" style="margin-top:5px">
								Home	
							</div>
						</a>
						
						<a href="#about">
							<div class="col-sm-12  col-xs-12  navbar-small">
								About	
							</div>
						</a>
						
						<a href="#services">
							<div class="col-sm-12 col-xs-12 navbar-small">
								Services	
							</div>
						</a>
						
						<a href="#contact">
							<div class="col-sm-12  col-xs-12 navbar-small">
								Contact	
							</div>
						</a>
											
				</div>
				
				<!-- /small device header -->
			<!-- navigation bar ends -->
			
			<!-- Home section starts here  -->
			 
					<div style="z-index:999;background-color:#000;padding-bottom:110px">
						<div id="invisible-image" class="col-md-12" style="position:absolute;top:0;left:0">
							<img src="images/face.jpg" />
						</div>
						
						<div id="home" class="tagline">
							<p class="home-text">
								"WE <span style="color:yellow;font-family:chiller">{DESIGN}</span> YOUR DREAMS"
							</p>
						</div>
					</div>
				
			
				
				
		
				
			
			<!-- Home section ends here  -->
			
			<!-- About us section starts here -->
		
					<div id="about" class="row about">

							

						<h2 style="color:#949596;font-family:cursive">ABOUT US</h2>


							<div class="col-md-12" style="position:absolute;top:0;left:0;opacity:0.1;padding:75px;">
								<img class="img-responsive" src="images/design-3.png" />
							</div>
							
							<div style="width:100%;height:auto;position:absolute;top:0;left:0;opacity:0.5">
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12 animation-element slide-left testimonial" style="box-sizing:border-box">
								<div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-2 aboutus-box">
								
									
										<h3 style="font-weight:bold">Who We Are?</h3>
										
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dapibus, libero quis sodales gravida, diam nisi fringilla risus, quis rutrum sem tellus nec est. Nullam pretium varius eros at fermentum. Suspendisse condimentum dui ac ante gravida molestie. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent pharetra imperdiet faucibus. Aenean facilisis felis nec nulla sodales, in ultrices eros iaculis. Phasellus cursus mi purus. Quisque vitae cursus leo. Proin imperdiet ex ut nibh ultricies lacinia. Proin dictum augue mauris, ut porttitor nulla vehicula nec. Duis quis sem dictum, feugiat diam volutpat, ornare magna. Nulla finibus placerat enim elementum dignissim. In hac habitasse platea dictumst. Mauris et sapien et odio feugiat sollicitudin in eu metus. Cras viverra arcu eget ultricies scelerisque.
										</p>
									
								
								</div>
								
							</div>
							
							<div class="col-md-6 col-sm-6 col-xs-10 animation-element slide-right testimonial" style="box-sizing:border-box">
								<div class="col-md-10 col-sm-12 col-xs-12 aboutus-box">
								
									
										<h3 style="text-align:center" style="font-weight:bold;margin-top:10px;">What We Do?</h3>
										<p>Fusce lacinia imperdiet ultricies. Etiam erat dolor, vestibulum in dolor et, volutpat cursus turpis. Praesent justo eros, vulputate ut ultrices quis, auctor non purus. Nam mattis elementum egestas. Sed pretium quam ut lectus tempor faucibus. Aliquam imperdiet luctus nisi, imperdiet porta neque efficitur vitae. Ut ut rutrum sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In blandit libero et porta blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam tincidunt velit sit amet tortor sollicitudin auctor. Praesent placerat massa tortor, tristique dictum ex convallis sit amet. Vivamus dictum purus sit amet velit venenatis, at cursus enim pulvinar. Curabitur accumsan erat at felis euismod, convallis varius orci aliquam. Donec accumsan pulvinar aliquet
										</p>
								
								
								</div>
							</div>
							
							 
					</div> 
					
				
				<!-- About us section ends here  -->
				
				<!-- Services Section starts here -->
					<div id="services" class="row services">
						<h2 style="color:#949596;font-family:cursive;font-weight:bold">OUR SERVICES</h2> 

						<!-- wasim --><div class="col-md-12">
						<button type="button" class="btn btn-success wasim">Click here </button>

			</div>

			<!-- /wasim -->
						<div class="col-md-6 col-sm-6 col-xs-12 animation-element slide-left testimonial" style="margin-top:20px;">
							<img src="images/developer.jpg" class="img-responsive" style="width:100%;height:auto;max-height:100%" />
						</div>
						
						<div class="col-md-6 col-sm-6 col-xs-12 animation-element slide-right testimonial" style="margin-top:20px;">
							<p class="left-align"><i class="fa fa-arrow-right"></i> Website Designing & Development</p>
							<br/>
							<p class="left-align"><i class="fa fa-arrow-right"></i> Software Development</p>
							<br/>
							<p class="left-align"><i class="fa fa-arrow-right"></i> Support Services</p>
							<br/>
							<p class="left-align"><i class="fa fa-arrow-right"></i> Web Hosting</p>
						</div>
					</div> 
				<!-- Services section starts here -->
				
				<!-- Contact Us section starts here -->
					
					<div id="contact" class="row contact-1" style="position:fixed;width:100%;gray:#949596;">
						
						<h2 style="color:#fff;font-family:cursive">Contact Us</h2>
						<div class="col-md-12">
						
							<div class="col-md-6">
								<h2 style="color:#fff">Feedback Form-</h2>
									  <form style="text-align:left">
										<div class="form-group">
										  <label for="name" style="color:#fff;">Name:</label>
										  <input type="text" class="form-control" id="name" placeholder="Enter your name">
										</div>
										<div class="form-group">
										  <label for="email" style="color:#fff;">Email:</label>
										  <input type="email" class="form-control" id="email" placeholder="Enter email">
										</div>
										<div class="form-group">
										<label style="color:#fff;">Enter your message here:</label>
										<textarea class="form-control" rows="4" cols="50" name="comment">
											
										</textarea>
										</div>
										
										<button type="submit" class="btn btn-default">Submit</button>
									  </form>
							</div>
							
							<div class="col-md-6 contact">
								<div class="col-md-10 col-md-offset-2" style="text-align:left">
									<h3 style="color:#fff">ADDRESS:</h3>
									<p style="color:#fff;">
										<i class="fa fa-map-marker" style="color:#fff"></i> ABC WING,<BR/>
										SAHAR AIRPORT ROAD,<br/>
										MUMBAI:400 072.
									</p>
								</div>
								
								<div class="col-md-10 col-md-offset-2" style="text-align:left">
									<h3 style="color:#fff">CALL US:</h3>
									<p style="color:#fff;">
										<i class="fa fa-phone"></i> 9989899566
									</p>
									<p style="color:#fff;">
										<i class="fa fa-phone"></i> 5874163298
									</p>
								</div>
								
								<div class="col-md-10 col-md-offset-2" style="text-align:left">
									<h3 style="color:#fff">E-MAIL:</h3>
									<p style="color:#fff;">
										<i class="fa fa-envelope"></i> abc@123.com
									</p>
									<p style="color:#fff;">
										<i class="fa fa-envelope"></i> xyz@123.com
									</p>
								</div>
							</div>
													
						</div>
					</div>
					
									
					<!-- transparent div -->
						<div style="width:100%;height:630px;background:transparent">
						</div>
					<!-- /transparent div -->
				
				<!-- Contact Us Section Ends here -->
				
			
		
		<!-- JAVASCRIPT FILES -->
		
		<script src="js/slidingdivs.js"></script>
		<script>
			$(document).ready(function(){
				$("#id").click(function(){
					$("#id").css("background-color","red");
					
				});

				$(".wasim").click(function(){

					$(".wasim").css({"background-color":"red","color":"blue","font-size":"24px","border-radius":"10px","outline":"none"});
				});

				$(".wasim").click(function(){

					alert("hello");
				});
				
				
			// $('#about, #services').on('click', function(e){
   //  e.preventDefault();
   //  var target= $(this).get(0).id == 'about' ? $('#services') : $('#about');
   //  $('html, body').stop().animate({
   //     scrollTop: target.offset().top
   //  }, 1000);
			// });
			
			
			});
		</script>
		
		
		<!-- /JAVASCRIPT FILES -->
		
	
	</body>	
</html>
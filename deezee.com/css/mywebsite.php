<!DOCTYPE html>
<html>
	<head>
		<title>MyWebsite</title>
		<meta charset="utf-8" />		
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/mywebsite.css" rel="stylesheet" />
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		
		<style>
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
			height:450px;
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
			border-top:5px solid #166a6f;
			background-color:white;
			height:405px;
			opacity:0.9;
			border-radius:10px;		
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
		
		.navbar
		{
			padding:50px 0px;
			text-align:center;
			background-color:rgb(184, 228, 212);
			border-right:1px solid teal;
			border-radius:0px;
			color:#3ca3a9;
			text-transform:uppercase;
		}
		
		.navbar:hover
		{
			background-color:transparent;
			transition:all ease 1s;
			color:white;
			font-weight:bold;
			border:none;
		}
		
		
		
		 .navbar : first-child
		{
			border-left:1px solid red;
		}
		
		.navbar > a
		{

		}
		
		
		
		
		
		
		</style>
	</head>
	
	<body style="background-color:#3ca3a9;">
		
			<div>
			
			<!-- header logo starts -->
				<div class="col-md-12 header-logo">
					<h1>MyWebsite</h1>
				</div>
			<!-- header logo ends -->
			
			<!-- navigation bar starts -->
				<div class="col-md-12 col-sm-12 nav-list">
							
						<a href="#home">
							<div class="col-md-3 col-sm-3 navbar">
								Home	
							</div>
						</a>
						
						<a href="#about">
							<div class="col-md-3 col-sm-3 navbar">
								About	
							</div>
						</a>
						
						<a href="#services">
							<div class="col-md-3 col-sm-3 navbar">
								Services	
							</div>
						</a>
						
						<a href="#contact">
							<div class="col-md-3 col-sm-3 navbar">
								Contact	
							</div>
						</a>
											
				</div>
			<!-- navigation bar ends -->
			
			<!-- Home section starts here  -->
			 <div id="home" class="col-md-12" style="padding: 35px 0px; padding-bottom: 50px;">
			 
				<div id="invisible-image" class="col-md-12">
					<img src="images/face.jpg" />
				</div>
			
				<div id="home" style="position:absolute;left:0;top:75px">
					<p class="home-text">
						"WE <span style="color:yellow;font-family:chiller">{DESIGN}</span> YOUR DREAMS"
					</p>
				</div>
				
			</div>
			<!-- Home section ends here  -->
			
			<!-- About us section starts here -->
				
				<div id="about" class="col-md-12" style="background-color:#0b9093;padding:80px 0px;padding-top:60px">
				
					<div class="col-md-12" style="text-align:center;padding:0px">
						<h2 style="color:#a7daef;font-family:cursive">ABOUT US</h2>
					</div>
						<!-- <div class="col-md-12"> -->
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3 aboutus-box">
								
									<div class="col-md-12 col-sm-8 col-xs-12 aboutus-box-2">
										<h3>Who We Are?</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dapibus, libero quis sodales gravida, diam nisi fringilla risus, quis rutrum sem tellus nec est. Nullam pretium varius eros at fermentum. Suspendisse condimentum dui ac ante gravida molestie. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent pharetra imperdiet faucibus. Aenean facilisis felis nec nulla sodales, in ultrices eros iaculis. Phasellus cursus mi purus. Quisque vitae cursus leo. Proin imperdiet ex ut nibh ultricies lacinia. Proin dictum augue mauris, ut porttitor nulla vehicula nec. Duis quis sem dictum, feugiat diam volutpat, ornare magna. Nulla finibus placerat enim elementum dignissim. In hac habitasse platea dictumst. Mauris et sapien et odio feugiat sollicitudin in eu metus. Cras viverra arcu eget ultricies scelerisque.</p>
									</div>
								
								</div>
								
							</div>
							
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-1 aboutus-box">
								
									<div class="col-md-12 col-sm-8 col-xs-12 aboutus-box-2">
										<h3 style="text-align:center" style="margin-top:10px">What We Do?</h3>
										<p>Fusce lacinia imperdiet ultricies. Etiam erat dolor, vestibulum in dolor et, volutpat cursus turpis. Praesent justo eros, vulputate ut ultrices quis, auctor non purus. Nam mattis elementum egestas. Sed pretium quam ut lectus tempor faucibus. Aliquam imperdiet luctus nisi, imperdiet porta neque efficitur vitae. Ut ut rutrum sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In blandit libero et porta blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam tincidunt velit sit amet tortor sollicitudin auctor. Praesent placerat massa tortor, tristique dictum ex convallis sit amet. Vivamus dictum purus sit amet velit venenatis, at cursus enim pulvinar. Curabitur accumsan erat at felis euismod, convallis varius orci aliquam. Donec accumsan pulvinar aliquet</p>
									</div>
								
								</div>
							</div>
						<!-- </div> -->
					
						<!-- <div style="background-image:url('images/cyan-1.jpg');background-repeat:no-repeat;height:100px;">
					
					</div> -->			
				</div>
				
				<!-- About us section ends here  -->
				
				<!-- Services Section starts here -->
					<div id="services" class="col-md-12" style="text-align:center;background-color:#4d7475;padding:50px 0px;">
						<h2 style="color:#a7daef;font-family:cursive">OUR SERVICES</h2>
						<div class="col-md-6" style="margin-top:20px">
							<img src="images/developer.jpg" class="img-responsive" style="width:auto;max-height:100%" />
						</div>
						
						<div class="col-md-6" style="margin-top:20px">
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
					<div id="contact" class="col-md-12" style="text-align:center;background-color:#3b4e4e;padding:0px;padding-bottom:30px;">
						<h2 style="color:#a7daef;font-family:cursive">Contact Us</h2>
						<div class="col-md-12">
						
							<div class="col-md-4">
							</div>
							
							<div class="col-md-4">
							</div>
							
							<div class="col-md-4">
							</div>
							
						</div>
					</div>
				
				<!-- Contact Us Section Ends here -->
				
			
			</div>
		
		
	
	</body>	
</html>
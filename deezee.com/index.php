<!DOCTYPE html>
<html>
	<head>
		<title>MyWebsite</title>
		<meta charset="utf-8" />	
		<?php include_once('external_files.php'); ?>

		
	</head>
	
	<body style="background-color:#000;">
		
			
			<!-- Header -->
			<?php include_once('header.php'); ?>
			<!-- navigation bar ends -->
			
			<!-- Home section starts here  -->
			 
					<div style="z-index:999;background-color:#000;padding-bottom:110px">
						<div id="invisible-image" class="col-md-12" style="position:fixed;top:0;left:0;padding:0px">
							<img src="images/face.jpg" />
						</div>
						
						<div id="home" class="tagline">
							<p class="home-text">
								"WE <span class="rotate"style="color:yellow;font-family:chiller">{DESIGN},/* CODE */,ARCHITECT</span> YOUR DREAMS"
							</p>
						</div>
					</div>

					<div class="row" style="background-color:rgba(255, 255, 255, 0.69);;opacity:0.99;padding:10px 80px;padding-bottom:20px">
						<h3 style="text-align:center;color:#2c6190;margin-bottom:15px;font-size:40px"><span style="color:#403f3f;font-size:10px">:::::::::::::::::::::::</span> <strong>WHO WE ARE</strong> <span style="color:#403f3f;font-size:10px">:::::::::::::::::::::::</span></h3>
						<div class="col-md-4 col-sm-4 col-xs-12 who">
							<div class="circle" style="text-align:center"><i class="fa fa-star my-fa"></i></div>
							<div style="text-align:center;padding:0px 36px">
								<p style="text-align:center;font-size:18px;color:#2d6392;font-weight:bold">CREATIVE</p>
								<p style="text-align:justify;color:#2d6392;font-family:roboto;line-height:1.65em;font-weight:400;font-size:16px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula</p>
							</div>
						</div>

						<div class="col-md-4 who">
							<div class="circle" style="text-align:center"><i class="fa fa-signing my-fa"></i></div>
							<div style="text-align:center;padding:0px 36px">
								<p style="text-align:center;font-size:18px;color:#2d6392;font-weight:bold">PASSIONATE</p>

								<p style="text-align:justify;color:#2d6392;font-family:roboto;line-height:1.65em;font-weight:400;font-size:16px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula</p>
							</div>
						</div>

						<div class="col-md-4 who">
							<div class="circle" style="text-align:center"><i class="fa fa-certificate my-fa"></i></div>
							<div style="text-align:center;padding:0px 36px">
								<p style="text-align:center;font-size:18px;color:#2d6392;font-weight:bold">PROFESSIONALS</p>

								<p style="text-align:justify;color:#2d6392;font-family:roboto;line-height:1.65em;font-weight:400;font-size:16px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula</p>
							</div>
						</div>
					</div>
			<!-- Home section starts ends here  -->

			<div class="row"  style="background-color: rgba(214, 210, 210, 0.69);opacity:0.99;padding:50px 80px;padding-top:35px">
				<h1 style="text-align:center">About Us</h1>
				<div class="col-md-3" style="background-color:white;height:200px;margin-left:12.5%;margin-right:10px">
					<h2>Our Mission</h2>
				</div>

				<div class="col-md-3" style="background-color:white;height:200px;margin-right:10px">
					<h2>Our Vision</h2>
				</div>

				<div class="col-md-3" style="background-color:white;height:200px">
					<h2>Our Values</h2>

				</div>
			</div>
			
			<!-- footer starts here -->
				<div class="row" style="background-color:#212121;opacity:0.999;padding:20px">
					<div class="col-md-4">
						<blockquote style="color:#696969">Aenean at dignissim leo, id posuere erat. Aliquam erat volutpat. Nullam tristique ex in justo egestas sagittis. Phasellus ac lobortis felis. Integer tellus nunc, rhoncus pulvinar volutpat id, aliquam ac dolor. Suspendisse feugiat quam tempus nibh mollis, a tincidunt eros semper. In nec sem sit amet neque suscipit lobortis vitae a dolor</blockquote>
					</div>

					<div class="col-md-4">
						<p style="text-align:center;color:white;font-size:18px"><strong>QUICKLINKS</strong></p>
						<a href="about.php"><p style="text-align:center;">About Us</p></a>
						<a href="services.php"><p style="text-align:center;">Our Services</p></a>
						<a href="contact.php"><p style="text-align:center;">Contact Us</p></a>


						
					</div>

					<div class="col-md-4">
						<p style="text-align:center;color:white;font-size:18px"><strong>CONTACT US</strong></p>
						<p style="text-align:center;color:#696969"><i class="fa fa-phone"></i> 9658741236</p>
						<p style="text-align:center;color:#696969"><i class="fa fa-phone"></i> 45711445147</p>

						<p style="text-align:center;color:white;font-size:18px"><strong>EMAIL</strong></p>
						<p style="text-align:center;color:#696969"><i class="fa fa-mail"></i>abc@123.com</p>
						<p style="text-align:center;color:#696969"><i class="fa fa-mail"></i>xyz@123.com</p>



					</div>
				</div>
			<!-- footer ends here -->

		
		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">
				$(".rotate").textrotator({
        animation: "flip",
        separator: ",",
    speed: 2500
    });
				
			// $('#about, #services').on('click', function(e){
   //  e.preventDefault();
   //  var target= $(this).get(0).id == 'about' ? $('#services') : $('#about');
   //  $('html, body').stop().animate({
   //     scrollTop: target.offset().top
   //  }, 1000);
			// });
			
			
			// });
		</script>
		
		
		<!-- /JAVASCRIPT FILES -->
		
	
	</body>	
</html>
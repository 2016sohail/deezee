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

<div id="contact" class="row contact-1" style="">
						
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

			</body>
	</html>
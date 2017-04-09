<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Madame Antoine Florist</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!--theme style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<script src="js/jquery.min.js"></script>

<!--//theme style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wedding Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<script src="js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!-- /start menu -->
<style type="text/css">
     	.buttonM{
     		border:1px solid #E5C100;	
     		background:white; margin-left:1em;	
     		color:#e5c100; 
     		width:100%; 	
     		padding:0.6em 1em;
     	}
     	.buttonM:hover{
     		background-color: #e5c100 !important ;
     		color:white !important;
     	}
     	.buttonM:active{
     		background-color: #e5c100 !important ;
     		color:white !important;
     	}
     	.subscribe{
     		bottom: 0%;
     		position: fixed;
     		width: 100%;
     	}
     </style>
</head>
<body>
<!--header-->	
<?php include 'header.php' ?>
<!---->
<div class="contact">
	  <div class="container">
		 
			<!--start contact-->
			<h3 style="padding:20px;">Contact Us</h3>
		  <div class="section group">				
				<div class="col-md-6 span_1_of_3">
      			<div class="company_address">
				     	<h4>Store Information :</h4>
						    	<p>Kalideres</p>
						   		<p>Jakarta</p>
						<p>Whatsapp: 0812 1212 5052 / 0812 1849 5209</p>   		
				   		<p>LINE: <a href="https://line.me/R/ti/p/%40hwr2024b">@hwr2024b</a></p>
				   		<p>Follow on: <a href="https://www.instagram.com/madame.antoine.florist/">Instagram</a></p>
				   </div>
				</div>				
				<div class="col-md-6 span_2_of_3">
				  <div class="contact-form">
					    <form action="contact.php" method="post">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>MESSAGE</label></span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
						   <div>
						   		<button type="submit" class="buttonM" style="margin-left:0px; width:98%;" value="Submit" name="contactus" data-target="#modalThankyou" data-toggle="modal">Submit</button>
						   		<?php

						   		if(isset($_POST['contactus'])){
						   			// Check for empty fields
									if(!filter_var($_POST['userEmail'],FILTER_VALIDATE_EMAIL))
									   {
									   echo "Enter your correct email address";
									   return false;
									   }
									   
									$name = strip_tags(htmlspecialchars($_POST['userName']));
									$email_address = strip_tags(htmlspecialchars($_POST['userEmail']));
									$message = strip_tags(htmlspecialchars($_POST['userMsg']));
									   

									$to = $email_address; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
									$email_subject = "Email from Customer";
									$email_body = $message;
									$headers = "From: ".$name; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
									$headers .= "Reply-To: nathaniaelvina.com";   
									//mail($to,$email_subject,$email_body,$headers);

									?>
									<script>
										alert("Thank you for sending us a message. We will reply you soon.");
									</script>
									<?php
									return true;	
							   		}
									         
								?>
						  </div>
					    </form>
					    	<div id='modalThankyou' class='modal fade' role='dialog'>
									  <div class='modal-dialog'>
							<?php
									if(isset($_POST['contactus'])){
										echo "masuk";
										$to = 'nathaniaelvina@hotmail.com';
										$name = htmlspecialchars($_GET['userName']);
										$email = htmlspecialchars($_GET['userEmail']); 
										$msg = htmlspecialchars($_GET['userMsg']);
										$subject = 'Email from Customer';
										$head = "From: The Sender Name <haha@haha.com";
										echo $name;
										mail($to, $subject, $msg, $head);
									
									
									?>
									<!-- Modal -->
									<div id="modalThankyou" class="modal fade" role="dialog">
									  <div class="modal-dialog">


									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title">Thank You!</h4>
									      </div>
									      <div class="modal-body">
									        <p>Your message has been sent to Madame Antoine Florist. We'll reply you soon. Have a great day!</p>
									      </div>
									    </div>

									  </div>
									</div>
									<?php	
									}
									
									?> 
						  </div>
					    </form>

				    </div>
  				</div>				
		  </div>
	  </div>
 </div>
<!---->
<!---->

<?php include 'footer.php' ?>	
	
<!---->
</body>
</html>
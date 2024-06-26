<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = 'From: '.$name. '<'.$email.'>\r\n';

$recipient = "info@maxipharma.co.za";

mail($recipient, $subject, $message, $mailheader)
or die("Error! Message Not Sent.");

echo '

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- SEO - meta<tags> for serach engine optimisation -->
		<meta
			name="keywords"
			content="MaxiPharma Laboratories (Pty) Ltd., MaxiPharma Laboratories, MaxiPharma, maxipharma, maxi, Laboratory, laboratory, Laboratories, laboratories, pharmacy, pharmacuetical, pharmacueticals, pharma, medicine, health, vitamins, supplements, health, diet, medical consulting, pharmacuetical consultancy, manufacturing consultancy, pharmacuetical manufacturing"
		/>
		<meta
			name="description"
			content="MaxiPharma Laboratories (Pty) Ltd. is a South African company based in Johannesburg Bringing The Future of Healthcare to our Customers and Leading with Real World Technology for Medications by providing consulting services in the areas of all type Pharmaceutical dosage from development, and manufacturing. We pride ourselves in providing state of the art medical Services Solutions."
		/>
		<title>MaxiPharma Laboratories</title>
		<!-- Favicon Icons - branding in tab  -->
		<link rel="icon" type="image/x-icon" href="../assets/favicon/favicon.ico" />
		<!-- font awesome cdn link -->
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
		/>
		<!-- custom css file link -->
		<link rel="stylesheet" href="../css/style.css" />
	</head>
	<body onload="todayDate()">
		<!-- header section start -->
		<header class="header">
			<div class="header-logo">
				<img
							src="../assets/favicon/logo-130x150.png"
							alt="MaxiPharma Laboratories (Pty) Ltd. Company Logo"
					/>

			</div>
			<div class="header_logo-name">
				<a href="#">MaxiPharma&#174</a>
			</div>
			<nav class="navbar">
				<a href="../index.html">home</a>
				<a href="services.html">services</a>
				<a href="about.html">about</a>
				<a href="team.html">team</a>
				<a href="contact.html">contact</a>
			</nav>

			<div class="header_quote">
				<p>"Getting your product to the market faster and keeping it there"</p>
			</div>
			<div id="header_quote-450px">
				<p>
					Innovate, Partner, Prosper
				</p>
			</div>

			<div id="menu-btn" class="fa-solid fa-bars"></div>
		</header>
		<!-- header section END -->


		<!-- contact section STARTS -->
		<section class="contact pnf_404" id="contact">
			<!-- <h1 class="heading">Contact Us</h1> -->
			<div class="row">
				<div class="image msg-send-success-img">
					<img
						src="../assets/contact/msg-send.png"
						alt="Email send successful image"
					/>
				</div>

				<div class="content">
					<h3>Thank you for contacting us.</h3>
					<h4 class="heading">We will get back to you as soon as possible.</h4>

					<a href="../index.html" class="btn btn-404">
						return home </a>
				</div>

			</div>
		</section>
		<!-- contact section ENDS -->


		<!-- footer section STARTS -->
		<section class="footer">
			<div class="box-container">
				<div class="box">
					<h3>quick links</h3>
					<a href="../index.html"> <i class="fas fa-chevron-right"></i> home </a>
					<a href="services.html">
						<i class="fas fa-chevron-right"></i> services
					</a>
					<a href="about.html"> <i class="fas fa-chevron-right"></i> about </a>
					<a href="team.html"> <i class="fas fa-chevron-right"></i> team </a>
					<!-- <a href="#review"> <i class="fas fa-chevron-right"></i> review </a> -->
				</div>

				<div class="box">
					<h3>contact info</h3>
					<a
					href="tel:0659287768">
						<i class="fas fa-phone"></i> +27 65 928 7768
					</a>
					<a href="mailto:info@maxipharma.co.za" id="email-info">
						<i class="fas fa-envelope"></i>
						info@maxipharma.co.za
					</a>
					<a href="https://www.google.com/maps/search/?api=1&query=-26.26129341292748, 27.95046680268412" target="_blank">
						<i class="fas fa-map-marker-alt"></i> johannesburg, south africa
					</a>
				</div>

				<div class="box">
					<h3>follow us</h3>
					<a
						href="https://www.facebook.com/profile.php?id=61552889426094&mibextid=ZbWKwL"
						target="_blank"
						> <i class="fab fa-facebook-f"></i> facebook
					</a>
					<a href="#"> <i class="fab fa-twitter"></i> twitter </a>
					<a href="#"> <i class="fab fa-instagram"></i> instagram </a>
					<a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
					<a href="#"> <i class="fab fa-whatsapp"></i> whatsapp </a>
				</div>
			</div>
		</section>

		<footer>
			<div class="credit">
				Copyright<sup>&copy;</sup> <span id="date"></span> | All Rights Reserved | Developed by
				<a href="https://webify-io.github.io/webify/"  target="_blank" rel="noopener noreferrer">
					Webify<sup>&reg;</sup>
				</a>
			</div>
		</footer>
		<!-- footer section ENDS -->

		<!-- custom js file link -->
		<script src="../js/main.js"></script>
		<script src="../js/todayDate.js"></script>
	</body>
</html>



'

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="images/favicon.png">

	<title>Code Consultants</title>

	<!--External Google font css-->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">

	<!--Common css-->
	<link rel="stylesheet" href="css/fontawesome-free-5.14.0-web/css/all.css">

	<!--Whole home page scrolling effect-->
	<link rel="stylesheet" href="css/jquery.pagepiling.css">

	<!--Completed projects image gallery effect-->
	<link rel="stylesheet" href="css/sapple.css">

	<!--Ongoing projects library gallery effect-->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!--Main style css-->
	<link rel="stylesheet" href="css/style.css">

	<!--This jquery file is used for whole home page scrolling effect-->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<!--This link is used for whole home page scrolling effect-->
	<script type="text/javascript" src="js/jquery.pagepiling.min.js"></script>

	<!--This link is used for whole home page scrolling effect-->
	<script type="text/javascript">
		var deleteLog = false;

		$(document).ready(function() {
			$('#pagepiling').pagepiling({
				menu: '#menu',
				anchors: ['page1', 'page2', 'page3', 'page4', 'page5', 'page6'],
				navigation: {
					'textColor': '#f2f2f2',
					'bulletsColor': '#ccc',
					'position': 'right',
					'tooltips': ['Home', 'Completed Projects', 'Ongoing Projects', 'Services', 'Contact', 'Follow Us']
				}
			});
		});
	</script>
</head>

<body>
	<div class="preload"><img src="images/loading.gif"></div>

	<div class="page-line-top"></div>
	<div class="page-line-bottom"></div>
	<div class="page-line-left"></div>
	<div class="page-line-right"></div>

	<div id="pagepiling" class="d-sm-block d-none">
		<nav class="navbar navbar-expand-lg" id="navbar">
			<a class="navbar-brand" href="index.html">
				<img src="images/code_consultant_logo_light.png">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse mt-sm-0 mt-3" id="navbarSupportedContent1">
				<ul class="navbar-nav ml-auto navbar-collapse__list" id="menu1">
					<li class="nav-item active" data-menuanchor="page1">
						<a class="nav-link" href="#page1">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Projects
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown-1">
							<span data-menuanchor="page2"><a class="dropdown-item" href="#page2">Completed Projects</a></span>
							<span data-menuanchor="page3"><a class="dropdown-item" href="#page3">Ongoing Projects</a>
						</div>
					</li>
					<li class="nav-item" data-menuanchor="page4">
						<a class="nav-link" href="#page4">Services</a>
					</li>
					<li class="nav-item" data-menuanchor="page5">
						<a class="nav-link" href="#page5">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about">About Us</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							News
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown-2">
							<a class="dropdown-item" href="#">Articles</a>
							<a class="dropdown-item" href="#">Events</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
		<div class="section home-section">
			<div class="intro">
				<div class="home-intro-text">
					<div class="home-intro-text__square">
						<div class="home-intro-text__square--number">30</div>
						<div class="home-intro-text_square--text">Years of Experience</div>
						<h4><strong>200 +</strong> Projects</h4>
						<div class="home-intro-text__square-background"></div>
					</div>
					<h1 class="main-topic animating-text-animate">Sri Lanka's Leading<br> Structural Design Firm</h1>
				</div>
				<div class="home-section__home-btn">
					<a class="btn btn-primary btn-lg" href="download/code.pdf" download>Download Brochure</a>
				</div>
			</div>
			<div id="particles-js"></div>
			<div id="carouselExampleCaptions1" class="carousel slide carousel-fade home-section__carousel1" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="carousel-item__fill" style="background-image:url('images/slider-images/1.jpg');"></div>
					</div>
					<div class="carousel-item">
						<div class="carousel-item__fill" style="background-image:url('images/slider-images/2.jpg');"></div>
					</div>
					<div class="carousel-item">
						<div class="carousel-item__fill" style="background-image:url('images/slider-images/3.jpg');"></div>
					</div>
					<div class="carousel-item">
						<div class="carousel-item__fill" style="background-image:url('images/slider-images/4.jpg');"></div>
					</div>
					<div class="carousel-item">
						<div class="carousel-item__fill" style="background-image:url('images/slider-images/5.jpg');"></div>
					</div>
					<div class="carousel-item">
						<div class="carousel-item__fill" style="background-image:url('images/slider-images/6.jpg');"></div>
					</div>
					<div class="carousel-item">
						<div class="carousel-item__fill" style="background-image:url('images/slider-images/7.jpg');"></div>
					</div>
				</div>
			</div>
		</div>

		<!--Completed projects section-->
		<div class="section home-section text-center background-theme-color-1">
			<h1 class="main-topic">Completed Projects</h1>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="slider-multi">
							<ul>


								@foreach($completedprojects as $completedproject)
								<li style="background-image: url({{$completedproject->image}})">
									<p class="content">
										<span class="project-name">{{$completedproject->title}}</span><br>
									</p>
								</li>
								@endforeach




							</ul>
						</div>
						<br>
						<br>
						<button class="btn btn-primary btn-lg" onclick="location.href='completed'">All Completed Projects</button>
					</div>
				</div>
			</div>
		</div>

		<!--Ongoing projects section-->
		<div class="section home-section text-center p-3 background-theme-color-2">
			<h1 class="main-topic">Ongoing Projects</h1>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<ul class="zoom-gallery mb-5">

							@foreach($ongoingprojects as $ongoingproject)
							<li>
								<a href="{{$ongoingproject->image}}" data-source="" title="{{$ongoingproject->title}}">
									<img src="{{$ongoingproject->image}}">
									<div class="zoom-gallery__info">
										<div class="zoom-gallery__info-text">
											<h4 class="main-topic mb-2">{{$ongoingproject->title}}</h4>
											<p class="m-0 text-secondary">{{$ongoingproject->location}}</p>
										</div>
									</div>
								</a>
							</li>
							@endforeach

						</ul>
					</div>
				</div>
				<br><br>
				<button class="btn btn-primary btn-lg" onclick="location.href='ongoing'">All Ongoing Projects</button>
			</div>
		</div>

		<!--Services section-->
		<div class="section home-section section__services text-center p-3 background-theme-color-1">
			<h1 class="main-topic">Services</h1>
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-sm-6 mb-3">
						<div class="card shadow-sm" data-toggle="modal" data-target="#project-planning-modal">
							<div class="card-body">
								<div class="row">
									<div class="col-4 offset-4">
										<img src="images/icons/project-planing.svg" class="w-75 mb-3">
									</div>
								</div>
								<h6 class="main-topic m-0 text-secondary">PROJECT PRELIMINARY PLANNING AND DEVELOPMENT</h6>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 mb-3">
						<div class="card shadow-sm" data-toggle="modal" data-target="#structural-design-modal">
							<div class="card-body">
								<div class="row">
									<div class="col-4 offset-4">
										<img src="images/icons/structural-design.svg" class="w-75 mb-3">
									</div>
								</div>
								<h6 class="main-topic m-0 text-secondary">STRUCTURAL ANALYSIS AND DESIGN</h6>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 mb-3">
						<div class="card shadow-sm" data-toggle="modal" data-target="#post-tension-modal">
							<div class="card-body">
								<div class="row">
									<div class="col-4 offset-4">
										<img src="images/icons/post-tension.svg" class="w-75 mb-3">
									</div>
								</div>
								<h6 class="main-topic m-0 text-secondary">POST TENSION DESIGN AND DEVELOPMENT</h6>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 mb-3">
						<div class="card shadow-sm" data-toggle="modal" data-target="#project-management-modal">
							<div class="card-body">
								<div class="row">
									<div class="col-4 offset-4">
										<img src="images/icons/structural-design.svg" class="w-75 mb-3">
									</div>
								</div>
								<h6 class="main-topic m-0 text-secondary">PROJECT MANAGEMENT AND SUPERVISION</h6>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 mb-3">
						<div class="card shadow-sm" data-toggle="modal" data-target="#structural-audit-modal">
							<div class="card-body">
								<div class="row">
									<div class="col-4 offset-4">
										<img src="images/icons/structural-audit.svg" class="w-75 mb-3">
									</div>
								</div>
								<h6 class="main-topic m-0 text-secondary">STRUCTURAL AUDIT SERVICE</h6>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 mb-3">
						<div class="card shadow-sm" data-toggle="modal" data-target="#construction-supervision-modal">
							<div class="card-body">
								<div class="row">
									<div class="col-4 offset-4">
										<img src="images/icons/construction-supervision.svg" class="w-75 mb-3">
									</div>
								</div>
								<h6 class="main-topic m-0 text-secondary">CONSTRUCTION SUPERVISION AND DETAILING</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--Contact section-->
		<div class="section home-section p-3 background-theme-color-2">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<h1 class="main-topic">Contact Us</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="row">
							<div class="col-md-4">
								<h5 class="main-topic m-0">Address</h5>
								<p class="mt-3">CODE Consultants (Pvt) Ltd 10, <br>Albert Crescent, <br>Colombo 07</p>
							</div>
							<div class="col-md-4">
								<h5 class="main-topic m-0">Email</h5>
								<p class="mt-3">code@codec.lk</p>
							</div>
							<div class="col-md-4">
								<h5 class="main-topic m-0">Phone</h5>
								<p class="mt-3">+94 (11) 216 320</p>
							</div>
						</div>

						<div id="google-map" class="margin-top-20">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63377.68338205997!2d79.85942119329492!3d6.87799692758435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259382ba9f551%3A0xac2894f0553e3678!2sCODE%20Consultants%20(pvt)%20Ltd!5e0!3m2!1sen!2slk!4v1570709089384!5m2!1sen!2slk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
						</div>
					</div>
					<div class="col-sm-6">
						<!-- CONTACT FORM -->
						<form action="javascript:void(0)" method="post" class="wow fadeInUp contact-form" id="contactForm" role="form" data-wow-delay="0.8s">
							<!-- @csrf -->

							<h5 class="main-topic m-0">For more information, kindly fill out the form below</h5>
							<!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->

							

							<h6 id="progress" class="text-success d-none">Your message has been sent successfully.</h6>

						



							<!-- IF MAIL NOT SENT -->
							<h6 class="text-danger d-none">E-mail must be valid and message must be longer than 1 character.</h6>

							<input type="text" class="form-control bg-dark text-white mt-3 mb-3" id="name" name="name" placeholder="Full name">
							<input type="email" class="form-control bg-dark text-white mb-3" id="email" name="email" placeholder="Email address">
							<input type="text" class="form-control bg-dark text-white mb-3" id="subject" name="subject" placeholder="Subject">
							<textarea class="form-control bg-dark text-white mb-3" rows="4" id="message" name="message" placeholder="Tell about your project"></textarea>
							<button type="submit" class="btn btn-primary btn-lg mt-3" id="submit" name="submit">Send Message</button>
						</form>




						<script type="text/javascript">
							$('#contactForm').on('submit', function(event) {
								event.preventDefault();

								name = $('#name').val();
								email = $('#email').val();
								subject = $('#subject').val();
								message = $('#message').val();
								$.ajax({
									url: "/contact",
									type: "POST",
									data: {
										"_token": "{{ csrf_token() }}",
										name: name,
										email: email,
										subject: subject,
										message: message,
									},
									success: function(response) {
										$('#progress').removeClass("d-none");
										$('#name').val('');
										$('#email').val('');
										$('#subject').val('');
										$('#message').val('');
										console.log("sadasd");
									},
								});
							});
						</script>


						<!-- 
						<form action="/contact" method="post" class="wow fadeInUp contact-form" id="contact-form" role="form" data-wow-delay="0.8s">
							@csrf

							<h5 class="main-topic m-0">For more information, kindly fill out the form below</h5>
					

							@if (session('status'))
							
								<h6 class="text-success d-none">Your message has been sent successfully.</h6>
				
							@endif



							<h6 class="text-danger d-none">E-mail must be valid and message must be longer than 1 character.</h6>

							<input type="text" class="form-control bg-dark text-white mt-3 mb-3" id="cf-name" name="name" placeholder="Full name">
							<input type="email" class="form-control bg-dark text-white mb-3" id="cf-email" name="email" placeholder="Email address">
							<input type="text" class="form-control bg-dark text-white mb-3" id="cf-subject" name="subject" placeholder="Subject">
							<textarea class="form-control bg-dark text-white mb-3" rows="4" id="cf-message" name="message" placeholder="Tell about your project"></textarea>
							<button type="submit" class="btn btn-primary btn-lg mt-3" id="cf-submit" name="submit">Send Message</button>
						</form> -->




					</div>
				</div>
			</div>
		</div>

		<!--Footer section-->
		<div class="section home-section text-center p-3 background-theme-color-1">
			<div class="container-fluid">
				<div class="row mb-5">
					<div class="col-lg-12">
						<div class="row mt-3 text-center">
							<div class="col">
								<img src="images/partners/1.png" class="w-100">
							</div>
							<div class="col">
								<img src="images/partners/2.png" class="w-100">
							</div>
							<div class="col">
								<img src="images/partners/3.png" class="w-100">
							</div>
							<div class="col">
								<img src="images/partners/4.png" class="w-100">
							</div>
							<div class="col">
								<img src="images/partners/5.png" class="w-100">
							</div>
							<div class="col">
								<img src="images/partners/6.png" class="w-100">
							</div>
							<div class="col">
								<img src="images/partners/7.png" class="w-100">
							</div>
						</div>
						<div class="row mt-3 text-center">
							<div class="col">
								<img src="images/partners/8.png" class="w-100">
							</div>
							<div class="col">
								<img src="images/partners/9.png" class="w-100">
							</div>
							<div class="col">
								<img src="images/partners/10.png" class="w-100">
							</div>
							<div class="col">
								<img src="images/partners/11.png" class="w-100">
							</div>
							<div class="col">
								<img src="images/partners/12.png" class="w-100">
							</div>
							<div class="col">
								<img src="images/partners/13.png" class="w-100">
							</div>
							<div class="col">
								<img src="images/partners/14.png" class="w-100">
							</div>
						</div>
					</div>
				</div>
				<hr>
				<div class="row mt-5 justify-content-center">
					<div class="col-lg-4">
						<h6 class="text-bold">CODE Consultants (Pvt) Ltd</h6>
						<h6 class="mb-4 text-secondary">10, Albert Crescent, Colombo 07</h6>
						<p class="margin-bottom-0 mb-0 text-secondary">Tel: +94 112166320 | Email: code@codec.lk | Web: www.codec.lk</p>
					</div>
				</div>
				<div class="row justify-content-center mt-4">
					<div class="col-lg-4">
						<ul class="social-icon margin-top-20 p-0 mt-3 mr-0 mb-0 ml-0">
							<li class="d-inline-block"><a href="#"><i class="fab fa-facebook-square"></i></a></li>
							<li class="d-inline-block"><a href="#"><i class="fab fa-twitter-square"></i></a></li>
							<li class="d-inline-block"><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li class="d-inline-block"><a href="#"><i class="fab fa-google"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="home-mobile-view d-sm-none d-block" id="page1">
		<nav class="navbar navbar-expand-lg" id="mobile-navbar">
			<a class="navbar-brand" href="index.html">
				<img src="images/code_consultant_logo_light.png">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse mt-sm-0 mt-3" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto navbar-collapse__list" id="menu2">
					<li class="nav-item active" data-menuanchor="page1">
						<a class="nav-link" href="#page1">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Projects
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown-3">
							<span data-menuanchor="page2"><a class="dropdown-item" href="#page2">Completed Projects</a></span>
							<span data-menuanchor="page3"><a class="dropdown-item" href="#page3">Ongoing Projects</a>
						</div>
					</li>
					<li class="nav-item" data-menuanchor="page4">
						<a class="nav-link" href="#page4">Services</a>
					</li>
					<li class="nav-item" data-menuanchor="page5">
						<a class="nav-link" href="#page5">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about-us.html">About Us</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							News
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown-4">
							<a class="dropdown-item" href="#">Articles</a>
							<a class="dropdown-item" href="#">Events</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
		<div class="home-section" id="home-section2">
			<div class="home-section-overlay"></div>
			<div class="intro">
				<div class="home-intro-text">
					<div class="home-intro-text__square">
						<div class="home-intro-text__square--number">30</div>
						<div class="home-intro-text_square--text">Years of Experience</div>
						<h4><strong>200 +</strong> Projects</h4>
						<div class="home-intro-text__square-background"></div>
					</div>
					<h1 class="main-topic animating-text-animate">Sri Lanka's Leading<br> Structural Design Firm</h1>
				</div>
				<div class="home-section__home-btn">
					<button class="btn btn-primary btn-lg">Download Brochure</button>
				</div>
			</div>
			<div id="carouselExampleCaptions2" class="carousel slide carousel-fade home-section__carousel2" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="images/slider-images/1.jpg" class="d-block h-100">
					</div>
					<div class="carousel-item">
						<img src="images/slider-images/2.jpg" class="d-block h-100">
					</div>
					<div class="carousel-item">
						<img src="images/slider-images/3.jpg" class="d-block h-100">
					</div>
					<div class="carousel-item">
						<img src="images/slider-images/4.jpg" class="d-block h-100">
					</div>
					<div class="carousel-item">
						<img src="images/slider-images/5.jpg" class="d-block h-100">
					</div>
				</div>
			</div>
		</div>

		<!--Completed projects section-->
		<!-- <div class="home-section text-center background-theme-color-1" id="page2">
			<h1 class="main-topic">Completed Projects</h1>
			<div class="container-fluid">
				<div class="row no-gutters">
					<div class="col-md-12">
						<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
								<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
								<li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
								<li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
								<li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="images/completed-projects/1.jpg" class="d-block w-100" alt="...">
									<div class="carousel-caption d-none d-md-block">
										<h5>First slide label</h5>
										<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
									</div>
								</div>
								<div class="carousel-item">
									<img src="images/completed-projects/2.jpg" class="d-block w-100" alt="...">
									<div class="carousel-caption d-none d-md-block">
										<h5>Second slide label</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</div>
								</div>
								<div class="carousel-item">
									<img src="images/completed-projects/3.jpg" class="d-block w-100" alt="...">
									<div class="carousel-caption d-none d-md-block">
										<h5>Third slide label</h5>
										<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
									</div>
								</div>
								<div class="carousel-item">
									<img src="images/completed-projects/4.jpg" class="d-block w-100" alt="...">
									<div class="carousel-caption d-none d-md-block">
										<h5>Fourth slide label</h5>
										<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
									</div>
								</div>
								<div class="carousel-item">
									<img src="images/completed-projects/5.jpg" class="d-block w-100" alt="...">
									<div class="carousel-caption d-none d-md-block">
										<h5>Five slide label</h5>
										<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
									</div>
								</div>
								<div class="carousel-item">
									<img src="images/completed-projects/6.jpg" class="d-block w-100" alt="...">
									<div class="carousel-caption d-none d-md-block">
										<h5>Six slide label</h5>
										<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
									</div>
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
						<button class="btn btn-primary btn-lg mt-3" onclick="location.href='completed-projects.html'">Completed Projects</button>
					</div>
				</div>
			</div>
		</div> -->

		<!--Ongoing projects section-->
		<!-- <div class="home-section text-center background-theme-color-2" id="page3">
			<h1 class="main-topic">Ongoing Projects</h1>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="zoom-gallery mb-5">
							<li>
								<a href="images/completed-projects/1.jpg" data-source="" title="Project Title 1">
									<img src="images/completed-projects/1.jpg">
									<div class="zoom-gallery__info">
										<div class="zoom-gallery__info-text">
											<h4 class="main-topic mb-2">Project Name</h4>
											<p class="m-0 text-secondary">Location</p>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="images/completed-projects/2.jpg" data-source="" title="Project Title 2">
									<img src="images/completed-projects/2.jpg">
									<div class="zoom-gallery__info">
										<div class="zoom-gallery__info-text">
											<h4 class="main-topic mb-2">Project Name</h4>
											<p class="m-0 text-secondary">Location</p>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="images/completed-projects/3.jpg" data-source="" title="Project Title 3">
									<img src="images/completed-projects/3.jpg">
									<div class="zoom-gallery__info">
										<div class="zoom-gallery__info-text">
											<h4 class="main-topic mb-2">Project Name</h4>
											<p class="m-0 text-secondary">Location</p>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="images/completed-projects/4.jpg" data-source="" title="Project Title 4">
									<img src="images/completed-projects/4.jpg">
									<div class="zoom-gallery__info">
										<div class="zoom-gallery__info-text">
											<h4 class="main-topic mb-2">Project Name</h4>
											<p class="m-0 text-secondary">Location</p>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="images/completed-projects/5.jpg" data-source="" title="Project Title 5">
									<img src="images/completed-projects/5.jpg">
									<div class="zoom-gallery__info">
										<div class="zoom-gallery__info-text">
											<h4 class="main-topic mb-2">Project Name</h4>
											<p class="m-0 text-secondary">Location</p>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="images/completed-projects/6.jpg" data-source="" title="Project Title 6">
									<img src="images/completed-projects/6.jpg">
									<div class="zoom-gallery__info">
										<div class="zoom-gallery__info-text">
											<h4 class="main-topic mb-2">Project Name</h4>
											<p class="m-0 text-secondary">Location</p>
										</div>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div> -->

		<!--Services section-->
		<div class="home-section section__services text-center background-theme-color-1" id="page4">
			<h1 class="main-topic">Services</h1>
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-sm-6 mb-3">
						<div class="card shadow-sm" data-toggle="modal" data-target="#project-planning-modal">
							<div class="card-body">
								<div class="row">
									<div class="col-4 offset-4">
										<img src="images/icons/project-planing.svg" class="w-100 mb-3">
									</div>
								</div>
								<h6 class="main-topic m-0 text-secondary">PROJECT PRELIMINARY PLANNING AND DEVELOPMENT</h6>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 mb-3">
						<div class="card shadow-sm" data-toggle="modal" data-target="#structural-design-modal">
							<div class="card-body">
								<div class="row">
									<div class="col-4 offset-4">
										<img src="images/icons/structural-design.svg" class="w-100 mb-3">
									</div>
								</div>
								<h6 class="main-topic m-0 text-secondary">STRUCTURAL ANALYSIS AND DESIGN</h6>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 mb-3">
						<div class="card shadow-sm" data-toggle="modal" data-target="#post-tension-modal">
							<div class="card-body">
								<div class="row">
									<div class="col-4 offset-4">
										<img src="images/icons/post-tension.svg" class="w-100 mb-3">
									</div>
								</div>
								<h6 class="main-topic m-0 text-secondary">POST TENSION DESIGN AND DEVELOPMENT</h6>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 mb-3">
						<div class="card shadow-sm" data-toggle="modal" data-target="#project-management-modal">
							<div class="card-body">
								<div class="row">
									<div class="col-4 offset-4">
										<img src="images/icons/structural-design.svg" class="w-100 mb-3">
									</div>
								</div>
								<h6 class="main-topic m-0 text-secondary">PROJECT MANAGEMENT AND SUPERVISION</h6>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 mb-3">
						<div class="card shadow-sm" data-toggle="modal" data-target="#structural-audit-modal">
							<div class="card-body">
								<div class="row">
									<div class="col-4 offset-4">
										<img src="images/icons/structural-audit.svg" class="w-100 mb-3">
									</div>
								</div>
								<h6 class="main-topic m-0 text-secondary">STRUCTURAL AUDIT SERVICE</h6>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 mb-3">
						<div class="card shadow-sm" data-toggle="modal" data-target="#construction-supervision-modal">
							<div class="card-body">
								<div class="row">
									<div class="col-4 offset-4">
										<img src="images/icons/construction-supervision.svg" class="w-100 mb-3">
									</div>
								</div>
								<h6 class="main-topic m-0 text-secondary">CONSTRUCTION SUPERVISION AND DETAILING</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--Contact section-->
		<div class="home-section background-theme-color-2" id="page5">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<h1 class="main-topic">Contact Us</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="row">
							<div class="col-md-4">
								<h5 class="m-0">Address</h5>
								<p class="mt-2">CODE Consultants (Pvt) Ltd 10, <br>Albert Crescent, <br>Colombo 07</p>
							</div>
							<div class="col-md-4">
								<h5 class="m-0">Email</h5>
								<p class="mt-2">code@codec.lk</p>
							</div>
							<div class="col-md-4">
								<h5 class="m-0">Phone</h5>
								<p class="mt-2">+94 (11) 216 320</p>
							</div>
						</div>

						<div id="google-map" class="margin-top-20">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63377.68338205997!2d79.85942119329492!3d6.87799692758435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae259382ba9f551%3A0xac2894f0553e3678!2sCODE%20Consultants%20(pvt)%20Ltd!5e0!3m2!1sen!2slk!4v1570709089384!5m2!1sen!2slk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
						</div>
					</div>
					<div class="col-sm-6">
						<!-- CONTACT FORM -->
						<form action="#" method="post" class="wow fadeInUp contact-form" id="contact-form" role="form" data-wow-delay="0.8s">

							<h5 class="main-topic mt-4">For more information, kindly fill out the form below</h5>
							<!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
							<h6 class="text-success d-none">Your message has been sent successfully.</h6>

							<!-- IF MAIL NOT SENT -->
							<h6 class="text-danger d-none">E-mail must be valid and message must be longer than 1 character.</h6>

							<input type="text" class="form-control bg-dark text-white mt-3 mb-3" id="cf-name" name="name" placeholder="Full name">
							<input type="email" class="form-control bg-dark text-white mb-3" id="cf-email" name="email" placeholder="Email address">
							<input type="text" class="form-control bg-dark text-white mb-3" id="cf-subject" name="subject" placeholder="Subject">
							<textarea class="form-control bg-dark text-white mb-3" rows="4" id="cf-message" name="message" placeholder="Tell about your project"></textarea>
							<button type="submit" class="btn btn-primary btn-lg mt-3" id="cf-submit" name="submit">Send Message</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!--Footer section-->
		<div class="home-section text-center background-theme-color-1">
			<div class="container-fluid">
				<div class="row mb-5">
					<div class="col-4 mb-2">
						<img src="images/partners/1.png" class="w-100">
					</div>
					<div class="col-4 mb-2">
						<img src="images/partners/2.png" class="w-100">
					</div>
					<div class="col-4 mb-2">
						<img src="images/partners/3.png" class="w-100">
					</div>
					<div class="col-4 mb-2">
						<img src="images/partners/4.png" class="w-100">
					</div>
					<div class="col-4 mb-2">
						<img src="images/partners/5.png" class="w-100">
					</div>
					<div class="col-4 mb-2">
						<img src="images/partners/6.png" class="w-100">
					</div>
					<div class="col-4 mb-2">
						<img src="images/partners/7.png" class="w-100">
					</div>
					<div class="col-4 mb-2">
						<img src="images/partners/8.png" class="w-100">
					</div>
					<div class="col-4 mb-2">
						<img src="images/partners/9.png" class="w-100">
					</div>
					<div class="col-4 mb-2">
						<img src="images/partners/10.png" class="w-100">
					</div>
					<div class="col-4 mb-2">
						<img src="images/partners/11.png" class="w-100">
					</div>
					<div class="col-4 mb-2">
						<img src="images/partners/12.png" class="w-100">
					</div>
					<div class="col-4 offset-2">
						<img src="images/partners/13.png" class="w-100">
					</div>
					<div class="col-4">
						<img src="images/partners/14.png" class="w-100">
					</div>
				</div>
				<hr>
				<div class="row mt-5 justify-content-center">
					<div class="col-lg-4">
						<h6 class="text-bold">CODE Consultants (Pvt) Ltd</h6>
						<h6 class="mb-4 text-secondary">10, Albert Crescent, Colombo 07</h6>
						<p class="margin-bottom-0 mb-0 text-secondary">Tel: +94 112166320 | Email: code@codec.lk | Web: www.codec.lk</p>
					</div>
				</div>
				<div class="row justify-content-center mt-4">
					<div class="col-lg-4">
						<ul class="social-icon margin-top-20 p-0 mt-3 mr-0 mb-0 ml-0">
							<li class="d-inline-block"><a href="#"><i class="fab fa-facebook-square"></i></a></li>
							<li class="d-inline-block"><a href="#"><i class="fab fa-twitter-square"></i></a></li>
							<li class="d-inline-block"><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li class="d-inline-block"><a href="#"><i class="fab fa-google"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>





<!-- Modal -->
<div class="modal fade" id="project-planning-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content bg-dark">
			<div class="modal-header">
				<h5 class="modal-title text-secondary" id="exampleModalLabel">PROJECT PRELIMINARY PLANNING AND DEVELOPMENT</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<ul>
					<li>Project scoping and concept design</li>
					<li>Development and sub division master planning and design</li>
					<li>Development feasibility studies</li>
					<li>Environmental impact assessments</li>
					<li>Environmental risk assessment.</li>
					<li>Detailed design and contract documentation</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="structural-design-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content bg-dark">
			<div class="modal-header">
				<h5 class="modal-title text-secondary" id="exampleModalLabel">STRUCTURAL ANALYSIS AND DESIGN</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<ul>
					<li>High-Rise / Mixed-Use Residential Buildings</li>
					<li>Commercial Structures</li>
					<li>Exhibition Centers and Stadiums</li>
					<li>Infrastructure</li>
					<li>Energy &amp; Resources</li>
					<li>Maritime Structures</li>
					<li>Industrial and Distribution Centers &amp; Warehouses.</li>
					<li>High-rise building façade design</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="post-tension-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content bg-dark">
			<div class="modal-header">
				<h5 class="modal-title text-secondary" id="exampleModalLabel">POST TENSION DESIGN AND DEVELOPMENT</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<ul>
					<li>Post tension slab design</li>
					<li>Pre cast pile design</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="project-management-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content bg-dark">
			<div class="modal-header">
				<h5 class="modal-title text-secondary" id="exampleModalLabel">PROJECT MANAGEMENT AND SUPERVISION</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<ul>
					<li>Project management and coordination of specialist inputs</li>
					<li>Construction management and supervision</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="structural-audit-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content bg-dark">
			<div class="modal-header">
				<h5 class="modal-title text-secondary" id="exampleModalLabel">STRUCTURAL AUDIT SERVICE</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<ul>
					<li>Peer Review and certification</li>
					<li>Assess the most suitable construction methodology for client’s requirements</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="construction-supervision-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content bg-dark">
			<div class="modal-header">
				<h5 class="modal-title text-secondary" id="exampleModalLabel">CONSTRUCTION SUPERVISION AND DETAILING</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<ul>
					<li>Hoardings and gantries design, inspection &amp; certification</li>
					<li>Scaffolding / Formwork / Back propping - design, inspection &amp; certification</li>
					<li>Structural capacity assessment of existing structures</li>
					<li>Falsework / Temporary buildings / fencing</li>
					<li>Temporary retention solutions</li>
					<li>Piling platforms &amp; loading platforms</li>
					<li>Detailed construction sequencing and staged erection methodologies of buildings</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="condistion-assessment-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content bg-dark">
			<div class="modal-header">
				<h5 class="modal-title text-secondary" id="exampleModalLabel">STRUCTURAL CONDITION ASSESSMENT</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<ul>
					<li>Heritage / general condition study &amp; remedial work</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="js/sapple.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/particles.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script>
	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
		showSlides(slideIndex += n);
	}

	function currentSlide(n) {
		showSlides(slideIndex = n);
	}

	function showSlides(n) {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("dot");
		if (n > slides.length) {
			slideIndex = 1
		}
		if (n < 1) {
			slideIndex = slides.length
		}
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex - 1].style.display = "block";
		dots[slideIndex - 1].className += " active";
	}
</script>
<script>
	// completed projects slider script
	$(document).ready(function() {
		$('.navbar-nav a').on('click', function() {
			$('.navbar-nav').find('li.active').removeClass('active');
			$(this).parent('li').addClass('active');
		});
		$('.slider-multi').sappleMultiSlider();
		$('.customer-logos').slick({
			slidesToShow: 6,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 1500,
			arrows: false,
			dots: false,
			pauseOnHover: false,
			responsive: [{
				breakpoint: 768,
				settings: {
					slidesToShow: 4
				}
			}, {
				breakpoint: 520,
				settings: {
					slidesToShow: 3
				}
			}]
		});
	});
</script>
<script>
	// Magnify ongoing projects image gallery
	$('.zoom-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
		image: {
			verticalFit: true,
			titleSrc: function(item) {
				return item.el.attr('title') + ' &middot; <a class="image-source-link" href="' + item.el.attr('data-source') + '" target="_blank">image source</a>';
			}
		},
		gallery: {
			enabled: true
		},
		zoom: {
			enabled: true,
			duration: 300, // don't foget to change the duration also in CSS
			opener: function(element) {
				return element.find('img');
			}
		}

	});
</script>
<script>
	// particles on home page
	$(document).ready(function() {
		particlesJS("particles-js", {
			"particles": {
				"number": {
					"value": 80,
					"density": {
						"enable": true,
						"value_area": 800
					}
				},
				"color": {
					"value": "#009a4c"
				},
				"shape": {
					"type": "circle",
					"stroke": {
						"width": 0,
						"color": "#000000"
					},
					"polygon": {
						"nb_sides": 5
					},
					"image": {
						"src": "img/github.svg",
						"width": 100,
						"height": 100
					}
				},
				"opacity": {
					"value": 0.5,
					"random": false,
					"anim": {
						"enable": false,
						"speed": 1,
						"opacity_min": 0.1,
						"sync": false
					}
				},
				"size": {
					"value": 3,
					"random": true,
					"anim": {
						"enable": false,
						"speed": 40,
						"size_min": 0.1,
						"sync": false
					}
				},
				"line_linked": {
					"enable": true,
					"distance": 150,
					"color": "#009a4c",
					"opacity": 0.4,
					"width": 1
				},
				"move": {
					"enable": true,
					"speed": 6,
					"direction": "none",
					"random": false,
					"straight": false,
					"out_mode": "out",
					"bounce": false,
					"attract": {
						"enable": false,
						"rotateX": 600,
						"rotateY": 1200
					}
				}
			},
			"interactivity": {
				"detect_on": "canvas",
				"events": {
					"onhover": {
						"enable": true,
						"mode": "repulse"
					},
					"onclick": {
						"enable": true,
						"mode": "push"
					},
					"resize": true
				},
				"modes": {
					"grab": {
						"distance": 400,
						"line_linked": {
							"opacity": 1
						}
					},
					"bubble": {
						"distance": 400,
						"size": 40,
						"duration": 2,
						"opacity": 8,
						"speed": 3
					},
					"repulse": {
						"distance": 200,
						"duration": 0.4
					},
					"push": {
						"particles_nb": 4
					},
					"remove": {
						"particles_nb": 2
					}
				}
			},
			"retina_detect": true
		});
		var count_particles, stats, update;
		stats = new Stats;
		stats.setMode(0);
		stats.domElement.style.position = 'absolute';
		stats.domElement.style.left = '0px';
		stats.domElement.style.top = '0px';
		document.body.appendChild(stats.domElement);
		count_particles = document.querySelector('.js-count-particles');
		update = function() {
			stats.begin();
			stats.end();
			if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
				count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
			}
			requestAnimationFrame(update);
		};
		requestAnimationFrame(update);
	});
</script>
<script>
	/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
	var prevScrollpos = window.pageYOffset;
	window.onscroll = function() {
		var currentScrollPos = window.pageYOffset;
		if (prevScrollpos > currentScrollPos) {
			document.getElementById("mobile-navbar").style.top = "0";
		} else {
			document.getElementById("mobile-navbar").style.top = "-300px";
		}
		prevScrollpos = currentScrollPos;
	}
</script>
<script>
	$(function() {
		$(".preload").fadeOut(3000, function() {});
	});
</script>

</html>
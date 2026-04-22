<footer class="main-footer">
	<div class="bg bg-pattern-7"></div>
	<div class="auto-container">
		<div class="footer-upper">
			<div class="logo-box"><img src="{{ asset('website/images/vidyaglobal-logo.png') }}" alt=""></div>
			<ul class="contact-info">
				<li>
					<i class="icon fa fa-phone-square"></i>
					<span class="title">Phone:</span>
					<div class="text">
						<a href="tel:+917539910692">+91 753 991 0692</a><br>
						<a href="tel:+918102851589">+91 810 285 1589</a>
					</div>
				</li>
				<li>
					<i class="icon fa fa-envelope"></i>
					<span class="title">Email:</span>
					<div class="text"><a href="mailto:info@vidyaglobal.in">info@vidyaglobal.in</a></div>
				</li>
				<li>
					<i class="icon fa fa-map-marker"></i>
					<span class="title">Address:</span>
					<div class="text"> Nearby Bsnl Office,<br> Koeri Tola, Ward No.26, Bettiah,<br> Bihar-845438</div>
				</li>
			</ul>
			<div class="btn-box">
				<a href="{{route('contact-us')}}" class="theme-btn btn-style-four"><span class="btn-title">Book
						Consultation</span></a>
			</div>
		</div>
	</div>

	<!--Widgets Section-->
	<div class="widgets-section">
		<div class="auto-container">
			<div class="row">
				<!--Footer Column-->
				<div class="footer-column col-xl-6 col-lg-6 col-md-12 mb-0">
					<div class="row">
						<div class="footer-widget col-lg-4 col-md-4 col-ms-12">
							<h6 class="widget-title">Quick Links</h6>
							<ul class="user-links">
								<li><a href="{{ route('about-us') }}">About Us</a></li>
								<li><a href="{{ route('director-message') }}">Director's Message</a></li>
								<li><a href="{{ route('vision-mission') }}">Vision Mission</a></li>
							</ul>
							<ul class="social-icon-two">
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							</ul>
						</div>
						<div class="footer-widget col-lg-4 col-md-4 col-ms-12">
							<h6 class="widget-title">Associate Colleges</h6>
							<ul class="user-links">
								
							</ul>
						</div>
						<div class="footer-widget col-lg-4 col-md-4 col-ms-12">
							<h6 class="widget-title">Courses</h6>
							<ul class="user-links">
								<li><a href="{{ route('admission-guidance') }}">Admission Guidance</a></li>
								<li><a href="{{ route('career-counselling') }}">Career Counseling</a></li>
								<li><a href="{{ route('diploma-admission') }}">Diploma Admission</a></li>
								<li><a href="{{ route('engineering-admission') }}">Engineering Admission</a></li>
							</ul>
						</div>


					</div>
				</div>

				<!--Footer Column-->
				<div class="footer-column col-xl-3 col-lg-3 col-md-6 col-sm-8">
					<div class="footer-widget gallery-widget">
						<h6 class="widget-title">Important Links</h6>
						<ul class="user-links">
							<li><a href="{{ route('contact-us') }}">Contact Us</a></li>
							<li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
							<li><a href="{{ route('terms-condition') }}">Terms & Conditions</a></li>
						</ul>

					</div>
				</div>

				<!--Footer Column-->
				<div class="footer-column col-xl-3 col-lg-3 col-md-6">
					<div class="footer-widget">
						<h6 class="widget-title">Location</h6>
						<div class="subscribe-form">
							<!-- <div class="text">Signup for our latest news & articles.</div>
							<form method="post" action="#">
								<div class="form-group">
									<input type="email" name="email" class="email" value="" placeholder="Email Address"
										required="">
									<button type="button" class="theme-btn"><i class="fa fa-paper-plane"></i></button>
								</div>
							</form> -->
							<iframe
								src="https://maps.google.com/maps?q=BSNL%20Office%20Koeri%20Tola%20Ward%20No%2026%20Bettiah%20Bihar%20845438&output=embed"
								width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy">
							</iframe>
						</div>


					</div>
				</div>
			</div>
		</div>
	</div>

	<!--Footer Bottom-->
	<div class="footer-bottom">
		<div class="auto-container">
			<div class="inner-container">
				<div class="copyright-text">&copy; {{ date('Y') }} <a href="{{ route('home') }}">Vidya Global</a> |
					Developed by <a href="https://vibrantick.in" target="_blank">Vibrantick Infotech Solutions</a></div>
			</div>
		</div>
	</div>
	</div>
</footer>
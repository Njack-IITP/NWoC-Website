<!DOCTYPE HTML>
<html itemscope itemtype="http://schema.org/Article">
	<head>
		<title>NJACK Winter of Code</title>

		<meta name="description" content="NWoC is a program that helps students understand the paradigm of Open Source contribution and gives them real world software development experience." />
		<META NAME="Keywords" CONTENT="Njack,winter,code,nwoc,iit,iitp,patna,indian institute of technology">
		<!-- Schema.org markup for Google+ -->
		<meta itemprop="name" content="NJACK Winter of Code">
		<meta itemprop="description" content="NWoC is a program that helps students understand the paradigm of Open Source contribution and gives them real world software development experience.">
		<meta itemprop="image" content="http://nwoc.njack-iitp.org/nwocLogo.jpg">

		<!-- Twitter Card data -->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="@njackiitp">
		<meta name="twitter:title" content="NJACK Winter of Code">
		<meta name="twitter:description" content="NWoC is a program that helps students understand the paradigm of Open Source contribution and gives them real world software development experience.">
		<meta name="twitter:creator" content="@njackiitp">
		<!-- Twitter summary card with large image must be at least 280x150px -->
		<meta name="twitter:image:src" content="http://nwoc.njack-iitp.org/nwocLogo.jpg">
	
		<!-- Open Graph data -->
		<meta property="og:title" content="NJACK Winter of Code" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="http://nwoc.njack-iitp.org/" />
		<meta property="og:image" content="http://nwoc.njack-iitp.org/nwocLogo.jpg" />
		<meta property="og:description" content="NWoC is a program that helps students understand the paradigm of Open Source contribution and gives them real world software development experience." />
		<meta property="og:site_name" content="NWoC" />
		<meta property="article:published_time" content="2017-10-11T05:59:00+01:00" />
		<meta property="article:modified_time" content="2017-10-12T19:08:47+01:00" />
		<meta property="article:section" content="NJACK Winter of Code is an initiative by Open Source Department of NJACK, IIT Patna for the students, who have never participated in Free or Open Source Software (FOSS) development before, to get them involved during the winter vacations and break the ice of Open Source contributions." />
		<meta property="article:tag" content="NWoC" />
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108030175-1"></script>
		<script src="assets/js/jquery.min.js"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-108030175-1');
		</script>
		<link rel="icon" 
	      type="image/png" 
	      href="favicon.ico">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.0.2/particles.min.js"></script>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	    <link rel="stylesheet" href="css/style.css">
		<script>
			particlesJS("particles-js", 'config.json');
		</script>
		<script>
			$( document ).ready(function() {
				$.get( "https://api.github.com/orgs/NJACKWinterOfCode/repos", function( data ) {
					data.forEach(function(data_) {
					    $("#projects_").append("<blockquote><h3 style=\"text-align: left;\">"+data_.name+"</h3><p>"+data_.description+"</p><ul class=\"icons alt\"><li><a href=\""+ data_.html_url +"\" class=\"icon alt fa-github\"><span class=\"label\">GitHub</span></a></li></ul></blockquote>");
					});
				});
			// ;
			});
		</script>
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">
<div id="particles-js"></div>
				<!-- Intro -->
					<div id="intro">
						<img src="images/logo2.png" width="400px" alt="">
						<br>
						<h1>NJACK<br />
						Winter of Code</h1>
						<p>NWoC helps new students understand the paradigm of Open Source contribution and <br>increase their expertise over Git and Github along with giving them real world development experience.</p>
						<ul class="actions">
							<li><a href="#header" class="button icon solo fa-arrow-down scrolly">Resources</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="index.php" class="logo">NWoC</a>
					</header>

				<!-- Nav -->
					<!-- <nav id="nav">
						<ul class="links">
							<li class="active"><a href="index.php">This is Massively</a></li>
							<li><a href="generic.html">Generic Page</a></li>
							<li><a href="elements.html">Elements Reference</a></li>
						</ul>
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
						</ul>
					</nav>
 -->
				<!-- Main -->
					<div id="main">

						<article class="post featured">
							<header class="major">
								<h2>About NWoC</h2>
								<p><b>NJACK Winter of Code is an initiative by Open Source Department of NJACK, IIT Patna for the students, who have never participated in Free or Open Source Software (FOSS) development before, to get them involved during the winter vacations and break the ice of Open Source contributions.</b></p>
							</header>
							<ul class="actions">
								<li><a href="#register" class="button big">Register!</a></li>
							</ul>
						</article>

						<article class="post featured">
							<header class="major">
								<h2>Resources</h2>
								<p>
									
									<ul type="none" class="actions">
										<li><a href="docs/NWoC_StudentManual.pdf" class="button big" target="_blank">Student Manual</a></li>
										<li><a href="docs/NWoC_MentorManual.pdf" class="button big" target="_blank">Mentor Manual</a></li>
									</ul>
								</p>
							</header>
							
						</article>
						
						
						<article class="post featured">
							<header class="major">
								<h2>Projects</h2>
								<p id="projects_">
							<a href="https://github.com/NJACKWinterOfCode" target="_blank">View the list on GitHub.</a>
							<!-- 
								<blockquote>
									<h3 style="text-align: left;">Moto-Navigator</h3>
									<p>Moto Navigator App is a navigation app available for Android. It uses your phone’s internet connection (4G/3G/2G/EDGE or Wi-Fi, as available) and GPS connection to track your present location and show you the navigation path to the destination via WALK/CYCLE/CAR routes. It uses API from mapbox. You can also save the paths for offline later access.<br>Tech Stack:Java, Android<br>Mentors: Anupam Das (slack: opticod)</p>
									<ul class="icons alt">
										<!-- <li><a  href="mailto:njack@iitp.ac.in?subject=[NWOC]" class="icon alt fa fa-envelope fa-6"><span class="label">Email</span></a></li> -->
										<!-- <li><a href="https://github.com/NJACKWinterOfCode/Moto-Navigator" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
									</ul>
								</blockquote>
								<blockquote>
									<h3 style="text-align: left;">E-voting-portal</h3>
									<p>This project was especially designed for IITP, Gymkhana Elections that use to happen in our college yearly for different student representative posts. This was my first project in very first year of my undergraduate course.<br>Tech Stack:PHP, HTML, CSS<br>Mentors: Anupam Das (slack: opticod)</p>
									<ul class="icons alt"> -->
										<!-- <li><a  href="mailto:njack@iitp.ac.in?subject=[NWOC]" class="icon alt fa fa-envelope fa-6"><span class="label">Email</span></a></li> -->
										<!-- <li><a href="https://github.com/NJACKWinterOfCode/E-voting-portal" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
									</ul> -->
								<!-- </blockquote>
								<blockquote>
									<h3 style="text-align: left;">TrackMyShows</h3>
									<p>This project was especially designed for IITP, Gymkhana Elections that use to happen in our college yearly for different student representative posts. This was my first project in very first year of my undergraduate course.<br>Tech Stack: Swift, Ruby<br>Mentors: Chashmeet Singh (slack: chashmeetsingh)</p>
									<ul class="icons alt"> -->
										<!-- <li><a  href="mailto:njack@iitp.ac.in?subject=[NWOC]" class="icon alt fa fa-envelope fa-6"><span class="label">Email</span></a></li> -->
										<!-- <li><a href="https://github.com/NJACKWinterOfCode/TrackMyShows" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
									</ul>
								</blockquote>
								<blockquote>
									<h3 style="text-align: left;">Wizzy-Downloader</h3>
									<p>A website which lets you download youtube videos and also maintain your profile and past downloads.This website has been developed using the Django Framework.<br>Tech Stack: Python, JavaScript, HTML, CSS<br>Mentors: Abhijit Roy (slack: Ember)</p>
									<ul class="icons alt"> -->
										<!-- <li><a  href="mailto:njack@iitp.ac.in?subject=[NWOC]" class="icon alt fa fa-envelope fa-6"><span class="label">Email</span></a></li> -->
										<!-- <li><a href="https://github.com/NJACKWinterOfCode/Wizzy-Downloader" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
									</ul>
								</blockquote>
								<blockquote>
									<h3 style="text-align: left;">Meridio</h3>
									<p>//desc<br>Mentors: Abhijit Roy (slack: Ember)</p>
									<ul class="icons alt"> -->
										<!-- <li><a  href="mailto:njack@iitp.ac.in?subject=[NWOC]" class="icon alt fa fa-envelope fa-6"><span class="label">Email</span></a></li> -->
										<!-- <li><a href="https://github.com/NJACKWinterOfCode/Meridio" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
									</ul>
								</blockquote>

								<h3 style="font-size:1.9em;">Google Summer of Code Organisations' projects:</h3>
								<p>Note: The projects listed below are actual projects from organisations in Google Summer of Code 2017. Contributing to issues in these projects will improve your GSoC application strength when applying to those organisations. <br>However, the complete process of bug resolution in larger organisations is quite slow as several members of the community need to approve your fix before they can be merged. Also, these issues would typically be harder to fix. At times, some issues take months to resolve and get merged.</p>
								<blockquote>
									<h3 style="text-align: left;">Drupal</h3>
									<p>//desc<br>Tech Stack: PHP, JavaScript, CSS<br>Intermediate Mentors: Tameesh Biswas (slack: tameeshb)</p>
									<ul class="icons alt"> -->
										<!-- <li><a  href="mailto:njack@iitp.ac.in?subject=[NWOC]" class="icon alt fa fa-envelope fa-6"><span class="label">Email</span></a></li> -->
										<!-- <li><a href="https://github.com/NJACKWinterOfCode/Meridio" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
									</ul>
								</blockquote> -->


								</p>
							</header>
							
						</article>


						<article class="post featured">
							<header class="major">
								<h2>Timeline</h2>
							</header>
								<h2>2017</h2>
							<section id="status-timeline" class="status-container">
								<div class="status-timeline-block">
									<div class="status-timeline-img status-picture">
							<!-- 			<img src="img/status-icon-picture.svg" alt="Picture"> -->
									</div> <!-- status-timeline-img -->
	
									<div class="status-timeline-content">
										<h2>Program is announced</h2>
										<p>NJACK Winter of code is released online and students and mentors are informed about the program.</p>
										<span class="status-date">October First week</span>
									</div> <!-- status-timeline-content -->
								</div> <!-- status-timeline-block -->

								<div class="status-timeline-block">
									<div class="status-timeline-img status-picture">
							<!-- 			<img src="img/status-icon-movie.svg" alt="Movie"> -->
									</div> <!-- status-timeline-img -->

									<div class="status-timeline-content">
										<h2>Mentor Registration begins</h2>
										<p>Interested mentors sign up on the website and optionally register their projects on the website.</p>
										<!-- <a href="#0" class="status-read-more">Read more</a> -->
										<span class="status-date">October 10</span>
									</div> <!-- status-timeline-content -->
								</div> <!-- status-timeline-block -->

								<div class="status-timeline-block">
									<div class="status-timeline-img status-picture">
							<!-- 			<img src="img/status-icon-picture.svg" alt="Picture"> -->
									</div> <!-- status-timeline-img -->

									<div class="status-timeline-content">
										<h2>Student Registrations Begin</h2>
										<p>Interested students begin applying to the program.</p>
										<!-- <a href="#0" class="status-read-more">Read more</a> -->
										<span class="status-date">November 1</span>
									</div> <!-- status-timeline-content -->
								</div> <!-- status-timeline-block -->

								<div class="status-timeline-block">
									<div class="status-timeline-img status-movie">
							<!-- 			<img src="img/status-icon-location.svg" alt="Location"> -->
									</div> <!-- status-timeline-img -->

									<div class="status-timeline-content">
										<h2>Mentor Registration ends</h2>
										<!-- <a href="#0" class="status-read-more">Read more</a> -->
										<span class="status-date">November 15</span>
									</div> <!-- status-timeline-content -->
								</div> <!-- status-timeline-block -->

								<div class="status-timeline-block">
									<div class="status-timeline-img status-picture">
							<!-- 			<img src="img/status-icon-location.svg" alt="Location"> -->
									</div> <!-- status-timeline-img -->

									<div class="status-timeline-content">
										<h2>Projects Announced</h2>
										<p>Organizing team selects projects and announces them.</p>
										<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>
										<a href="#0" class="status-read-more">Read more</a> -->
										<span class="status-date">November 26</span>
									</div> <!-- status-timeline-content -->
								</div> <!-- status-timeline-block -->

								<div class="status-timeline-block">
									<div class="status-timeline-img status-picture">
							<!-- 			<img src="img/status-icon-movie.svg" alt="Movie"> -->
									</div> <!-- status-timeline-img -->

									<div class="status-timeline-content">
										<h2>Coding Begins</h2>
										<p>Registered students start contributing to selected projects.</p>
										<span class="status-date">November 28</span>
									</div> <!-- status-timeline-content -->
								</div> <!-- status-timeline-block -->
								<div class="status-timeline-block">
									<div class="status-timeline-img status-movie">
							<!-- 			<img src="img/status-icon-movie.svg" alt="Movie"> -->
									</div> <!-- status-timeline-img -->

									<div class="status-timeline-content">
										<h2>Coding Ends</h2>
										<p>Students conclude with their contributions for the program and file reports.<br>Mentors file feedback.</p>
										<span class="status-date">January 7 2018</span>
									</div> <!-- status-timeline-content -->
								</div> <!-- status-timeline-block -->
								
								<div class="status-timeline-block">
									<div class="status-timeline-img status-picture">
							<!-- 			<img src="img/status-icon-movie.svg" alt="Movie"> -->
									</div> <!-- status-timeline-img -->

									<div class="status-timeline-content">
										<h2>Results Announced</h2>
										<p></p>
										<span class="status-date">January 10-15 2018</span>
									</div> <!-- status-timeline-content -->
								</div> <!-- status-timeline-block -->
							</section> <!-- status-timeline -->
							  
						</article>
<!-- 
						<article class="post featured">
							<header class="major">
								<h2>Sponsors</h2>
								<p>
									<ul type="none" class="actions">
										<li><a onclick="alert('todo')" class="button big" target="_blank">Sponsor Brochure</a></li>
									</ul>
								</p>
							</header>
							
						</article> -->

					<article class="post featured">
							<header class="major" id="register">
								<h2>Register</h2>
								<p>
									<ul type="none" class="actions">
										<ul type="none" class="actions">
										<li><a href="https://docs.google.com/forms/d/1IBP83aSPvbkytBMBdUNLXO5UR_gsc4vQGeELXIswer4/viewform" class="button big" target="_blank">Student</a></li>
										<!-- <li><a href="https://docs.google.com/forms/d/e/1FAIpQLScKeE8hL9jwRfPsQbbNP1HNB7XhYO0ZerOZ21ct8mJjNlWZ0Q/viewform" class="button big" target="_blank">Mentor</a></li> -->
									</ul>
									</ul>
								</p>
								<br>
								<br>
								<!-- <h3>Communication</h3> -->
								<p>
									<ul type="none" class="actions">
										<ul type="none" class="actions">
										<li><a href="https://goo.gl/7H8rmx" class="button big" target="_blank">Join Slack Channel</a></li><br><!-- (SignUp using @iitp.ac.in email or<br> <a href="mailto:njack@iitp.ac.in?subject=[NWOC] Slack Channel Invite Request&body=Desired username:">Send email requesting for invite link</a>) -->
									</ul>
									</ul>
								</p>
							</header>
							
						</article>
					
					<article class="post featured">
							<header class="major" id="register">
								<h2 style="font-size: 2em">Sponsor</h2>
							<p>
								<a href="https://github.com" target="_blank">
									<img src="images/github_logo.png" style=" width: 50%" alt="">
								</a>
							</p>
							</header>
							
						</article>


					</div>


						
					</div>
					<br><br><br><br>

				<!-- Footer -->
					<footer id="footer">
					<!-- 	<section>
							<form method="post" action="#">
								<div class="field">
									<label for="name">Name</label>
									<input type="text" name="name" id="name" />
								</div>
								<div class="field">
									<label for="email">Email</label>
									<input type="text" name="email" id="email" />
								</div>
								<div class="field">
									<label for="message">Message</label>
									<textarea name="message" id="message" rows="3"></textarea>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</form>
						</section> -->
						<section class="contact">
							<!-- <section class="alt">
								<h3>Address</h3>
								<p>1234 Somewhere Road #87257<br />
								Nashville, TN 00000-0000</p>
							</section> -->
							
							<section><center>
								<p><a href="mailto:njack@iitp.ac.in">njack@iitp.ac.in</a><br>
								<a href="https://goo.gl/7H8rmx" target="_blank">Slack channel</a><br><!-- (SignUp using @iitp.ac.in email or<br><a href="mailto:njack@iitp.ac.in?subject=[NWOC] Slack Channel Invite Request&body=Desired username:">send email requesting for invite link</a>) -->
							</p>
							</section>
							<section>
								<ul class="icons alt">
									<li><a  href="mailto:njack@iitp.ac.in?subject=[NWOC]" class="icon alt fa fa-envelope fa-6"><span class="label">Email</span></a></li>
									<li><a href="https://www.facebook.com/njack.iitp/" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="https://github.com/Njack-IITP/" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</section></center>
						</section>
					</footer>
<div id="particles-js"></div>
				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; NJACK</li></ul>
					</div>

			</div>

		<!-- Scripts -->
			
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
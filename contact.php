<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<!-- Header -->
	<head>
		<title>Rex Lui - Make your data value</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="contact is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.html"><span>All about</span> Rex Lui</a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="index.html">Main</a></li>
							<li class="submenu">
								<a href="#">Menu</a>
								<ul>
									<!--<li><a href="left-sidebar.html">Left Sidebar</a></li>-->
									<!--<li><a href="right-sidebar.html">Right Sidebar</a></li>-->
									<!--<li><a href="no-sidebar.html">No Sidebar</a></li>-->
									<li><a href="contact.html">Contact</a></li>
									<!--<li class="submenu">
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Dolore Sed</a></li>
											<li><a href="#">Consequat</a></li>
											<li><a href="#">Lorem Magna</a></li>
											<li><a href="#">Sed Magna</a></li>
											<li><a href="#">Ipsum Nisl</a></li>
										</ul>
									</li>-->
								</ul>
							</li>
							<!--<li><a href="#" class="button primary">Sign Up</a></li>-->
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon solid fa-envelope"></span>
						<h2>Get In Touch</h2>
						<p>Use the form below to give /dev/null a piece of your mind.</p>
					</header>

					<!-- One -->
						<section class="wrapper style4 special container medium">

							<!-- Content -->
							<?php
     $name = $_POST['name'];
     $email = $_POST['email'];
     $subject = $_POST['subject'];
     $message = $_POST['message'];                                                   
     $from = 'From: kakolui@gmail.com';
     $to = 'kakolui@gmail.com';
     $email_subject = 'New Contact Form Submission!';
     
     $body = "Name: $name\nE-mail: $email\nSubject: $subject\n\nThe message is below:\n$message";;
?>
								<div class="content">
									<form method = "post" action = "#">
										<div class="row gtr-50">
											<div class="col-6 col-12-mobile">
												<input type="text" name="name" placeholder="Name" />
											</div>
											<div class="col-6 col-12-mobile">
												<input type="text" name="email" placeholder="Email" />
											</div>
											<div class="col-12">
												<input type="text" name="subject" placeholder="Subject" />
											</div>
											<div class="col-12">
												<textarea name="message" placeholder="Message" rows="7"></textarea>
											</div>
											<div class="col-12">
												<ul class="buttons">
													<li><input type="submit" name="submitbtn" class="special" value="Send Message" /></li>
												</ul>
											</div>
										</div>
									</form>
								</div>

						</section>

				</article>

			<!-- Footer -->
				<footer id="footer">

					<ul class="icons">
						<!--<li><a href="#" class="icon brands circle fa-twitter"><span class="label">Twitter</span></a></li>-->
						<!--<li><a href="#" class="icon brands circle fa-facebook-f"><span class="label">Facebook</span></a></li>-->
						<li><a href="mailto:kakolui@gmail.com" class="icon brands circle fa-google"><span class="label">Gmail</span></a></li>
						<li><a href="https://www.linkedin.com/in/rex-lui-a9a48572" class="icon brands circle fa-linkedin" target="_blank"><span class="label">Linkedin</span></a></li>
						<li><a href="https://github.com/rex-lui/" class="icon brands circle fa-github" target="_blank"><span class="label">Github</span></a></li>
						<li><a href="https://medium.com/@rex-lui/" class="icon brands circle fa-medium" target="_blank"><span class="label">Medium</span></a></li>
						
						<!--<li><a href="#" class="icon brands circle fa-dribbble"><span class="label">Dribbble</span></a></li>-->
					</ul>

					<!--<ul class="copyright">
						<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>-->

				</footer>

		</div>

<?php
    if (isset($_POST['submitbtn']))
    {
        if (mail($to, $email_subject, $body, $from))
        {
            echo "<font color=\"green\"><p>Your message has been sent!</p></font>";
        }
        else
        {
        echo "<font color=\"red\"><p>Your message sending has failed! Please manually email (your email)!</p></font>";
        }
    }
?>



		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
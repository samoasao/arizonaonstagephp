
<?php include_once('modules/header.php'); ?>
<body class="landing">
	<?php include_once('modules/nav.php'); ?>

	<div class = "jumbotron">
		<div class = "container">
			<h1 class="title"><?php echo $site_title; ?></h1>
			<p class="description">Bringing Broadway and Off-Broadway to Tucson for 15 years!</p>
			<a href = "./tickets">
				<button class="btn btn-lg mtb-25 tickets">
					Buy Tickets!
				</button>
			</a>
		</div>
	</div>



	<main>
		<div class="container">
			<div class="page-header current-header">
				<h1>Current Production</h1>
			</div>
			

			<div class="row">
				<div class="col-sm-8">
					<a href="./upcoming-shows/producers"><img src="img/producerswebfinal.jpeg" class="img-responsive img-rounded curent-show-img img-thumbnail mtb-25"/></a>

				</div>
				<div class="col-sm-4">
					<a href="./upcoming-shows/producers"><h2 class="show-title">The Producers</h2></a> 
					<h4 class="show-creators">Book by Mel Brooks and Thomas Meehan <br> Music and Lyrics by Mel Brooks</h4>
					<h4 class="show-dates">August 19-20, 26-27</h4>
					<h4 class="show-location">Berger Performing Arts Center</h4>

					<a href = "./tickets"><button class="btn btn-lg tickets mtb-10">Buy Tickets!</button></a>
					<p>A down-on-his-luck Broadway producer and his mild-mannered accountant come up with a scheme to make millions by producing what could be the most notorious flop in history. They find the worst play ever written (the gloriously offensive “Springtime For Hitler”), raise two million dollars, and plan to run away to Rio with the money! Only one thing goes awry: the show is a smash hit! Based on Mel Brooks’ classic cult comedy film...<a href="./upcoming-shows/producers">More Info</a></p>

				</div>
			</div>
			<div class="row mtb-25">
				<div class="col-sm-offset-2 col-sm-8">
	<div class="embed-responsive embed-responsive-16by9">
	  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/S0i7ogujr48" allowfullscreen></iframe>
	</div>
	</div>
	</div>
			<div class="mtb-25">
			</div>

		</div>

		<div class="about-section pb-10">
			<div class="container">
				<div class="page-header">
					<h1>About Us</h1>
				</div>
				<p>Arizona Onstage Productions is devoted to bringing theater and musical theater that is unique, thought provoking, and often unexpected. Founded by Kevin Johnson in 2003, Arizona Onstage Productions has been the recipient of 18 Arizona Daily Star MAC Awards for excellence in the theater. Our education outreach involves students and professionals from the Tucson community.</p>

				<p>
					Our production of Les Miserables (MAC WINNER - Best Musical, Best Director, Best Actor, Best Actress) played to over 3,000 people earning standing ovations and critical praise. <br>
					"Electrifying" - Kathy Allen, Arizona Daily Star <br> "The theatrical event of the year!"  -Sherilyn Forrester, Tucson Weekly 
				</p>

				<p>Please consider making a donation via PayPal of any amount to Arizona Onstage Productions</p>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="JUT8RCHGKYF9C">
					<input type="submit" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" value="Make a Contribution" class="btn btn-lg donate">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
				<p class="mtb-25">For Questions and More information:  <br>
					(520) 882-6574  <br>
					azonstage@yahoo.com</p>

				</div>
			</div>
		</div>

	</main>

<?php include_once($path_to_home . 'modules/footer.php'); ?>

<script>
	$("#home-link").addClass("active");
	$(".nav a").on("click", function(){
	   $("#home-link").removeClass("active");
	});
</script>

</body>
</html>


<?php include_once('assets/modules/header.php'); ?>
<body class="landing">
	<?php include_once('assets/modules/nav.php'); ?>

	<div class = "jumbotron">
		<div class = "container">
			<h1 class="title"><?php echo $site_title; ?></h1>
			<p class="description">Bringing Broadway and Off-Broadway to Tucson for 15 years!</p>
			<a href = "<?php echo $ticketUrl ?>" target="_blank"> 
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
				<div class="col-sm-12">
					<a href="./upcoming-shows/mamma_mia"><img src="assets/img/mammaweblogo1.jpg" class="img-responsive img-rounded curent-show-img img-thumbnail mtb-25"/></a>

				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<br>
				Over 60 million people worldwide have fallen in love with the characters, the story and the music that make Mamma Mia! the ultimate feel-good show!<br><br>
				</div>
			</div> 
			<div class="row">
				<div class="col-sm-4">
					
					<h4 class="show-creators">Music and Lyrics by Björn Ulvaeus and Benny Andersson <br> Book by Catherine Johnson</h4>
					<h4 class="show-dates">November 24 to December 1<br> (5 Performances)</h4>
					<h4 class="show-location">Berger Performing Arts Center</h4>

					<a href = "<?php echo $ticketUrl ?>" target="_blank"> 
					<button class="btn btn-lg tickets mtb-10">Tickets On Sale Soon!</button>
					</a>
					<br>
					<a class="btn btn-primary" href="./upcoming-shows/mamma_mia">More Info</a>
				</div>
				<div class="col-sm-8">
					<p>ABBA's hits tell the hilarious story of a young woman's search for her birth father. This sunny and funny tale unfolds on a Greek island paradise. On the eve of her wedding, a daughter's quest to discover the identity of her father brings three men from her mother's past back to the island they last visited 20 years ago.

The story-telling magic of ABBA's timeless songs propels this enchanting tale of love, laughter and friendship, creating an unforgettable show. A large cast, non-stop laughs and explosive dance numbers combine to make Mamma Mia! a guaranteed smash hit for any theatre. A mother. A daughter. Three possible dads. And a trip down the aisle you'll never forget! </p>

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

<?php include_once($path_to_home . 'assets/modules/footer.php'); ?>

<script>
	$(document).ready(function(){

	$("#home-link").addClass("active");

	});
</script>

</body>
</html>

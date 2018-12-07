
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
				<h1>Upcoming Productions</h1>
			</div>
			

			<div class="row">
				<div class="col-sm-4">
					<a href="#"><img src="assets/img/Fun-HomeWeb.jpg" class="img-responsive img-rounded curent-show-img text-center mtb-25"/></a>

				</div>
				<div class="col-sm-8">
				<h2>Fun Home</h2>
					<div class="row">

						<div class="col-sm-9">
						

						<h4 class="show-creators">Music by Jeanine Tesori Book and Lyrics by Lisa Kron <br> Based on the Graphic Novel by Alison Bechdel</h4>
						<h4 class="show-dates">April 18 to April 28 2019</h4>
						<!-- <h4 class="show-location">Berger Performing Arts Center</h4> -->
						</div>
						<!-- <div class="col-sm-3">
							<a href = "<?php echo $ticketUrl ?>" target="_blank"> 
							<button class="btn btn-lg tickets mtb-10">Buy Tickets!</button>
							</a>
							<br>
							<a class="btn btn-primary" href="./upcoming-shows/mamma_mia">More Info</a>
						</div> -->




					</div>

					<p>A five-time Tony Award-winner and one of the most significant 
					new musicals of the 21st century. Graphic novelist Alison dives deep 
					into her past to tell the story of her volatile, brilliant, one-of-a-kind 
					father, reliving her unique childhood at the family business — the Bechdel Funeral Home.
					 Fun Home is a refreshingly honest, cathartic, and wholly original musical about seeing your parents through grown-up eyes.
					</p>

					
				</div>
			</div>

			<hr>

			<div class="row">
				<div class="col-sm-4">
					<a href="#"><img src="assets/img/hedwigweb.jpg" class="img-responsive img-rounded curent-show-img text-center mtb-25"/></a>

				</div>
				<div class="col-sm-8">
				<h2>Hedwig and the Angry Inch</h2>
					<div class="row">

						<div class="col-sm-9">
						

						<h4 class="show-creators">Text by John Cameron Mitchell<br> Music and Lyrics by Stephen Trask</h4>
						<h4 class="show-dates">Summer 2019</h4>
						<!-- <h4 class="show-location">Berger Performing Arts Center</h4> -->
						</div>
						<!-- <div class="col-sm-3">
							<a href = "<?php echo $ticketUrl ?>" target="_blank"> 
							<button class="btn btn-lg tickets mtb-10">Buy Tickets!</button>
							</a>
							<br>
							<a class="btn btn-primary" href="./upcoming-shows/mamma_mia">More Info</a>
						</div> -->




					</div>

					<p>
						"HEDWIG AND THE ANGRY INCH brings theater alive with the pounding sounds of rock 'n' roll and the funny sad voicing of a painful past…it is also an adult, thought-provoking musical about the quest for individuality…the kind of Rocky Horror Picture Show-style event that may inspire a rabid cult following." —NY Times.
					</p>
					<p>
						"Sublimely trashy and surprisingly powerful." —LA Times.
					</p>
					<p>
						"In the whole long, sorry history of rock musicals, HEDWIG AND THE ANGRY INCH is the first one that truly rocks." —Rolling Stone.
					</p>
					<p>
						"The most exciting rock score written for the theater since, oh, ever!" —Time Magazine.
					</p>

					
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

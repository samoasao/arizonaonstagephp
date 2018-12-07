<?php $path_to_home = '../../'; ?>

<?php include_once($path_to_home . 'assets/modules/header.php');  ?>
<link rel="stylesheet" href="assets/css/mamma.css" type="text/css" media="screen" />
<body>
<?php include_once($path_to_home . 'assets/modules/nav.php'); ?>

	<div class = "show-page">
		<div class="container">
			<div class="row">
				<img src="assets/img/mammaweblogo1.jpg" class="img-responsive img-rounded center-block show-image-main mtb-25"  alt="Arizona Onstage Presents Mamma Mia!" />
			</div>
<div class="row text-center">
<h2>Only 250 seats per show, and they are selling FAST</h2></div>
			<div class="row">
				<div class = "col-sm-12 col-md-7">
					<img src="assets/img/mamma_trio.jpg" class="img-responsive img-rounded center-block show-image-main mtb-25"  alt="Arizona Onstage Presents The Producers" />
				</div>
				<div class = "col-sm-12 col-md-offset-1 col-md-4 mtb-25">
					<h1 class="show-title">Mamma Mia!</h1>
					<p class="show-creators">Music and Lyrics by Björn Ulvaeus and Benny Andersson <br> Book by Catherine Johnson<p>Artistic Director Kevin Johnson</p>
					<h3 class="show-dates">November 24, 25 & December 1, 2</h3>
					<h4 class="show-location">Berger Performing Arts Center<br>1200 W. Speedway</h4>
					<a href = <?php echo $ticketUrl ?> target="_blank"> 
					
					<button class="btn btn-lg mtb-10 tickets">
						 Buy Tickets!
					</button>
					</a> 
				</div>
			</div>


			<div class = "row mtb-25  mlr-5 about-row">

				<div class = "row">
					<div class = "col-sm-offset-0 col-sm-10">
						<h2>About The Show</h2>


						<h4>
							Directed and Choreographed by DEBBIE RUNGE<br>
							Music Director JEREMY VEGA<br>
						</h4>
					</div>
				</div>
				<div class = "row">
					<div class = "col-sm-offset-0 col-sm-12">
						<p class = "show-description">
							MAMMA MIA! features ABBA's hit songs, many perennial favorites such as <em>Waterloo</em>, <em>Dancing Queen</em>, <em>Chiquitita</em>, <em>The Name of the Game</em>, and <em>Mamma Mia</em>. They help to tell the story of a young woman's search for her birth father. On a sun-splashed Greek island, on the eve of her wedding, young Sophie wants to learn his mysterious identity. She has invited three men from her mother's past back to the island where they loved and left her twenty years ago.
						</p>
						<p>
							An energetic cast of 37 (11 principals, 26 ensemble members), infectious laughter and sublime harmonies, plus upbeat, buoyant dance numbers combine to make Mamma Mia! an unforgettable theatrical experience. A mother. A daughter. Three possible dads. Old friends. Townspeople. And a surprising and emotional trip down the aisle!
						</p>
						<p>
							The production opens November 24 and continues through December 2, at the Berger Center for the Performing Arts, 1200 West Speedway Blvd. 
						</p>
					</div>
				</div>
			</div>

			<div class = "row mtb-75">
				
				<div class = "col-sm-12 col-md-offset-2 col-md-8 show-cast">


					<div class = "show-featured-cast">
						<div class = "row text-center">
							<h3>Featuring</h3>
							<div class = col-xs-6>
								<p>LIZ CRACCHIOLO</p>
							</div>
							<div class = col-xs-6>
								<p>DANAE DORAME</p>
							</div>
						</div>
						<div class = "row text-center">
							<div class = col-xs-4>
								<p>KIT RUNGE</p>
							</div>
							<div class = col-xs-4>
								<p>DENNIS TAMBLYN</p>
							</div>
							<div class = col-xs-4>
								<p>JORDAN SIEBERT</p>
							</div>
						</div>
						<div class = "row text-center">
							<div class = col-xs-6>
								<p>STEPHANIE SIKES</p>
							</div>
							<div class = col-xs-6>
								<p>JESSICA ARMISTEAD</p>
							</div>
						</div>
						<div class = "row text-center">
							<div class = col-xs-4>
								<p>MATTHEW MILNE</p>
							</div>
							<div class = col-xs-4>
								<p>ERIC ARANDA</p>
							</div>
							<div class = col-xs-4>
								<p>DANNY QUINONES</p>
							</div>
						</div>
						<div class = "row text-center">
							<div class = col-xs-6>
								<p>KELLY COATES</p>
							</div>
							<div class = col-xs-6>
								<p>PIPER RUNGE</p>
							</div>
						</div>
					</div>
					<div class = "show-ensemble-cast mtb-25">
<p class = "Ensemble">
THE ENSEMBLE includes Erin Buckley, Emiliya Dale,  Randi Dorman, Chloe Elmer, Kasey Engels, Lexi George, Jennifer Hoover. Anabelle Mali. Sarah Martino. Monique Marie Mooty. Indigo Runge. Evyn Scott. Carrie Silverman, Morgan H. Smith, Elena Terry, Pat Timms, Kaylee Wilt. Lydia Zadareky, Jeffrey Baden, Ryan Dillon, Daniel Fapp, Thomas Gaston, Jacob Meeker-Hackett, Jeremy Meeker-Hackett
						</p>
			
							

<?php include_once($path_to_home . 'assets/modules/footer.php'); ?>

<script>
	$("#archive-link").addClass("active");
	
	$(".nav a").on("click", function(){
	   $("#archive-link").removeClass("active");
	});
</script>

</body>
</html>
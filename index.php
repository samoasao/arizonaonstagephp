<?php include_once('assets/modules/header.php'); ?>

<body class="landing">
    <?php include_once('assets/modules/nav.php'); ?>

    <div class="jumbotron">
        <div class="container">
            <h1 class="title"><?php echo $site_title; ?></h1>
            <p class="description">Bringing Broadway and Off-Broadway to Tucson for over 15 years!</p>
            <!---<a href = "<?php echo $ticketUrl ?>" target="_blank"> 
				<!---<button class="btn btn-lg mtb-25 tickets">
				Buy Tickets!
				</button>-->
            </a>
        </div>
    </div>

    <main>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
				<p class="alert alert-danger" style="font-size: 32px;">
                    We are working on getting new dates do to the ever changing COVID 19 regulations.  We want our cast, crew and audiences safe!

					</p>
                </div>



            </div>

            <div class="row mtb-25">

                <div class="col-md-10">

                    <img src="HedwigPostcard.png" class="img-responsive img-rounded">

                </div>

                <div class="col-md-2">
                    <p>
                        <br>

                    </p>
                    <!-- <p>NOTE: If you buy your tickets online, you avoid a $5 at the door fee! </p> 
                    <A HREF="https://www.brownpapertickets.com/event/4555719"><IMG
                            SRC="https://www.brownpapertickets.com/g/6/BPT_buy_tickets_large.png" WIDTH=182 HEIGHT=92
                            BORDER=0></A>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp -->
                </div>

            </div>

            <hr>

			

        </div>
        <div class="about-section pb-10">
            <div class="container">
                <div class="page-header">
                    <h1>About Us</h1>
                </div>
                <p>Arizona Onstage Productions is devoted to bringing theater and musical theater that is unique,
                    thought provoking, and often unexpected. Founded by Kevin Johnson in 2003, Arizona Onstage
                    Productions has been the recipient of 18 Arizona Daily Star MAC Awards for excellence in the
                    theater. Our education outreach involves students and professionals from the Tucson community.</p>

                <p>
                    Our production of Les Miserables (MAC WINNER - Best Musical, Best Director, Best Actor, Best
                    Actress) played to over 3,000 people earning standing ovations and critical praise. <br>
                    "Electrifying" - Kathy Allen, Arizona Daily Star <br> "The theatrical event of the year!" -Sherilyn
                    Forrester, Tucson Weekly
                </p>

                <p>Please consider making a donation via PayPal of any amount to Arizona Onstage Productions</p>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="JUT8RCHGKYF9C">
                    <input type="submit" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"
                        value="Make a Contribution" class="btn btn-lg donate">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1"
                        height="1">
                </form>
                <p class="mtb-25">For Questions and More information: <br>
                    (520) 882-6574 <br>
                    azonstage@yahoo.com</p>

            </div>
        </div>
        </div>

    </main>

    <?php include_once($path_to_home . 'assets/modules/footer.php'); ?>

    <script>
    $(document).ready(function() {

        $("#home-link").addClass("active");

    });
    </script>

</body>

</html>
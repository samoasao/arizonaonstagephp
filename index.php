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

            <div class="row mtb-25">

                <div class="col-md-10">

                    <img src="HedwigPostcard.jpg" class="img-responsive img-rounded">

                </div>

                <div class="col-md-2">
                    <p>
                        <br>

                        Tickets for all seven shows (March 13-28) are available at
                        Brown
                        Paper
                        Tickets
                    </p>
                    <p>NOTE: If you buy your tickets online, you avoid a $5 at the door fee! </p> <A
                        HREF="https://www.brownpapertickets.com/event/4487053"><IMG
                            SRC="https://www.brownpapertickets.com/g/6/BPT_buy_tickets_large.png" WIDTH=182 HEIGHT=92
                            BORDER=0></A>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                </div>

            </div>

			<hr>

            <div class="row my-4">
                <div class="col-md-6">


                    <IMG SRC="MrJ-OY.jpg" class="img-responsive img-rounded">

                    <br><br><br><br>

                </div>


                <div class="col-md-6">
                    <div class="row">

                        <br>
                        <p>
                            Shtick Concepts, working with Arizona Onstage Productions presents the Arizona premiere of
                            the
                            stage
                            comedy OY!, written by Rich Orloff and directed by Robert Ulsrud. Featuring Shari Goddard,
                            Stephen
                            Dunham, Michelle Holland, H. Bird Moody, Josef Kaye, Marjorie Kay and Craig Ludwiczak.
                            OY! is a collection of 10 short comedies, each illustrating the meaning of a Yiddish word
                            -- including the untold stories of Eve and Adam, Einstein's demanding mother, the
                            divorce trial of God and the human, the use of unkosher food as an aphrodisiac, and
                            three men in a steam room who communicate using only the word "oy."" Appealing to
                            audiences of all backgrounds, OY! is a tribute to the absurdity and comedy of being
                            human. A hit at over 50 theaters around the country - and Bulgaria!... go figure.</p>
                    </div>
                    <div class="row">

                        <div class="col-sm-6">
                            <p class="bold">
                                Performances:<br>
                                Friday 3/20 – 7:30<br>
                                Saturday 3/21 – 2pm<br>
                                Sunday 3/22 – 2pm<br>
                                <br>
                                Saturday 3/28 2pm<br>
                                Sunday 3/29 2pm<br>

                            </p>
                        </div>
                        <div class="col-sm-6">
						<br>
                            <A HREF="https://www.brownpapertickets.com/event/4546945"><IMG
                                    SRC="https://www.brownpapertickets.com/g/6/BPT_buy_tickets_large.png" WIDTH=182
                                    HEIGHT=92 BORDER=0></A>
                        </div>



                    </div>
                </div>

            </div>



        </div>

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
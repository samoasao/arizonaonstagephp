<?php include_once('assets/modules/header.php'); ?>

<body class="landing">
    <?php include_once('assets/modules/nav.php'); ?>

    <div class="jumbotron">
        <div class="container">
            <h1 class="title"><?php echo $site_title; ?></h1>
            <p class="description">Bringing Broadway and Off-Broadway to Tucson for over 15 years!</p>
            <a href = "<?php echo $ticketUrl ?>" target="_blank"> 
				<button class="btn btn-lg mtb-25 tickets">
				Buy Tickets!
				</button>
            </a>
        </div>
    </div>

    <main>

        <div class="container">
       

            <div class="row mtb-25">

                <div class="col-md-offset-3 col-md-6">

                    <img src="handToGod.jpeg" class="img-responsive img-rounded">

                </div>

            </div>
            <div class="row mtb-25">
                <div class="col-md-offset-1 col-md-10">
                    <img src="handToGodBack.jpeg" class="img-responsive img-rounded">
                    
                    <div class="text-center">
                        <a href = "<?php echo $ticketUrl ?>" target="_blank"> 
                            <button class="btn btn-lg mtb-25 tickets">
                            Buy Tickets!
                            </button>
                        </a>
                    </div>
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
                    (520) 834-1824 <br>
                    kjohnson.stage@gmail.com</p>

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
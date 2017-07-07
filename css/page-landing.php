<?php
/*
* Template Name: Landing Page
*/
?>
<?php get_header(); ?>

<?php include_once('modules/nav.php'); ?>

<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
<div class = "jumbotron">
	<div class = "container">
	<h1><?php bloginfo('name'); ?></h1>
	<p><?php bloginfo('description'); ?></p>
	<a href = "/tickets">
	<button class="btn btn-lg mtb-10 tickets">
		Buy Tickets!
	</button>
	</a>
	</div>
</div>



<main>
	<div class="container">
		<div class="page-header upcoming-header">
			<h1> Upcoming Productions</h1>
		</div>
		<?php
    // query for the about page
		$your_query = new WP_Query( 'pagename=upcoming-shows' );
    // "loop" through query (even though it's just one page) 
		while ( $your_query->have_posts() ) : $your_query->the_post();
		the_content();
		endwhile;
    // reset post data (important!)
		wp_reset_postdata();
		?>

		
	</div>

	<div class="about-section pb-10">
		<div class="container">
			<div class="page-header">
				<h1>About Us</h1>
			</div>
			<p>Kevin Johnson founded Arizona Onstage Productions in 2003. Arizona Onstage is Tucson's only professional theatre company devoted to musical theatre. We present music theatre that is different and challenging. We work with artistic and performing staff of The University of Arizona and other organizations. Our education outreach involves students and professionals from the Tucson community.</p>

			<p>Please consider making a donation via PayPal of any ammount to Arizona Onstage Productions</p>
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="JUT8RCHGKYF9C">
<input type="submit" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" value="Donate" class="btn btn-lg donate">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
			<p class="mtb-25">For Questions and More information:  <br>
			(520) 882-6574  <br>
			azonstage@yahoo.com</p>

		</div>
	</div>
</div>

</main>

<?php endwhile; else: ?>
    <p><?php _e('No posts were found. Sorry!'); ?></p>
<?php endif; ?>
<?php wp_footer(); ?>
<?php include_once('footer.php'); ?>

</body>
</html>

<?php $path_to_home = '../../'; ?>

<?php include_once($path_to_home . 'assets/modules/header.php');  ?>
<body>
<?php include_once($path_to_home . 'assets/modules/nav.php'); ?>

	<div class = "show-page">
		<div class="container">
    <h1 class="show-title">Mamma Mia</h1>
		</div>
	</div>



<?php include_once($path_to_home . 'assets/modules/footer.php'); ?>

<script>
	$("#upcoming-link").addClass("active");
	
	$(".nav a").on("click", function(){
	   $("#upcoming-link").removeClass("active");
	});
</script>

</body>
</html>
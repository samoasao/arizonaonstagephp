<?php $path_to_home = '../../'; ?>

<?php include_once($path_to_home . 'assets/modules/header.php');  ?>
<body>
<?php include_once($path_to_home . 'assets/modules/nav.php'); ?>

	<div class = "show-page">
		<div class="container">
		</div>
	</div>


<?php include_once($path_to_home . 'assets/modules/footer.php'); ?>

<script>
	$("#archive-link").addClass("active");
	
	$(".nav a").on("click", function(){
	   $("#archive-link").removeClass("active");
	});
</script>

</body>
</html>
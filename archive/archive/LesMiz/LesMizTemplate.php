<?php 







  $TITLE = "Arizona Onstage Productions - Les Miserables";







  $STYLESHEET ="<link href='archive/LesMiz/LesMizStyles.css' rel='stylesheet' />";







  $ACTIVE = "Archives";







  ob_start();







?>

  <div class="nav-container">

  <div class="row-fluid nav subnavbar">

    <a href="archive/LesMiz/"><div class="col-md-4 col-sm-4">Les Miserables</div></a>

    <a href="archive/LesMiz/cast.php"><div class="col-md-4 col-sm-4">Cast and Creatives</div></a>

    <a href="archive/LesMiz/tickets.php"><div class="col-md-4 col-sm-4">Tickets</div></a>

    <!--<a href="archive/LesMiz/donate.php"><div class="col-md-3 col-sm-3">Donations</div></a>-->

  </div>

  </div>

  <div id="LesMis-navbuffer" class="visible-xs"></div>

  

<?php echo $SUBCONTENT; ?>





    <?php















              $CONTENT = ob_get_clean();







              include "../../template.php";







            ?>




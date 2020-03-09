

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
   
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo $url; ?>/">Arizona Onstage</a>
    </div>

    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
   
      <ul class="nav navbar-nav navbar-right">
        <li id="home-link"><a href="<?php echo $url; ?>/">Home</a></li>
        <li id="upcoming-link" class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Upcoming Shows <span class="caret dropdown-toggle"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $url; ?>#">Oy!</a></li>
            <li><a href="<?php echo $url; ?>#">Hedwig and the Angry Inch</a></li>
          </ul>
        </li>
        <li id="tickets-link"><a href = <?php echo $ticketUrl ?> target="_blank">Buy Tickets</a></li>
        <li id="archive-link"><a href="<?php echo $url; ?>/archive/">Archives</a></li>
       
      </ul>
      
      
    </div>
  </div>
</nav>


<div class="mb-50"></div>

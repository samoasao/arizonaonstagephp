<?php 
  $TITLE = "Arizona Onstage Productions - The Story Of My Life";
  $ACTIVE = "Upcoming";
    $STYLESHEET ="<link href='archive/SOML/SOML.css' rel='stylesheet' />";
  ob_start();
?>


<div .class="jumbotron">
  <div class="container">

  <br>
 
  <img id="soml-img" class="img-responsive img-thumbnail" src="archive/SOML/images/somlshoot1.jpg" />
  <div></div>
<p>
<!--<span style="font-size:larger;">Music and Lyrics by Neil Bartram • Book by Brian Hill</span>-->
<br><p>
A tale of two childhood friends and how their friendship defined their lives. 
A richly melodic musical, "The Story of My Life" is a soaring tribute to the power of friendship and the people who change our lives forever.
</p>
<span style="font-size:larger;">Directed by Kevin Johnson<br>Music Direction by Bill Patterson</span>
<br><br><span style="font-size:larger">Featuring:</span><br> Jeremy Vega and Tyler Wright
<br><br>
Listen to music from the Original Broadway Cast recording!<br> <br>

Mrs. Remington<br>
<audio controls="controls" src="archive/SOML/MrsRemington.mp3">
        Your browser does not support the HTML5 audio element.
</audio>
<br>The Butterfly<br>
<audio controls="controls" src="archive/SOML/TheButterfly.mp3">
        Your browser does not support the HTML5 audio element.
</audio>
<br>Here's Where It Begins<br>
<audio controls="controls" src="archive/SOML/HeresWhereItBegins.mp3">
        Your browser does not support the HTML5 audio element.
</audio>
<br><br>
<span style="font-size:larger">Orchestra:</span>
<br>Piano: Bill Patterson
<br>Reeds: Julie Wypych
<br>Cello: Colin Mitchell
<br>
<br>
December 4 - 21st
<br>Temple of Music and Art - Cabaret Space<br>
<span style="font-size:smaller;">330 S Scott Ave<br> Tucson, AZ 85701</span>
<br>

</p>
<p id="tickets" style="padding-top: 130px; margin-top: -130px;"></p>
<p>
<h2>Tickets</h2>
$32.50 General Admission<br>
$25.00 Senior<br>
$20.00 Student/Active Artist/Military<br>

<br> </p>
Tickets are sold through Brown Paper Tickets:<br>
       <a class="btn btn-lg btn-default" role="button" href="http://www.brownpapertickets.com/event/883337" target="_blank">Purchase Tickets >></a><br/><br/>
  </p>
  <p>
  <h2>Showtimes</h2>
  
Thur - 12/4  8pm (Preview) <br>
Sat - 12/6  7:30pm <br>
Sun - 12/7  2:30pm <br> <br>

Fri - 12/12  7:30pm <br>
Sat - 12/13  6pm  <br>
Sun - 12/14  2:30pm <br><br>

Fri - 12/19  7:30pm <br>
Sat - 12/20  7:30pm <br>
Sun - 12/21  2:30pm <br>
  </p>
  <br> <br>
</div>
</div>

<?php
  $CONTENT = ob_get_clean();
  include "../../template.php";
?>
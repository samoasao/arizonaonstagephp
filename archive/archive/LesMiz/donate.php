<?php 



  ob_start();



?>



      <div id="title-div">
      <br />
      <p id="indiegogo" style="padding-top: 130px; margin-top: -130px;"></p>
      <h1>Les Miserables <br>Support Our Orchestra</h1>
      <p />
    </div>
       <iframe width="560" height="315" src="//www.youtube.com/embed/r7DQ9vjSaqA" frameborder="0" allowfullscreen></iframe>
       <br>Help us pay our fantastic professional orchestra by donating through <a href="http://igg.me/at/arizonaonstage" target="_blank">Indiegogo.com</a><br> You can also get some fabulous perks including a cameo in the show!
       Click <a href="http://igg.me/at/arizonaonstage" target="_blank">here</a> for more details.
       <br><br>
     </center>
     </div></div>
    <?php







              $SUBCONTENT = ob_get_clean();



              include "LesMizTemplate.php";



            ?>


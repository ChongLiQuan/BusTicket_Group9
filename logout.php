<?php
session_start();
unset($_SESSION);
session_destroy();

require 'header.php';
 ?>

 <br /><br /><br />
<center>
 <img src="images/logout.png" height="250" width="250">
 <h1>Good Bye! Thanks for using our online bus ticket website!</h1>
 <br />

 <p>We hope to see you soon !!</p>

 <br /><br /><br /><br /><br /><br /> <br /><br />
 <br /><br /><br /> <br /><br /><br /><br />
 <br /><br /><br /> <br /><br /><br /><br />
 <br /><br /><br /> <br /><br /><br /><br />


<?php require 'footer.php' ?>

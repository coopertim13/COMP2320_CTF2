<?php
        session_start();
        if($_SESSION['loggedin'] != true){ /* Redirects user to Login.php if not logged in */
                header("location:login.php");
                exit;
        }
?>
<?php
require('header.php');
?>
<link rel="stylesheet" href="assests/css/login.css">
  <body>
      <div class="wrapper">
	<center>
	<h1>Flag</h1>
	<br/>
	<h4>HTB{this_is_a_fake_flag} 
 	</center>
</div>
  <?php
        require 'footer.php';
  ?>
  </body>
</html>

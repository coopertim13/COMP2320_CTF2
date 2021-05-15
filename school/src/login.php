<?php
	session_start();
	if (isset($_POST['submit'])) {
               $conn = new mysqli("db", "root", "example", "hogwarts");
		if ( mysqli_connect_errno() ) {
                        exit('Failed to connect to MySQL: ' . mysqli_connect_error());
                }
                $email = $_POST["email"];
                $password = sha1($_POST["password"]);
                $stmt = $conn->prepare("SELECT email, password from staff where email= ?");
                $stmt->bind_param('s', $email);
                $stmt->execute();
                $stmt->store_result();
                if($stmt->num_rows == 1) {
                        $stmt->bind_result($id, $db_password);
                        $stmt->fetch();
                        if($password == $db_password) {
                                $_SESSION['loggedin'] = true;
                                header('Location: admin.php');
                        }
			else {
				header('Location: login.php?message=Login failed');
			}
                }
        }
?>
<?php
require('header.php');
?>
<link rel="stylesheet" href="assests/css/login.css">
  <body>
      <div class="wrapper">
    <form class="form-signin" action="login.php" method="post"> 
      <h2 class="form-signin-heading">STAFF LOGIN PORTAL</h2>
      <input type="email" class="form-control" name="email" placeholder="Email" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>     
      <button name="submit" class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
	<br/>
	<?php if(isset($_GET['message'])) { echo $_GET['message']; } ?>
	<style type="text/css">
          span {
                 color: #ffffff;
          }
      </style>
    </form>
  </div>
  <?php
	require 'footer.php';
  ?>
  </body>
</html>

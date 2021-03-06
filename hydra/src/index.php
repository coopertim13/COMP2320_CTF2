<?php
session_start();

// ***************************************** //
// **********	DECLARE VARIABLES  ********** //
// ***************************************** //

$username = 'admin';
$password = '12345678';

$random1 = 'secret_key1';
$random2 = 'secret_key2';

$hash = md5($random1.$pass.$random2); 

$self = $_SERVER['REQUEST_URI'];


// ************************************ //
// **********	USER LOGOUT  ********** //
// ************************************ //

if(isset($_GET['logout'])) {
	unset($_SESSION['login']);
}


// ******************************************* //
// **********	USER IS LOGGED IN	********** //
// ******************************************* //

if (isset($_SESSION['login']) && $_SESSION['login'] == true) {

	?>
			
		<p>Hello <?php echo $username; ?>, you have successfully logged in!</p>
		<a href="upload.php">Upload file</a>
		<a href="?logout=true">Logout?</a>
			
	<?php
}


// *********************************************** //
// **********	FORM HAS BEEN SUBMITTED	********** //
// *********************************************** //

else if (isset($_POST['submit'])) {

	if ($_POST['username'] == $username && $_POST['password'] == $password){
	
		//IF USERNAME AND PASSWORD ARE CORRECT SET THE LOG-IN SESSION
		$_SESSION["login"] = true;
		header("Location: $_SERVER[PHP_SELF]");
		
	} else {
		
		// DISPLAY FORM WITH ERROR
		display_login_form();
		echo '<p>Username or password is invalid</p>';
		
	}
}
	
	
// *********************************************** //
// **********	SHOW THE LOG-IN FORM	********** //
// *********************************************** //

else {
	display_login_form();
}


function display_login_form() { ?>

	<form action="<?php echo $self; ?>" method='post'>
		<label for="username">username</label>
		<input type="text" name="username" id="username">
		<label for="password">password</label>
		<input type="password" name="password" id="password">
		<input type="submit" name="submit" value="submit">
	</form>	

<?php } ?>

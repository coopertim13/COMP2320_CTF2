<?php
require 'header.php';
 ?>
 <link rel="stylesheet" href="../assests/css/remodal.css">
 <link rel="stylesheet" href="../assests/css/remodal-default-theme.css">
 <style type="text/css">
 	.a {
 		 padding-top: 150px;
 		 background-color: #eee;
 	}
 	a {
 		color: black;
 	}
 </style>

<div class="container a">
<h2 class="text-center">Student Search</h2>
<form class="text-center form-inline" method="POST" action="students.php">
      <input type="text" placeholder="Student Name" name="search">
      <button name="submit" type="submit">Search</button>
</form>
<br/><br/>
<table class="table table-bordered">
<tr>
	<th>Name</th>
	<th>Sex</th>
	<th>Teacher Name</th>
	<th>Best Subject</th>
	<th>Overall Grade</th>
</tr>
<?php
error_reporting(0);
ini_set('display_errors', 0);
if (isset($_POST['submit'])) {
	$conn = new mysqli("db", "root", "example", "hogwarts");
        if ( mysqli_connect_errno() ) {
                exit('Failed to connect to MySQL: ' . mysqli_connect_error());
        }
	$search = $_POST['search'];
	$search2 = str_replace('UNION', '', $search);
	$search3 = str_replace('union', '', $search2);
	$results = mysqli_query($conn, "SELECT * from students WHERE name like '{$search3}%'");
	while($row = mysqli_fetch_array($results)) {
	?>
	<tr>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['sex'];?></td>
		<td><?php echo $row['teacher_name'];?></td>
		<td><?php echo $row['best_subject'];?></td>
		<td><?php echo $row['grade'];?></td>
	</tr>
	<?php
	}
}
?>
</table>
<div class="remodal" data-remodal-id="modal">
  <button data-remodal-action="close" class="remodal-close"></button>
  <h1>Edit Student Marks</h1>
   <form>
  <div class="form-group">
    <label for="firstName">First Name</label>
    <input type="text" class="form-control" id="firstName" value="Humphrey">
  </div>
  <div class="form-group">
    <label for="lastName">Last Name</label>
    <input type="text" class="form-control" id="lastName" value="Mugambi">
  </div>
  <div class="form-group">
    <label for="reg">Adm No</label>
    <input type="text" class="form-control" id="reg" value="7193">
  </div>
    <div class="form-group">
    <label for="math">Maths</label>
    <input type="number" class="form-control" id="math" value="0">
  </div>
     <div class="form-group">
    <label for="Eng">English</label>
    <input type="number" class="form-control" id="Eng" value="0">
  </div>
     <div class="form-group">
    <label for="Kisw">Kiswahili</label>
    <input type="number" class="form-control" id="Kisw" value="0">
  </div>
     <div class="form-group">
    <label for="bio">biology</label>
    <input type="number" class="form-control" id="bio" value="0">
  </div>
     <div class="form-group">
    <label for="chem">chemistry</label>
    <input type="number" class="form-control" id="chem" value="0">
  </div>
  <button type="submit" class="btn btn-primary remodal-confirm" data-remodal-action="confirm">Submit</button>
</form>
  <br>
  <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
</div>
</div>
 <?php
    require 'footer.php';
     ?>
     <script src="assests/js/remodal.min.js"></script>
</body>
</html>
    

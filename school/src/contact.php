<?php
require 'header.php';
 ?>
    <style type="text/css">
      #success_message{ display: none;}
      .containerform {
         padding-top: 150px;
      }
    </style>
<div class="container containerform">

    <form class="well form-horizontal" action="#" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend class="text-center">Contact Us Today!</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" name="firstname">First Name</label>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" name="last_name">Last Name</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label" name="Email">E-Mail</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Phone </label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="(254) 727021846" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Address</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" placeholder="Address" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">City/Town</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="city" placeholder="city" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text area -->

<div class="form-group">
  <label class="col-md-4 control-label">Your Message</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        	<textarea class="form-control" name="comment" placeholder="Your Message"></textarea>
  </div>
  </div>
</div>

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4 text-center">
    <button type="submit" class="btn btn-warning" type="get">Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
    <style type="text/css">
        footer {
            background-color: ;
        }
    </style>

    </div>
    <?php
    require 'footer.php';
     ?>

    <script type="text/javascript" src="../assests/js/contact.js"></script>
  </body>
  </html>

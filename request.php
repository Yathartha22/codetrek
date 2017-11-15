<?php include('header.php'); ?>

<div class="container">

	<h1 class="text-center">
		Request an invite
	</h1>

	<div class="row">
	<div class="col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6 well">
<form action="thankyou.php" method="POST">
    <input type="text" class="form-control" name="name" placeholder="Name"><br>
    <input type="email" class="form-control" name="email" placeholder="Enter email"><br>
    <input type="number" class="form-control" name="phone_no" placeholder="Phone number"><br>
    <input type="text" class="form-control" name="city" placeholder="City"><br>
    Gender :
    <br>
    <input type="radio"  name="gender" value="M"> M
    <input type="radio"  name="gender" value="F"> F<br><br>
  <input type="submit" class="btn btn-primary"></a>
    </div>
</form>
	</div>
</div>



<?php include('footer.php'); ?>
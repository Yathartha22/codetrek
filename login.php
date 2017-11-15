<?php include('header.php'); ?>

<div class="container">

	<h1 class="text-center">
		Login Page
	</h1>

	<div class="row">
		<div class="col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6 well">
<form action="loginauth.php" method="POST">
  <div class="form-group">
    <input type="text" class="form-control" name="username" placeholder="Username">
    <br>
    <input type="password" class="form-control" name="userpass" placeholder="Password">
  </div>
  <input type="submit" class="btn btn-primary"></input></a>
</form>

		</div>
	</div>
</div>



<?php include('footer.php'); ?>
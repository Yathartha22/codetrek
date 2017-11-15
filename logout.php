<?php session_start(); ?>
<?php include('header.php'); ?>
<div class="container">
<?php
	echo "<h2>Succesfully logged out</h2>";
	?>
	<a href="login.php">Go to login Page</a>
	<?php
	session_unset();
	session_destroy();
?>
</div>	
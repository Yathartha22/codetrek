<?php session_start(); ?>

<?php include('header.php'); ?>
<div class="container">

	<?php

	function printErrorMessage(){
			echo "<h2>Invalid Credentials!!!<h2>";
	?>
	<a href="login.php">Go to login Page</a>
	<?php		
	}



	$servername = "localhost";
	$mysql_username = "root";
	$mysql_password = "root";
	$db_name = "soriee";
	// Create connection
	$conn = new mysqli($servername, $mysql_username, $mysql_password, $db_name);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT * FROM users";
	$result = $conn->query($sql);

	if ($result->num_rows <=0){
		printErrorMessage();
		die();
	}

	$user_flag=0;

	$username = $_POST['username'];
	$userpass = $_POST['userpass'];
	$_SESSION['is_user_logged_in'] = false;

	while($row = $result->fetch_assoc()) {
     if($username== $row["username"] && $userpass==$row["password"]){
     	$user_flag=1;
     	$_SESSION['is_user_logged_in'] = true;
		header("Location: http://soriee.dev/dashboard.php");
	}
    }
    if($user_flag==0){
    	printErrorMessage();
    }
    $conn->close();

?>
</div>

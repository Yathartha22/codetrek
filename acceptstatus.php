<?php session_start(); ?>
<?php
  if (! isset($_SESSION['is_user_logged_in']) || $_SESSION['is_user_logged_in'] == false){
    echo "<h1>Session Expired</h1>";
    ?>
    <a href="login.php">Go to login Page</a>
    <?php
    die();
  }
?>
<?php include('headerhost.php'); ?>
<div class="container">
<?php
	
	$value = $_POST['sub'];

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
	$sql = "UPDATE allrequests SET status= '1' WHERE email= '$value' ";
	if ($conn->query($sql) === TRUE) {
	header("Location: http://soriee.dev/dashboard.php");
	} else {
	echo "Error updating record: " . $conn->error;
	}

$conn->close();

?>
</div>

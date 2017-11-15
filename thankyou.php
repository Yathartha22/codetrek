<?php include('header.php'); ?>

<?php

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

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone_no = $_POST['phone_no'];
	$city = $_POST['city'];
	$gender = $_POST['gender'];

	$quer = "SELECT * FROM allrequests WHERE email = '$email' ";
	$res = $conn->query($quer);
	if( $res-> num_rows > 0){
		echo "<h1>This user has already requested.</h1>";
		die();
	}

	$sql =  "INSERT INTO allrequests (name, email, phone_no, city, gender) VALUES ('$name', '$email', '$phone_no', '$city', 'gender') ";

	if ($conn->query($sql) === TRUE) {
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	    die();
}
?>

<div class="container">

	<h3 class="text-center"><br><br><br>
		 Thank you! Your request has been successfully saved. <br>
     The host will review and update you on your request.
	</h3>


</div>
<?php include('footer.php'); ?>
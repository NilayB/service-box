<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "help";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$address = $_POST["address"];
$zip= $_POST["zip"];
$date= $_POST["date"];
$time= $_POST["time"];
$problem= $_POST["problem"];
$description= $_POST["description"];
$sql = "INSERT INTO painter (name,phone,email,address,zip,date,time,problem,description)
VALUES ( '$name','$phone','$email','$address','$zip','$date','$time','$problem','$description')";

	if (mysqli_query($conn, $sql)):
		$message = 'Succesfully registered..';
	else:
		$message = 'Sorry there is an issue in registering..';
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	endif;
mysqli_close($conn);
header('Location: index.html');
?>

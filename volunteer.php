<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "help";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$name = $_POST["firstname"];
$lname = $_POST["lastname"];
$dob = $_POST["dob"];
$contact = $_POST["contact"];
$otherno= $_POST["othno"];
$mail= $_POST["mailid"];
$curr_address = $_POST["curradd"];
$pin= $_POST["pin"];
$city= $_POST["city"];
$state= $_POST["state"];
$per_address= $_POST["peradd"];
$ppin= $_POST["ppin"];
$pcity= $_POST["pcity"];
$pstate= $_POST["pstate"];
$sql = "INSERT INTO volunteer (firstname,lastname,dob,contact,othno,mailid,curradd,pin,city,state,peradd,ppin,pcity,pstate)
VALUES ( '$name','$lname','$dob','$contact','$otherno','$mail','$curr_address','$pin','$city','$state','$per_address','$ppin','$pcity','$pstate')";

	if (mysqli_query($conn, $sql)):
		$message = 'Succesfully registered..';
	else:
		$message = 'Sorry there is an issue in registering..';
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	endif;
mysqli_close($conn);
header('Location: index.html');
?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "help";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
echo "<center>This is list of people requested for service. </center>";
echo "<hr></hr>";
echo "<p>Electrician</p>";
$sql = "SELECT name,phone,email,address,zip,date,time,problem,description FROM electrician";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   echo "<table cellspacing=30 ><tr><th>Name</th><th>Phone</th><th>Email</th><th>Address</th><th>Zip</th><th>Date</th><th>Time</th><th>Problem</th><th>Description</th></tr>";
   // output data of each row
   while($row = $result->fetch_assoc()) {
       echo "<tr><td>".$row["name"]."</td><td>".$row["phone"]."</td><td>".$row["email"]."</td><td>".$row["address"]."</td><td>".$row["zip"]."</td><td>".$row["date"]."</td><td>".$row["time"]."</td><td>".$row["problem"]."</td><td>".$row["description"]."</td></tr>";
   }
   echo "</table>";
} 
echo "<hr></hr>";
echo "<p>Plumber</p>";
$sql = "SELECT name,phone,email,address,zip,date,time,problem,description FROM plumber";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   echo "<table cellspacing=30 ><tr><th>Name</th><th>Phone</th><th>Email</th><th>Address</th><th>Zip</th><th>Date</th><th>Time</th><th>Problem</th><th>Description</th></tr>";
   // output data of each row
   while($row = $result->fetch_assoc()) {
       echo "<tr><td>".$row["name"]."</td><td>".$row["phone"]."</td><td>".$row["email"]."</td><td>".$row["address"]."</td><td>".$row["zip"]."</td><td>".$row["date"]."</td><td>".$row["time"]."</td><td>".$row["problem"]."</td><td>".$row["description"]."</td></tr>";
   }
   echo "</table>";
} 
echo "<hr></hr>";
echo "<p>Mechanic</p>";
$sql = "SELECT name,phone,email,address,zip,date,time,problem,description FROM mechanic";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   echo "<table cellspacing=30 ><tr><th>Name</th><th>Phone</th><th>Email</th><th>Address</th><th>Zip</th><th>Date</th><th>Time</th><th>Problem</th><th>Description</th></tr>";
   // output data of each row
   while($row = $result->fetch_assoc()) {
       echo "<tr><td>".$row["name"]."</td><td>".$row["phone"]."</td><td>".$row["email"]."</td><td>".$row["address"]."</td><td>".$row["zip"]."</td><td>".$row["date"]."</td><td>".$row["time"]."</td><td>".$row["problem"]."</td><td>".$row["description"]."</td></tr>";
   }
   echo "</table>";
} 
echo "<hr></hr>";
echo "<p>carpenter</p>";
$sql = "SELECT name,phone,email,address,zip,date,time,problem,description FROM carpenter";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   echo "<table cellspacing=30 ><tr><th>Name</th><th>Phone</th><th>Email</th><th>Address</th><th>Zip</th><th>Date</th><th>Time</th><th>Problem</th><th>Description</th></tr>";
   // output data of each row
   while($row = $result->fetch_assoc()) {
       echo "<tr><td>".$row["name"]."</td><td>".$row["phone"]."</td><td>".$row["email"]."</td><td>".$row["address"]."</td><td>".$row["zip"]."</td><td>".$row["date"]."</td><td>".$row["time"]."</td><td>".$row["problem"]."</td><td>".$row["description"]."</td></tr>";
   }
   echo "</table>";
} 
echo "<hr></hr>";
echo "<p>Painter</p>";
$sql = "SELECT name,phone,email,address,zip,date,time,problem,description FROM painter";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   echo "<table cellspacing=30 ><tr><th>Name</th><th>Phone</th><th>Email</th><th>Address</th><th>Zip</th><th>Date</th><th>Time</th><th>Problem</th><th>Description</th></tr>";
   // output data of each row
   while($row = $result->fetch_assoc()) {
       echo "<tr><td>".$row["name"]."</td><td>".$row["phone"]."</td><td>".$row["email"]."</td><td>".$row["address"]."</td><td>".$row["zip"]."</td><td>".$row["date"]."</td><td>".$row["time"]."</td><td>".$row["problem"]."</td><td>".$row["description"]."</td></tr>";
   }
   echo "</table>";
} 
echo "<hr></hr>";
echo "<p>Technician</p>";
$sql = "SELECT name,phone,email,address,zip,date,time,problem,description FROM technician";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   echo "<table cellspacing=30 ><tr><th>Name</th><th>Phone</th><th>Email</th><th>Address</th><th>Zip</th><th>Date</th><th>Time</th><th>Problem</th><th>Description</th></tr>";
   // output data of each row
   while($row = $result->fetch_assoc()) {
       echo "<tr><td>".$row["name"]."</td><td>".$row["phone"]."</td><td>".$row["email"]."</td><td>".$row["address"]."</td><td>".$row["zip"]."</td><td>".$row["date"]."</td><td>".$row["time"]."</td><td>".$row["problem"]."</td><td>".$row["description"]."</td></tr>";
   }
   echo "</table>";
} 
echo "<hr></hr>";
echo "<p>volunteer</p>";
$sql = "SELECT firstname,lastname,dob,contact,othno,mailid,curradd,city,pin,state,peradd,pcity,ppin,pstate FROM volunteer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   echo "<table cellspacing=30 ><tr><th>Name</th><th>Phone</th><th>Email</th><th>Address</th><th>Zip</th><th>Date</th><th>Time</th><th>Problem</th><th>Description</th></tr>";
   // output data of each row
   while($row = $result->fetch_assoc()) {
       echo "<tr><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["dob"]."</td><td>".$row["contact"]."</td><td>".$row["othno"]."</td><td>".$row["mailid"]."</td><td>".$row["curradd"]."</td><td>".$row["city"]."</td><td>".$row["pin"]."</td><td>".$row["state"]."</td><td>".$row["peradd"]."</td><td>".$row["pcity"]."</td><td>".$row["ppin"]."</td><td>".$row["pstate"]."</td></tr>";
   }
   echo "</table>";
} 
$conn->close();
?>
<html>
<head>
<style>
table {border:solid red 2px;}
p {font-size:30; font-weight:bold;text-transform:capitalize;position:relative;left:20px;color:#FFEB3B;}
body {background-color:black;color:#F44336;font-size:35;}
</style>
</head>
</html>

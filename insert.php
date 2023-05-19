<!DOCTYPE html>
<html>
<head>
<title>Create a new booking</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/summitdemo/summitdemo.css">

</head>
<body>
<br>
<br>
<center>
<div>
<H1>Red Hat summit food booking portal</H1>
The only portal for booking where we will eat.
</center>
</div>
<br>
<div>
<div align="center">
<h2>Enter Booking</h2>
<div>
<form name="insert" action="insert.php" method="POST" >
<div>Booking name:</div><div><input type="text" name="booking_name" /></div>
<div>Booking description:</div><div><input type="text" name="booking_description" /></div>
<div><input type="submit" /></div>
</form>
</div>
</div>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
include 'config.php';
$dbconn = pg_connect("host=$dbhost dbname=$dbdatabase user=$dbuser password=$dbpass")
    or die('Could not connect: ' . pg_last_error());
$query = "INSERT INTO bookings (name,description) VALUES ('$_POST[booking_name]','$_POST[booking_description]')";
$result = pg_query($query); 
}
?>
<center>
<a href="/summitdemo/index.php">Home</a>
</center>
<html>

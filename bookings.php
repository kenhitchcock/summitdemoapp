<html>
<title>
List of bookings
</title>
<head>
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
<h2>Current Bookings</h2>
<div>



<?php
// Connecting, selecting database
include 'config.php';
$dbconn = pg_connect("host=$dbhost dbname=$dbdatabase user=$dbuser password=$dbpass")
    or die('Could not connect: ' . pg_last_error());

echo pg_last_error();
// Performing SQL query
$query = 'SELECT * FROM bookings';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

// Printing results in HTML
echo "<div class='table'>\n";
echo "\t<div class='tr'>\n";
	echo "\t\t<div class='td'><b>Booking Number</b></div>\n";
	echo "\t\t<div class='td'><b>Booking Name</b></div>\n";
	echo "\t\t<div class='td'><b>Booking Description</b></div>\n";
	echo "</div>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<div class='tr'>\n";
    foreach ($line as $col_value) {
        echo "\t\t<div class='td'>$col_value</div>\n";
    }
    echo "\t</div>\n";
}
echo "</div>\n";
// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);
?>
<center>
<a href="/summitdemo/index.php">Home</a>
</center>
</body>
</html>

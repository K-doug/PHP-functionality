<?php define('ISITSAFETORUN', TRUE); // flag to be tested by all required pages before they run. ?>
<!doctype html>
<head>
  <title>Connect to Database</title>
</head>
<body>
<h1>tma02_connect-to-database.php</h1> 
<?php 
echo"<p>This line confirms that PHP is running on this server</p>";
?>
<h2>Now connect to the database server</h2>
<p> This uses the file tma02_mydatabase.php which you need to have added your credentials to.</p>
<p> These details are on the welcome page of your server</p>
<?php
require "tma02_mydatabase.php";
//connect to this host
$dbhandle = mysqli_connect( $hostname, $username, $password ) or die( "Failed - Unable to connect to MariaDB - check username and password in mydatabase.php. These details are on the welcome page of your server");
echo "<p>Success - Connected to MariaDB</p>"
?>
<h2>Now select the specific database</h2>
<?php
//select a database to work with
$selected = mysqli_select_db(  $dbhandle, $mydatabase ) or die("Failed - Unable to connect to " . $mydatabase . ".  Check database name in mydatabase.php" );
echo "<p>Success - Connected to MariaDB database " . $mydatabase . "</p>"
?>
</body>
</html>



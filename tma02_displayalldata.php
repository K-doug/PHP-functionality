<?PHP
if(!defined('ISITSAFETORUN')) {
// This provides protection against file being called directly - if it is, ISITSAFETORUN will not be defined
   die('This file does no useful work alone'); // and so this warning message will be issued
}
?>
<p> </p>
<label for="sectiond" class="showhide">Show Hide: Data in Table</label>
<input type="checkbox" id="sectiond" value="button" style="display:none;"/>
<section id="dsection">
<h3>The data from the database table</h3>
<table>
<?php
$sql = "SELECT id, firstname, lastname , email, bookingref FROM $mytable"; // no user input
$result = mysqli_query($dbhandle, $sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>id: " . $row["id"]. "</td><td>Firstname: " . htmlspecialchars($row["firstname"]). "</td><td>Lastname: " . htmlspecialchars($row["lastname"]). "</td><td> email= " . htmlspecialchars($row["email"]). "</td><td> Booking Reference= " . htmlspecialchars($row["bookingref"]). "</td></tr>";
    }
} else {
    echo "0 results";
}

?>
</table>
</section>



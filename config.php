<?php
define('DBSERVER', '127.0.0.1'); // Database server
define('DBUSERNAME', 'root'); // Database username
define('DBPASSWORD', 'Carrottops0'); // Database password
define('DBNAME', 'u891621434_qd'); // Database name
 
/* connect to MySQL database */
$conn = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD);
 
// Check db connection
if($conn === false){
    die("Error: connection error. " . mysqli_connect_error());
}
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "simple_crud";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>



<?php
//$sql=CREATE TABLE `notes` (`id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(200) NOT NULL , `content` TEXT NOT NULL , `tstamp` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`));

?>
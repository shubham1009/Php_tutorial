<!DOCTYPE html>
<html>
<head>
    <title>Page 1</title>
</head>
<body>
<H1>H</H1>
<?php
// Start the session
session_start();

// Set a session variable
$_SESSION['global_variable'] = "Hello from session!";
?>
<?php
// Set a global variable using $GLOBALS
$a= "Hello from GLOBALS!";
$GLOBALS['a'] ;
echo "global variable  is set successfully".$a;

?>



<a href="globals2.php" target="_blank">Go to Page 2</a>  

</body>
</html>

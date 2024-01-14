<!DOCTYPE html>
<html>
<head>
    <title>Page 2</title>
</head>
<body>
<?php
// Start the session
session_start();

// Access the session variable set in page1.php
if (isset($_SESSION['global_variable'])) {
    echo "<p>" . $_SESSION['global_variable'] . "</p>";
} else {
    echo "<p>Session variable not set.</p>";
}
?>  
<h1>hello</h1>
<?php
// Access the global variable set in page1.php using $GLOBALS
if (isset($GLOBALS['a']))   
{
    echo "<p>" . $GLOBALS['a'] . "</p>";
}
else {
    echo "<p>Global variable not set.</p>".$GLOBALS['a'];
}
?>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form</title>
</head>
<body>



<form action="add.php" method="post">
    Enter Number 1: 
    <input type="number"  name="number1" required>

    <br>

    Enter Number 2: 
    <input type="number"   name="number2" required>

    <br>

    <input type="submit" value="Add Numbers">
</form>

</body>
</html>


<?php

if(isset($_POST['number1']) && (isset($_POST['number2'])) )
{
// Retrieve input from the form
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];


// Add the numbers
$sum = $number1 + $number2;

// Display the result
echo "The sum of $number1 and $number2 is: $sum";
}
else{
    echo "first"," enter numbers";
}
?>

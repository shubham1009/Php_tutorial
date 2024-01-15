<!DOCTYPE html>
<html>
<head>
    <title>User Input Validation</title>
</head>
<body>

<?php
$name = $email = $phone = "";
$nameErr = $emailErr = $phoneErr = "";

// $inputString = '<script>alert("Hello, world!");</script>';
// $encodedString = htmlspecialchars($inputString);

// echo $encodedString;
// echo $inputString;
echo "sds";
echo "<br>";
echo var_dump(FILTER_VALIDATE_EMAIL);
echo "<br>";
echo FILTER_VALIDATE_URL;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate Name
   # $name = test_input($_POST["name"]);
    $name =  ($_POST["name"]);
    if (empty($name)) {
        $nameErr = "Name is required";
    }else{
        echo $name;
    }

    // Validate Email
    $email = test_input($_POST["email"]);
    if (empty($email)) {
        $emailErr = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }

    // Validate Phone
    $phone = test_input($_POST["phone"]);
    if (empty($phone)) {
        $phoneErr = "Phone number is required";
    } elseif (!preg_match("/^[0-9]{10}$/", $phone))//preg_match is a PHP function used for performing regular expression matching.
     {
        $phoneErr = "Invalid phone number format";
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data); //stripslashes is used to remove the backslashes before single quotes.
    $data = htmlspecialchars($data); //The htmlspecialchars function in PHP is used to convert special characters to their corresponding HTML entities. 
    return $data;
}
?>

<h2>User Input Validation</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name" value="<?php echo $name; ?>">
    <span style="color: red;"><?php echo $nameErr; ?></span>
    <br><br>

    Email: <input type="text" name="email" value="<?php echo $email; ?>">
    <span style="color: red;"><?php echo $emailErr; ?></span>
    <br><br>

    Phone: <input type="text" name="phone" value="<?php echo $phone; ?>">
    <span style="color: red;"><?php echo $phoneErr; ?></span>
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>

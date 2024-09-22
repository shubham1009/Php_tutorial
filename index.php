<?php
echo "Current version is PHP " . phpversion();
 $a="9616371009";

 if(strlen($a)==10)
 {
    echo "yes it is 10 digit<br>";

    if(ctype_digit($a)){
        echo "valid phone number <br>";
    }else
    {
        echo "not a valid number <br>";
    }
 
 }
 else{
    echo "no <br>";
 }

 $email="someone@gmail.com";
// Check if the character is present in the string
if (strpos($email,"z")=== false) {
    echo "The character '$email' is not present in the string.\n";
} else {
    echo "The character '$email' is present in the string.\n";
}

/**The use of !== is important in this context to perform a strict comparison. In PHP, the strpos() function returns false when the substring is not found in the string.

If you were to use != for comparison, it might lead to unexpected results because false could be loosely equal to 0 or an empty string in PHP. Using !== ensures that not only the values are equal but also that their types are identical. */
?>
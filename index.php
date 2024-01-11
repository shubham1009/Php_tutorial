<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $name = "Shubham";
    ?>

    <p>hello this is
        <?php echo $name; ?>
    </p>

    <h2>
        <?php
        for ($i = 0; $i < 5; $i++) {
            echo add(2, $i) . "<br>";
        }
        ?>
    </h2>

    <?php

    function add($a, $b)
    {
        return $a + $b;
    }

    print "Jai shree Ram <br> hello world";
    echo "happy new year";

    #first comment
    //second way to comment
    /* multi line comment
    here we can 
    comment more than 
    one line */

    print "<h2>PHP is Fun!</h2><br>";
    echo "<h2>PHP is  Fun!</h2>\n\n", "sd", "\n";

    echo "<br>", "This ", "string ", "was ", "made ", "with multiple parameters.";
    //print "This ", "string ", "was ", "made ", "with multiple parameters.";
    echo phpversion();

    <?php
 $a=45;
  echo ("some value second value "),("$a");
 
 ?>
  <?php
echo "PHP Version: " . phpversion();
?>


    /* While print and echo both serve similar purposes, echo is more commonly used in PHP, and the two can often be used interchangeably. However, it's worth noting that echo is marginally faster and generally more preferred in PHP code. */
    ?>
</body>

</html>
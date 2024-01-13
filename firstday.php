<?php  

$colors = array("red", "green", "blue", "yellow");

var_dump($colors);

foreach ($colors as &$x) {
  if ($x == "blue") $x = "pink";
  echo &$x."";
}

var_dump($colors);


    // $name = "hello everybody";        //Global Variable  
    // function global_var()  
    // {  
    //     global $name;  
    //     echo "Variable inside the function: ". $name;  
    //     echo "</br>";  
    // }  
    // global_var();  
    // echo "Variable outside the function: ". $name;  
?>  

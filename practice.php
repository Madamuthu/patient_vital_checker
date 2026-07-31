

<?php

//Higher Order Function Example

function calculate($a, $b, $operation)
{
    return $operation($a, $b);
}

echo calculate(10, 5, function($x, $y){
    return $x - $y;
});

echo "<br><br>";



//Arrow Function Example

$cube = fn($n) => $n * $n * $n;

echo $cube(3);

echo "<br><br>";


//Recursive Function Example

function countdown($n)
{
    if($n==0)
    {
        return;
    }

    echo $n."<br>";
    countdown($n-1);
}

countdown(5);

echo "<br><br>";


//Var_dump  in Array Example


$colors = ["Red", "Green", "Blue"];

var_dump($colors);

echo "<br><br>";

// Print Example in php


$age = 22;

print "Age : " . $age;



?>
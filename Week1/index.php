<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
</head>
<body>
    <?php

    // Displaying using echo and print
    echo "This is me trying to see if it works<br />";
    echo "Hello, World!<br />";
    print "Welcome to PHP<br />";
    echo '<h1>Hello, World HTML tag version</h1>';

    // Variables
    $magac = "YUSUF MOHAMED";
    echo "Welcome, $magac <br />";

    // Constant variable
    define("CAASIMADA", "JOWHAR");
    echo "Caasimada: " . CAASIMADA . "<br />";

    
    $age = 20;
    echo "Age: ", $age, "<br />";

    // If, elseif and else
    if ($age > 25) {
        echo "Waa lagu qaabili karaa.<br />";
    } elseif ($age > 20) {
        echo "soo barbaar.<br />";
    } else {
        echo "aad ayaa u yartahay.<br />";
    }

    // Ternary operator
    $message = ($age >= 18) ? "Qof weyn." : "Qof yar.";
    echo "Natiijada: " . $message . "<br />";

    // Switch statement
    $Dhibco = 70;

    switch (true) {
        case ($Dhibco >= 90 && $Dhibco <= 100):
            echo "A+.<br />";
            break;

        case ($Dhibco >= 80 && $Dhibco < 90):
            echo "B+.<br />";
            break;

        case ($Dhibco >= 70 && $Dhibco < 80):
            echo "C+.<br />";
            break;

        case ($Dhibco >= 60 && $Dhibco < 70):
            echo "D+.<br />";
            break;

        default:
            echo "Ma gudbin.<br />";
    }

    ?>
</body>
</html>

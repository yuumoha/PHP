<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

echo "All elements:<br>";

foreach ($numbers as $number) {
    echo $number . " ";
}

echo "<br><br>";

$total = 0;
$evenTotal = 0;
$oddTotal = 0;

foreach ($numbers as $number) {
    $total += $number;
    if ($number % 2 == 0) {
        $evenTotal += $number;
    } else {
        $oddTotal += $number;
    }
}


echo "Total of all elements: " . $total . "<br>";
echo "Total of even elements: " . $evenTotal . "<br>";
echo "Total of odd elements: " . $oddTotal . "<br><br>";

$minimum = $numbers[0];
$maximum = $numbers[0];

for ($i = 1; $i < 12; $i++) {
    if ($numbers[$i] < $minimum) {
        $minimum = $numbers[$i];
    }

    if ($numbers[$i] > $maximum) {
        $maximum = $numbers[$i];
    }
}

echo "Minimum element: " . $minimum . "<br>";
echo "Minimum positions: ";

for ($i = 0; $i < 12; $i++) {
    if ($numbers[$i] == $minimum) {
        echo $i . " ";
    }
}

echo "<br>";

echo "Maximum element: " . $maximum . "<br>";
echo "Maximum positions: ";

for ($i = 0; $i < 12; $i++) {
    if ($numbers[$i] == $maximum) {
        echo $i . " ";
    }
}
?>

</body>
</html>
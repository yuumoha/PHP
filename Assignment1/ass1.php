<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
$a = 15;
$b = 8;
$c = 22;

$greatest = $a;
$smallest = $a;

if ($b > $greatest) {
    $greatest = $b;
}

if ($c > $greatest) {
    $greatest = $c;
}

if ($b < $smallest) {
    $smallest = $b;
}

if ($c < $smallest) {
    $smallest = $c;
}
echo "A is ", $a;
echo "B is ", $b;
echo "C is ", $c;
echo "Greatest: " . $greatest . "<br>";
echo "Smallest: " . $smallest;

    ?>
</body>
</html>
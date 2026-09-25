<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
       // ass1.2
$number = 15;

if ($number % 3 == 0 && $number % 5 == 0) {
    echo "numberkaan wuu u qeybsamaa 3 iyo 5";
}
elseif ($number % 3 == 0) {
    echo "numberkaan wuxuu u qeybsamaa kaliya 3.";
}
elseif ($number % 5 == 0) {
    echo "numberkaan wuxuu u qeybsamaa kaliya 5.";
}
else {
    echo "numberkaan uma qeybsamo 3 ama 5.";
}

    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    // ass1.3
    // printing odd number from 2 to 20
    echo "here is the Odd number <br>";
    for ($i = 2; $i <= 20; $i++) {

    if ($i % 2 != 0) {
        echo $i . "<br>";
    }

}

    // printing even number from 35 to 7
    echo "here is the Even number <br> ";
    for ($i = 35; $i >= 7; $i--) {

    if ($i % 2 == 0) {
        echo $i . "<br>";
    }

}

    ?>
</body>
</html>
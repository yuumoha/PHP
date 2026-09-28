<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//    array
// creating array
    $marks = array();
// initializiation array
    $marks[0] = 100;
    $marks[1] = 90;
    $marks[2] = 30;
    $marks[3] = 100;
    $marks[4] = 50;
    // displaying array
    echo "$marks[0]";
    // using var_dumb to display the array;
    var_dump($marks);

    //creating and initilizing in one step
    $fullInfo =array("Yusuf","22 Years old","undergraduate");
    // display

    var_dump($fullInfo);

    // PRINT-R function
    print_r($marks);
    // associative array
    $collection = array( "id" => "C1230946","class" => "ca2313","semester"=> 7)
        foreach ($collecion as $list) {
            echo"$list";
        };
        
    ?>
</body>
</html>
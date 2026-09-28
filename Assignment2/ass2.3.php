<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$students = array(
    "Student1" => array(
    "ID" => "CA202",
    "Name" => "Ali Farah Ahmed",
    "Phone" => "0610480400",
    "Address" => "suuqa xoolaha, Daarusalaam"
    ),
    "Student2" => array(
    "ID" => "CA207",
    "Name" => "JImcale Nur Hussein",
    "Phone" => "0612445566",
    "Address" => "Taleex, Hodan"
    ),
    "Student3" => array(
    "ID" => "CA202",
    "Name" => "Amran Farah Hussein",
    "Phone" => "0617552233",
    "Address" => "darjiinka, Yaaqshiid"
    )
);
echo "<table border='1' cellpadding='8'>";
echo "<tr>";
echo "<th>Student ID</th>";
echo "<th>Name</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";
echo "</tr>";
foreach ($students as $student) {
    echo "<tr>";
    echo "<td>" . $student["ID"] . "</td>";
    echo "<td>" . $student["Name"] . "</td>";
    echo "<td>" . $student["Phone"] . "</td>";
    echo "<td>" . $student["Address"] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// 3.1 , 3.2 tasks
echo "Hello World! My name is \"Andrejs\". from BBCA22A";

// task 3.3
echo "<h1> Today is: </h1>";
echo date("d.m.y");

// task 3.4
$title1 = "PHP is interesting.";
echo "<h1>" . $title1 . "</h1>";

// task 3.5 , task 4, 5

$g1 = 5; $g2 = 4; $g3 = 5;

?>

<table style="">
  <tr>
    <th>S.N</th>
    <th>Name</th>
    <th>Grade</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Pekka</td>
    <td><?php echo $g3; ?></td>
  </tr>
  <tr>
    <td>2</td>
    <td>Johanna</td>
    <td><?php echo $g2; ?></td>
  </tr>  <tr>
    <td>3</td>
    <td>John</td>
    <td><?php echo $g3; ?></td>
  </tr>
</table>

<img src="proofpic.png" alt="task 5">

</body>
</html>
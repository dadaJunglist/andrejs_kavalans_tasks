<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ranga&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="grid-container">

   <?php include "header.php"; ?>
   <?php include "menubar.php"; ?>
    
    <div class="main">

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

    </div>
    
    <?php include "footer.php"; ?>
    
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
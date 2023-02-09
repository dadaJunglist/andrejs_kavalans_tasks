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

<h3>tasks 1-2</h3>
<br>  
   
   <form action="welcometxt.php" method="post">
    <div class="form-group">
            <label for="name">Name:   </label>
            <input type="text" id="name" name="name" class="form-control form-control-lg" placeholder="Enter your name">
       </div>
    <div class="form-group">       
            <label for="surname">Surname:</label>
            <input type="text" id="surname" name="surname" class="form-control form-control-lg" placeholder="Enter your surname">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<br>
<br>
<br>

<br>
<h3>task 3</h3>
<br>

<?php
    $g1 = 5; $g2 = 4; $g3 = 5;
?>

<table class="table table-dark">
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

<br>
<h3>task 4</h3>
<br>

<?php
  
    $var1="abc";
    $var2="dfeg";
    $var3= $var1 . $var2;
    echo "Strings length sum is: " . strlen($var3);
    
?>

<br><br>
<h3>task 5</h3>
<br>

<?php
  $num1 = 298; $num2= 234; $num3 = 46;
    echo $num1+$num2+$num3;
?>
    
<br><br>
<h3>task 6</h3>
<br>

<?php
echo $_SERVER['HTTP_USER_AGENT'];
?>  


  </div>
    
    <?php include "footer.php"; ?>
    
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
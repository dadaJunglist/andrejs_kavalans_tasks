<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

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
<br><br>    
<h3>task 7</h3>

    <?php include "day2/footer.php"; ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
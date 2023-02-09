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

<?php
    
//task 1 
echo "<h3>task 1</h3>";
echo "<br>";

$d = date("F");
if ($d == "August")
{
    echo "It's August, so it's still holiday.";
}
else
{
    global $d;
    echo "Not August, this is $d so I don't have any holidays";
}

//task 2 
echo "<br>";
echo "<h3>task 2</h3>";
echo "<br>";

$color = "red";

if ($color == "red")
{
    global $color;
    echo "The color is $color";
}
else
{
    echo 'The color is not red.';
}
//task 3 
echo "<br>";
echo "<h3>task 3</h3>";
echo "<br>";

$score = 1000;
$result;

if($score > 80)
{
    global $result;
    $result = "Excellent";
}
elseif($score > 70 && $score < 80)
{
    global $result;
    $result = "Great";
}
elseif($score > 60 && $score < 70)
{
    global $result;
    $result = "Good";
}
elseif($score > 50 && $score < 60)
{
    global $result;
    $result = "Pass";
}
elseif($score < 50)
{
    global $result;
    $result = "Fail";
}
echo $result;
    
//task 4 
echo "<br>";
echo "<h3>task 4</h3>";
echo "<br>";
?>

<form action="" method="get">
<div class="form-group">
            <label for="name">Name:   </label> <input type="text" name="name" class="form-control form-control-lg" placeholder="Enter name"><br>
    </div>
<div class="form-group">
            <label for="age">Age:   </label><input type="number" name="age" class="form-control form-control-lg" placeholder="Enter age">
    </div>
            <br>
<input type="submit">
</form>

<?php
$name = $_GET["name"];
$age = $_GET["age"];
echo $name . " ";
   
    if($age >= 18)
    {
        echo "is eligable to vote";
    }
    else
    {
        echo "is not eligable to vote";
    }

//task 5 
echo "<br>";
echo "<h3>task 5</h3>";
echo "<br>";

$browser = $_SERVER['HTTP_USER_AGENT'];
$criterea = "Chrome";
if(strpos($browser,$criterea))
{
    echo "you are using $criterea";
}
else
{
    echo"you are not using $criterea";
}
    
include "day2/footer.php";
?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


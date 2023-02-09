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
if (isset($_GET["name"]) && isset($_GET["age"]))
{
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
   
?>
</div>
    
    <?php include "footer.php"; ?>
    
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
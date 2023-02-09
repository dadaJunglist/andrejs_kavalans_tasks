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

<h3>InClass Task</h3>
<br>

    
<form action="" method="get">
<div class="form-group">
            <label for="name">number one:</label> <input type="number" name="num1" required step="any" class="form-control form-control-lg" placeholder="Enter number">
    </div>
<div class="form-group">
            <label for="age">number two:</label><input type="number" name="num2" required step="any" class="form-control form-control-lg" placeholder="Enter number">
    </div>
            <br>
    <select name="action" for="action">
  <option value="add">Add</option>
  <option value="sub">Substract</option>
  <option value="mul">Multiply</option>
  <option value="div">Divide</option>
</select>
<br>
<input type="submit" name="cal" value="calculate" class="btn btn-primary">
</form>
       
<?php
    
if(isset($_GET["cal"]))
{
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operator = $_GET["action"];
    
    switch($operator)
    {
        case "add":
        $result = $num1 + $num2;
        break;
        
        case "sub":
        $result = $num1 - $num2;
        break;
            
        case "mul":
        $result = $num1 * $num2;
        break;
        
        case "div":
        $result = $num1 / $num2;
        break;
            
        default:
        $result = "Please, enter numbers and select operation";
        }
}
if (isset($result))
{
    echo "<h2> Result: $result </h2>";
}
        
echo "<br>";     
echo "<h3>task 1</h3>";
echo "<br>";
    
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project");
foreach($courses as $language)
{
    echo "<li> $language </li>";
}

echo "<br>";    
echo "<h3>task 2</h3>";
echo "<br>";
    
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
print_r(array_values($courses1));
echo "<br>";
unset($courses1[1]);
print_r(array_values($courses1));

echo "<br>";
echo "<h3>task 3</h3>";
echo "<br>";

$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
    sort($courses3);
    print_r($courses3);
        echo "<br>";
    rsort($courses3);
    print_r($courses3);
        echo "<br>";
$courses3=array("de"=>"PHP","ge"=>"HTML","pe"=>"JavaScript","ze"=>"CMS","ke"=>"Project");       
    ksort($courses3);
        print_r($courses3);
        echo "<br>";
    krsort($courses3);
        print_r($courses3);
        echo "<br>";
        
echo "<br>";
echo "<h3>task 4</h3>";
echo "<br>";
    
$courses4=array("php", "html", "javascript", "cms", "project");
print_r($courses4); echo "<br>";

for($i=0; $i<5; $i++)
{
    $courses4[$i]=strtoupper($courses4[$i]);
}
    print_r($courses4);

echo "<br>";
echo "<h3>task 5</h3>";
echo "<br>";
        
$colors = array("khakki"=>"#608D54", "orange"=>"#EC9930", "indigo"=>"#284090");

        foreach($colors as $color => $code)
        {
            echo "HEX code for $color is $code<br>";
        }
 
echo "<br>";
echo "<h3>task 6</h3>";
echo "<br>";

$temp_rec = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

        echo "The average temperature is: " . array_sum($temp_rec)/count($temp_rec) . "<br>";
        
        rsort($temp_rec);
        echo "<br>The highest 5 temperatures are: ";
        $j=0;
        for ($i=0; $i<5; $i++)
        {   
            echo $temp_rec[$j] . ", ";
            do
            {
                $j++;
            }
            while($temp_rec[$j] == $temp_rec[$j-1]);
        }
        
        sort($temp_rec);
        echo "<br>The lowest 5 temperatures are: ";
        $j=0;
        for ($i=0; $i<5; $i++)
        {   
            echo $temp_rec[$j] . ", ";
            do
            {
                $j++;
            }
            while($temp_rec[$j] == $temp_rec[$j-1]);
        }
        
 ?>   
 
</div>
        
<?php include "footer.php"; ?>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

   
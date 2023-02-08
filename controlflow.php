<?php
//task 1 
echo "task 1:";
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
echo "task 2:";
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
echo "task 3:";
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
echo "task 4:";
echo "<br>";

?>
<form action="" method="get">
Name: <input type="text" name="name"><br>
Age: <input type="number" name="age"><br>
<input type="submit">
</form>
<?php
$name = $_GET["name"];
$age = $_GET["age"];
echo $name . " ";
    if(empty($age))
    {}
    elseif($age >= 18)
    {
        echo "is eligable to vote";
    }
    else
    {
        echo "is not eligable to vote";
    }

//task 5 
echo "<br>";
echo "task 5:";
echo "<br>";

$browser = $_SERVER['HTTP_USER_AGENT'];
$criterea = "Chrome";
if(strpos($browser,$criterea))
{
    echo "you are using Goolge Chrome";
}
else
{
    echo"you are not using Goolge Chrome";
}
?>




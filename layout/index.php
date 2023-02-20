<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    
<?php include "header.php"; ?>

<script src="js/site.js"></script>
<input type="button" onclick="hello()" value="Click Me"><br>
<input type="button" onclick="hello1()" value="Click Me"><br>
<input type="button" onclick="hello2()" value="Click Me"><br><br>

<input type="button" onclick="add()" value="5 + 6">

<hr>
<p id="place1" style="color:red; background-color:black;"></p>
<span id="place2" style="color:black; background-color:red;"></span>

<script>
document.getElementById("place1").innerHTML = "This will go to place1";
document.getElementById("place2").innerHTML = "This will go span"
</script>

<h2> Changing background color</h2>
<form action="">
    <input type="color" name="background" onchange="colorChange('background',this.value)">
</form>

<h1> This is main page</h1>
 
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore error placeat maxime mollitia tenetur nostrum, perferendis, ratione repellendus facere quaerat praesentium sint, nemo velit fugiat iure at! Quae, autem vero.</p>

<?php include "footer.php"; ?>

</body>

</html>

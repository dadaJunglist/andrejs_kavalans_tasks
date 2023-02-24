<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript basics</title>
</head>
<body>
    
<?php include "header.php"; ?>

    <script src="js/site.js"></script>

<h2>A simple button to display time</h2>
<button onclick="this.innerHTML=Date()">Click to see date</button>
<br>
<h2>Button to write date to element </h2>
<button onclick="getElementById('p1').innerHTML=Date()">Click to see date</button>
<p id="p1"></p>

<h2>Change the background color</h2>
    <form action="">
        <input type="color" id="background" onchange="changeColor()">
    </form><h2>Change the font color</h2>
    <form action="">
        <input type="color" id="background2" onchange="changefontColor()">
    </form>
<h2>On Mouse Over & On Mouse Out </h2>  
    <span onmouseover="this.style.color='blue'; this.style.backgroundColor='yellow'; this.style.fontSize='40px';" onmouseout="this.style.fontSize='100px'">SPAN</span>
<?php include "footer.php"; ?>
</body>
</html>
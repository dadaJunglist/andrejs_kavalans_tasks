<?php
$title = "Reading Data from the database";
include '../layout/header.php';
include 'db.php';

$sql = "select * from studentinfo";
$result = $conn->query($sql);
if($result->num_rows >0)
{
    echo " <table class='table'>
    <tr><th>ID</th><th>First name</th><th>Last Name</th><th>City</th><th>Group id</th></tr><br>";
    while($row = $result -> fetch_assoc()){
    echo "
    <tr>
    <td>$row[id]</td>
    <td>$row[fname]</td>
    <td>$row[lname]</td>
    <td>$row[city]</td>
    <td>$row[groupid]</td>
    </tr>
    <br>
    ";}
    echo "</table>";
}
else
{
    echo "table is empty";
}

$conn -> close();

include '../layout/footer.php';

?>
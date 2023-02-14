<?php

$title ="Update your info";
include '../layout/header.php';
$a = $_GET['id'];
include 'db.php';
$result = mysqli_query($conn,"select * from studentinfo where id='$a'");
$row = mysqli_fetch_array($result);

?>


<h2>Update your information below</h2>



<form method = "post" action = "">
<br>
<input type = "text" name = "fname" placeholder = "First name" required value="<?php echo $row['fname']; ?>"><br><br>
<input type = "text" name = "lname" placeholder = "Last name" required value="<?php echo $row['lname']; ?>"><br><br>
<input type = "text" name = "city" placeholder = "City" required value="<?php echo $row['city']; ?>"><br><br>
<select name = "groupid" value="<?php echo $row['groupid']; ?>"><br><br>
<option value = "BBCAP22">BBCAP22</option>
<option value = "BBCAP21">BBCAP21</option>
<option value = "Others">Others</option>
</select><br><br>
<input type = "submit" value = "Update fields" name = "update">
<input type = "submit" value = "Delete data" name = "delete">
</form>

<?php

if(isset($_POST['update']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];
    $query = mysqli_query($conn, "UPDATE studentinfo set fname='$fname', lname='$lname', city='$city', groupid='$groupid' where id='$a'");
    if($query){
        echo "<h2> Your information updated successfully </h2>";
    }
    else
    {
        echo "<h2> Error </h2>";
    }
    
}
elseif(isset($_POST['delete']))
{
    $query = mysqli_query($conn, "DELETE FROM studentinfo where id='$a'");
    if($query){
        echo "<h2> Your information deleted successfully </h2>";
    }
    else
    {
        echo "<h2> Error </h2>";
    }
}
?>
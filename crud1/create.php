<?php
$title = "A simple CRUD app";
include '../layout/header.php';
?>

<form method = "post"action = "">
<br>
<input type = "text" name = "fname" placeholder = "First name" required><br><br>
<input type = "text" name = "lname" placeholder = "Last name" required><br><br>
<input type = "text" name = "city" placeholder = "City" required><br><br>
<select name = "groupdid" id = ""><br><br>
<option value = "BBCAP22">BBCAP22</option>
<option value = "BBCAP21">BBCAP21</option>
<option value = "Others">Others</option>
</select><br><br>
<input type = "submit" value = "Submit" name = "submit">
</form>

<?php

if ( isset( $_POST["submit"] ) ) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupdid'];
    include 'db.php';
    $sql = "insert into studentinfo(fname,lname,city,groupid)
    values('$fname','$lname','$city','$groupid')";
    if ( $conn ->query( $sql ) === TRUE ) {
        echo "data added successfully";
    }
}

?>
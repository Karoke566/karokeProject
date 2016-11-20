<?php
include ("dbconnect.php");
include ("getKarokeFiles.php");
//include ("sendToQueue.php");

//FORM 1: Ask ways to select songs******************
echo '<form action="" method="POST">';
echo "<input type='radio' name='showWhat' value=1 unchecked> See list of all songs<br>";
echo "<input type='submit' value='submit' /></form><br>";

echo "See all songs by a contributor: &nbsp";
$sql = "SELECT * FROM contributors";
$result=$pdo->query($sql);
echo '<form action="" method="POST">'; 
echo '<select name="whoContri">';
while($row = $result->fetch()) {
	echo "<option value='$row[contri_id]'>$row[fname] $row[lname]</option>";
}
echo '</select>';
echo "<input type='submit' value='Submit' /></form><br>";

echo "See all songs by a artist:<br>";





?>
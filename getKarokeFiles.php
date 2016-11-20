<!DOCTYPE html>
<html><head><title></title></head><body>

<?php
include ("dbconnect.php");

//echo $_POST[whoContri];
//echo $_POST[showWhat];

if(isset($_POST[showWhat]))
{
	if ($_POST[showWhat] == 1) {//Show list of all movies in database	
	
	}
	/*else if ($_POST[showWhat] == 2) {//Show list of movies by artist

	}
	else if ($_POST[showWhat] == 3) {//Show list of movies by contributor
	
	}*/
}
else if (isset($_POST[whoContri]))
{
	$who = $_POST[whoContri];

	$sql = "select songs.title, karokeFiles.version, contributors.lname, contributors.fname 
			from songs 
			inner join karokeFiles on songs.song_id=karokeFiles.song_id 
			inner join contributes on karokeFiles.file_id=contributes.file_id 
			inner join contributors on contributors.contri_id=contributes.contri_id 
			where contributes.contri_id='$who'";

	$result=$pdo->query($sql);
?>
	<table border="1">
		<tr>
			<th>Song Title</td>
			<th>Version</td>
		</tr>
		<tr>
<?php
	while ($row = $result->fetch()) {
		echo "<tr>";
		echo "<center><td>$row[title]</td></center>";
		echo "<center><td>$row[version]</td></center>";
		//echo "/tr>";
		//print "<center>$row[title] $row[version] $row[length]<br/> </center>";
	}
	
	echo "</table>";
}
echo "</br>";

?>
</body>
</html>
<?php
//connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "internal";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
//insert data
if(isset($_POST['sub']))
{
$rno=$_POST['rno'];
$name=$_POST['name'];
$phy=$_POST['phy'];
$chem=$_POST['chem'];
$maths=$_POST['maths'];
$total=$phy+$chem+$maths;
$sql = "INSERT INTO mark (rno,name,phy,chem,maths,total) VALUES ('$rno','$name','$phy','$chem','$maths', '$total')";
if (mysqli_query($conn, $sql)) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "
" . mysqli_error($conn);
}
} else if(isset($_POST["update"])) {
//update data
$rno=$_POST['rno'];
$name=$_POST['name'];
$phy=$_POST['phy'];
$chem=$_POST['chem'];
$maths=$_POST['maths'];
$total=$phy+$chem+$maths;
$sql = "UPDATE mark SET name='$name',phy='$phy',chem='$chem',maths='$maths' WHERE rno='$rno' AND total='$total'";
if (mysqli_query($conn, $sql)) {
echo "Record updated successfully";
} else {
echo "Error updating record: " . mysqli_error($conn);
}
} else if(isset($_POST["delete"])) {
//delete data
$rno=$_POST['rno'];
$sql = "DELETE FROM mark WHERE rno='$rno'";
if (mysqli_query($conn, $sql)) {
echo "Record deleted successfully";
} else {
echo "Error deleting record: " . mysqli_error($conn);
}
}
mysqli_close($conn);
?>

<html>
<head><title>Marks</title></head>

		<form name="cmark" method="POST">
		<table class="grid-container" name="enter">
			<tr class="grid-item">
			<tr>
				<td>Roll No</td>
				<td>
					<input type="number" name="rno">
				</td>
				<td>Name</td>
				<td>
					<input type="text" name="name">
				</td>
				<td>Physics</td>
				<td>
					<input type="number" name="phy">
				</td>
				<td>Chemistry</td>
				<td>
					<input type="number" name="chem">
				</td>
				<td>Maths</td>
				<td>
					<input type="number" name="maths">
				</td></tr>
				<tr>
				<td>
				<input type="submit" name="sub"></td></tr>	</table>
	</form>
		<!--display internal mark  form databse-->
		<table>
			<tr>
				<th>Roll No</th>
				<th>Name</th>
				<th>Physics</th>
				<th>Chemistry</th>
				<th>Maths</th>
				<th>Total</th>

			</tr>
			<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "internal";
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
			}
			$sql = "SELECT rno,name,phy,chem,maths,total FROM mark";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
			echo "<tr><td>" . $row["rno"]. "</td><td>" . $row["name"] . "</td><td>"
			. $row["phy"]. "</td><td>" . $row["chem"] . "</td><td>" . $row["maths"] . "</td><td>" . $row["total"] . "
			</td></tr>";
			}
			echo "</table>";
			} else { echo "0 results"; }
			mysqli_close($conn);
			?>
		</table>

		

		
</html>

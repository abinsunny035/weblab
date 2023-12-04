<?php
include("connection.php");

if(isset($_POST['sub']))
{
$id=$_POST['rno'];
$name=$_POST['names'];
$dob=$_POST['dob'];
$addr=$_POST['address'];
$sql="insert into student(id,name,dob,address) values($id,$name,$dob,$addr)";

if (mysqli_query($conn, $sql)) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "
" . mysqli_error($conn);
}
}
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
					<input type="text" name="names">
				</td>
				<td>DOB</td>
				<td>
					<input type="number" name="dob">
				</td>
				<td>Address</td>
				<td>
					<input type="text" name="address">
				</td></tr>
				<tr>
				<td>
				<input type="submit" name="sub"></td></tr>	</table>
	</form>
    <table>
			<tr>
				<th>Roll No</th>
				<th>Name</th>
				<th>Physics</th>
				<th>Chemistry</th>
				<th>Maths</th>
				<th>Total</th>
                <?php
                $sql = "SELECT * FROM student";
                $result = mysqli_query($conn, $sql);
               while($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>"
                . $row["dob"]. "</td><td>" . $row["address"]. "</td></tr>";
                }
                echo "</table>";
                mysqli_close($conn);
            ?>
    </body>
<html>
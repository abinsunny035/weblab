<html>
	<head>
		<title>
			First Program!
		</title>
		<style>
			body{
				background-image: url(1.png)
			}
		</style>
	
	</head>
	<body align="center" >
		<br><br><br>
		<h1>Hello 😄️World!</h1>
		<form name="form" method="POST" action="2.html">
		<div align="center">
		<table bgcolor ="grey" border = "3" bordercolor="grey" width ="400px" height="300px">
		<tr>
		<td>Name:</td>
		<td><input type="text" name ="ll" value ="0"></td>
		</tr>
		
		<tr>
		<td>Address:</td>
		<td> <textarea cols="20" rows="10"></textarea></td>
		</tr>
		
		<tr>
		<td>Roll No:</td>
		<td><input type="text" name ="" value ="1"></td>
		</tr>
		<tr>
		
		<td>DOB:</td>
		<td><input type="date" name ="" value ="1"></td>
		</tr>
		
		<td>Phone number:</td>
		<td><input type="text" name ="c" value ="1"></td>
		</tr>
		
		</table>
		<br>
		<a href="2.html"><input type="button" name="btn" value ="Submit"></a>
		</div>
		
		</form>
	</body>

</html>
<?php
if(isset($_POST['btn'])){
$c=$_POST[''];
echo("Name = ",$c);
}
?>

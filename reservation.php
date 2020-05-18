<body><!DOCTYPE html>
<html lang="en">
<head>
<title>Reservation</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the content */
.content {
  background-color: #ddd;
  padding: 10px;
}

/* Style the footer */
.footer {
  background-color: #f1f1f1;
  padding: 10px;
}
</style>
</head>
<body>

<div class="topnav">
  <a href="http://localhost:8080/home.php">Home</a>

</div>

<div class="content">
  <h2>Select Service To Make Reservation</h2>
  <p><form action="confirmed.php" method="post">
	<center>
		<h1>Select Desired Service</h1>
		<label> Please Select Service</label>
		<select name= "service">
			<option> --- Service --- </option>
			<option value= "Windshield Repair">Windshield Repair</option>
			<option value= "Windshield Replacement"> Windshield Replacement</option>
			<option value= "Back Glass Replacement"> Back Glass Replacement</option>
			<option value= "Side Window Replacement"> Side Window Replacement</option>
			<option value= "Power Window Repair"> Power Window Repair</option>
			<option value= "Safety System Recalibration"> Saftey System Recalibration</option>
		</select>
			<td>Email: </td>
			<td><input type="text" name="email" required></td>

		<button type= "submit" name="submit"> Submit </button>
	</center>
</form></p>
</div>



</body>
</html>

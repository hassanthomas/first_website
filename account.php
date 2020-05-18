<!DOCTYPE html>

<html lang="en">
<head>
<title>New Membership</title>
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
  <a href="http://localhost:8080/services.php">Services</a>
</div>

<div class="content">
  <h2>New Member</h2>
  <p>	<form action="process1.php" method="POST">
		<table>
			<tr>
				<td>First Name: </td>
				<td><input type="text" name="first_name" required></td>
			</tr>
			<td>Last Name: </td>
			<td><input type="text" name="last_name" required></td>
			<tr>
				<td>Car Make: </td>
				<td><input type="text" name="make" required></td>
			</tr>
			<tr>
				<td>Car Model: </td>
				<td><input type="text" name="model" required></td>
			</tr>
			<tr>
				<td>Email: </td>
				<td><input type="text" name="email" required></td>
			</tr>
			<tr>
				<td>Password: </td>
				<td><input type="password" name="password" required></td>
			<tr>



	<td><input type="submit" name="submit" value="Register" ></td>
</form>
<button onclick="location.href='http://localhost:8080/exisitng.php'" type="button">
         Existing Membership</button>
</p>
</div>


</body>
</html>

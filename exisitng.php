<!DOCTYPE HMTL>

<html lang="en">
<head>
<title>Login</title>
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
  height: 200px; /* Should be removed. Only for demonstration */
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
  <h2>Enter Account Information</h2>
  <p><div class="container">
				<form action="" method="POST">
					<input type="text" name="email" placeholder="Enter Email" />
					<input type="password" name="password" placeholder="Enter Password"/>
					<input type="submit" name="id" placeholder="Submit">
				</form>
	
			<?php
			

		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbname = "account";

		//create connection
		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

				if(isset($_POST['email'])){
					$email = $_POST['email'];
					$password = $_POST['password'];

					$sql ="SELECT * FROM register WHERE email = '".$email."' AND password = '".$password."' limit 1";

					$result = mysqli_query($conn, $sql);

					if(mysqli_num_rows($result)==1){
						header( 'location: reservation.php');
						
					}
					else{
						echo "failed ";
					}
				}
		?>
		</table>
		</div></p>
</div>
			
	</center>
	</body>
</html>
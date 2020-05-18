<!DOCTYPE html>
<html>
	<head>
		<title> Search by ID</title>
	</head>
	<body>
		<center>
			<h1>Search for your account by using your ID#</h1>

			<div class="container">
				<form action="" method="POST">
					<input type="text" name="ID" placeholder="Enter ID#" />
					<input type="submit" name="Search" value="SEARCH BY ID">
				</form>
				<table>
					<tr>
						<th> First Name</th>
						<th> Last Name</th>
						<th> Make </th>
						<th> Model </th>
						<th> Email </th>
					</tr> <br>
			<?php
			$connection = mysqli_connect("localhost","root","");
			$db = mysqli_select_db($connection, 'account');

			if(isset($_POST['search'])){
				$id = $post['id'];

				$query = "SELECT * FROM register where id='$id'";
				$query_run = mysqli_query($connection, $query);

				while($row = mysqli_fetch_array($query_run)){
				?>
				<tr>
					<td><?php echo $row['first_name']; ?> </td>
					<td><?php echo $row['last_name']; ?> </td>
					<td><?php echo $row['make']; ?> </td>
					<td><?php echo $row['model']; ?> </td>
					<td><?php echo $row['email']; ?> </td>
				</tr>
				<?php
			}
		}
		</table>
		</div>
		</center>
	</body>
	
			

	
</html>
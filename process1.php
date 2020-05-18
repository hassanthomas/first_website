<!DOCTYPE html>
<html>
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

	$firstName = $_POST['first_name'];
	$lastName = $_POST['last_name'];
	$model = $_POST['model'];
	$make = $_POST['make'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	if(!empty($firstName) || !empty($lastName) || !empty($model) || !empty($make) || !empty($email) || !empty($password)){
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbname = "account";

		//create connection
		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

		if(mysqli_connect_error()){
			die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
		} else {
			$SELECT = "SELECT email from register WHERE email = ? LIMIT 1";
			$INSERT = "INSERT INTO register(first_name, last_name, make, model, email, password) VALUES (?, ?, ?, ?, ?, ?)";

			//Prepare statement
			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s", $email);
			$stmt->execute();
			$stmt->bind_result($email);
			$stmt->store_result();
			$rnum = $stmt->num_rows;

			if($rnum==0){
				$stmt->close();

				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("ssssss", $firstName, $lastName, $make, $model, $email, $password);
				$stmt->execute();

				if($conn->query($INSERT) === TRUE){
					$last_id = $conn->id;
				}
				echo "New record inserted successfully";
				header( 'location: reservation.php');
			} else{
				echo "Someone already register using this lastName";
			}
			$stmt->close();
			$conn->close();
		}

	} else {
		echo "All feilds are required";
	}
	

?>
</body>
</html>
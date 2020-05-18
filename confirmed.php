<?php
		$service = $_POST['service'];
		$email = $_POST['email'];
		
	if(!empty($service) || !empty($email) ){
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbname = "account";

		//create connection
		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

		if(mysqli_connect_error()){
			die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
		} else {
			$SELECT = "SELECT email from reservations WHERE email = ? LIMIT 1";
			$INSERT = "INSERT INTO reservations(email, res_type, amount, date1) VALUES (?, ?, '100', 'TBD')";

			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s", $email);
			$stmt->execute();
			$stmt->bind_result($email);
			$stmt->store_result();
			$rnum = $stmt->num_rows;

			if($rnum==0){
				$stmt->close();

				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("ss", $email, $service);
				$stmt->execute();

				if($conn->query($INSERT) === TRUE){
					$last_id = $conn->id;
				}
				echo "Reservation Accepted";
			} else{
				echo "Reservation Failed";
			}
			$stmt->close();
			$conn->close();
		}

	} else {
		echo "All feilds are required";
}
?>
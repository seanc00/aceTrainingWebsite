<?php
	$conn = mysqli_connect("localhost", "root", "root", "acetraining");
	$result = "";

	if (isset($_POST["email"])) {
		extract($_POST);
		$password = $password;

		$sql = "SELECT * FROM users
				WHERE email='$email'
				AND pass='$password'";
		$data = mysqli_query($conn, $sql);
		$numRows = mysqli_num_rows($data);
		//if user is not authorised dont allow login
		if ($numRows == 0) $result = "<p>Try again.  That username and password doesn't exist.</p>";
		else {
			session_start();

			$row = mysqli_fetch_assoc($data);
			extract($row);

			//check if user is autorised
			if ($authorised == "1") {
				$_SESSION["isLoggedIn"] = true;
				$_SESSION["loginEmail"] = $email;
				


				$sql = "SELECT ID, firstname, lastname
						FROM users
						WHERE email='$email'";
				$data = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($data);
				extract($row);

				$_SESSION["loginFirstname"] = $firstname;
				$_SESSION["loginLastname"] = $lastname;
				$_SESSION['loginID'] = $ID;

                header("Location: StudentPage.php") ;
                echo 'success';
			}
			else {
				$result = "<p>You haven't yet been authorised by a tutor!</p>";
			}
		}


	} 
    echo $result;

?>
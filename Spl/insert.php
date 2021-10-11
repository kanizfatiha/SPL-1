<?php
	$patientname = $_POST['patientname'];
	$patientage = $_POST['patientage'];
	$patientcontact = $_POST['patientcontact'];
	$patientaddress = $_POST['patientaddress'];
	$patientpsw = $_POST['patientpsw'];

	// Database connection
	$conn = new mysqli('localhost','root','abyz9250','healu');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(patientname, patientage, patientcontact, patientaddress, patientpsw) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("siiss", $patientname, $patientage, $patientcontact, $patientaddress, $patientpsw);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
<?php

function check_patientlogin($con)
{

	if (isset($_SESSION['Patient_ID'])) {
		$Patient_ID = $_SESSION['Patient_ID'];
		$query = "select * from patient where Patient_ID = '$Patient_ID' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result)>0)
		{
            $patient_data = mysqli_fetch_assoc($result);
            return $patient_data;
		}

	}

	//redirect to login
	header("Location: login.php");
	die;
}

function check_doctorlogin($con)
{

	if (isset($_SESSION['Doctor_License_No'])) {
		$Doctor_License_No = $_SESSION['Doctor_License_No'];
		$query = "select * from doctor where Doctor_License_No = '$Doctor_License_No' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result)>0)
		{
            $doctor_data = mysqli_fetch_assoc($result);
            return $doctor_data;
		}

	}

	//redirect to login
	header("Location: login.php");
	die;
}

function random_num($length)
{
	$text= "";
	if($length<5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++){
		$text .= rand(0,9);
	}

	return $text;
}
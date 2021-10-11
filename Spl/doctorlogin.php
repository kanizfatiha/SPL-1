<?php
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
	$Doctors_Email_ID = $_POST['Doctors_Email_ID'];
   	$Doctor_Psw = $_POST['Doctor_Psw'];

		if(!empty($Doctors_Email_ID) && !empty($Doctor_Psw))
		{

			//read from database
			$query = "select * from doctor where Doctors_Email_ID = '$Doctors_Email_ID' limit 1";
			$result = mysqli_query($con, $query);

			
			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$doctor_data = mysqli_fetch_assoc($result);
          $verify = password_verify($Doctor_Psw,$doctor_data['Doctor_Psw']);
					
					if($verify == 1)
					{

						$_SESSION['Doctor_License_No'] = $doctor_data['Doctor_License_No'];
						header("Location: doctorindex.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>















<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="style.css">
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="container">
<div class="login-box">
  <h1>Login</h1>
  <form  method="post">
  <div class="textbox">
    <i class="fas fa-user"></i>

    <input type="email" name="Doctors_Email_ID" placeholder="Enter Your Email">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>

    <input type="password" name="Doctor_Psw" placeholder="Enter Password">
  </div>

  <div class="button">
      <input type="submit" value="Log In">
    </div>
  <p>Not a member yet?
  <a href="doctorsignup.php"><b><b>SignUp<b></b></a></p>
  <p>Not a doctor?<a href="patientlogin.php"><b>Choose another.</b></a></p>
</form>
</div>
</div>
  <style type="text/css">
    @import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
body{
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100vh;
  display: flex;
  font-family:'Nunito' sans-serif;
  justify-content: center;
  align-items: center;
  background: linear-gradient(   rgb(67, 138, 132),#75a3a3,#94b8b8,#b3cccc);
  --main-color: #283526;
        --primry-color: #888888;
        --button-background: #476b6b;
        --primary-button-background: #476b6b;
        --background-color: #f0f5f5;
}

.login-box{
  width: 640px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: black;
    
}
.login-box h1{
  float: left;
  font-size: 60px;
  font-weight: bold;
  border-bottom: 4px solid #000000;
  margin-bottom: 50px;
  padding: 10px 0;
}
.textbox{
  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px 0;
  margin: 8px 0;
  border-bottom: 1px solid #000000;
}
.textbox i{
  width: 26px;
  float: left;
  text-align: center;
}
.textbox input{
  border: none;
  outline: none;
  background: none;
  color: black;
  font-size: 20px;
  width: 80%;
  float: left;
  margin: 4px 10px;

}
form .button input{
    padding: 1px 50px;
    border-radius: 20px;
    margin-bottom: 10px;
    border: none;
    outline: none;
    line-height: 35px;
    text-transform: capitalize;
    cursor: pointer;
    font-style: normal;
    font-weight: normal;
    font-size: 15px;
    background-color: var(--button-background);
    color: #fff;
   }
   form .button input:hover{
    background-color: #334d4d;
   }
.container{
  
  width: 700px;
  height: 500px;
  padding: 20px;
  background: white;
  border-radius: 4px;
  box-shadow: 0 8px 16px rgb(0, 0, 3);

}
body{
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100vh;
  display: flex;
  font-family:'Nunito' sans-serif;
  justify-content: center;
  align-items: center;
  background: linear-gradient(   rgb(67, 138, 132),#75a3a3,#94b8b8,#b3cccc);
  background-size: cover;
  --main-color: #283526;
        --primry-color: #888888;
        --button-background: #476b6b;
        --primary-button-background: #476b6b;
        --background-color: #f0f5f5;
}
    
  </style>
  </body>
</html>

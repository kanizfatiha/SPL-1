<?php 
session_start();

	include("connection.php");
	include("functions.php");

  

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
	  $Doctor_License_No = $_POST['Doctor_License_No'];
   	$Doctors_FirstName =  $_POST['Doctors_FirstName'];
   	$Doctors_LastName = $_POST['Doctors_LastName'];
   	$Doctors_Email_ID = $_POST['Doctors_Email_ID'];
   	$Doctors_Phone = $_POST['Doctors_Phone'];
   	$Doctor_Specialty = $_POST['Doctor_Specialty'];
   	$Doctor_Education = $_POST['Doctor_Education'];
   	$Supported_Insurance = $_POST['Supported_Insurance'];
   	$Doctor_Prof_Membership = $_POST['Doctor_Prof_Membership'];
   	$Doctor_Psw = $_POST['Doctor_Psw'];
   	$Location_Zip_Code = $_POST['Location_Zip_Code'];
    
    

		if(!empty($Doctor_License_No) && !empty($Doctors_FirstName) && !empty($Doctors_LastName) && !empty($Doctors_Email_ID) && !empty($Doctors_Phone) && !empty($Doctor_Specialty) && !empty($Doctor_Education) && !empty($Supported_Insurance) && !empty($Doctor_Prof_Membership)   && !empty($Doctor_Psw) && !empty($Location_Zip_Code))
		{

			//save to database
			$Doctor_Prof_Membership_ID = random_num(20);
      $Location_ID = random_num(20);
      $Doctor_Psw = password_hash($Doctor_Psw,PASSWORD_DEFAULT);
			$query1 = "insert into doctor (Doctor_License_No,Doctors_FirstName,Doctors_LastName,Doctors_Email_ID,Doctors_Phone,Doctor_Specialty,Doctor_Education,Supported_Insurance,Doctor_Psw) values ('$Doctor_License_No','$Doctors_FirstName','$Doctors_LastName','$Doctors_Email_ID','$Doctors_Phone','$Doctor_Specialty','$Doctor_Education','$Supported_Insurance','$Doctor_Psw')";
			$query2 = "insert into doctor_profile (Doctor_Prof_Membership_ID,Doctor_Prof_Membership) values ('$Doctor_Prof_Membership_ID','$Doctor_Prof_Membership')";
			$query3 = "insert into location (Location_ID,Location_Zip_Code) values ('$Location_ID','$Location_Zip_Code')";

			mysqli_query($con, $query1);
			mysqli_query($con, $query2);
			mysqli_query($con, $query3);

			header("Location: doctorlogin.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoctorSignUp</title>
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="title"><h4>Sign up as a doctor</h4></div>
        <div class="title"><h6>General Information</h6></div>
        <div class="content">
          <form method="post">
          <div class="user-details">
	<div class="input-box">
        <span class="doctorsname">First Name</span>
    <input type="text" placeholder="Enter Your First Name" name="Doctors_FirstName" required>
	</div>
  <div class="input-box">
        <span class="doctorsname">Last Name</span>
    <input type="text" placeholder="Enter Your Last Name" name="Doctors_LastName" required>
	</div>
    <div class="input-box">
        <span class="doctorsemail">Email Address</span>
    <input type="text" placeholder="Enter Your Email" name="Doctors_Email_ID" required>
	</div>
  
    
    
    <div class="select">
        <span class="speciality">Speciality</span>
        <select id="speciality" name="Doctor_Specialty">
          <option value="" disabled selected>Choose Your Field</option>
          <option value="cardiology">Cadiology</option>
          <option value="dermatology">Dermatology</option>
          <option value="paediatrics">Paediatrics</option>
          <option value="general">General</option>
         </select>
         </div>
         <div class="input-box">
        <span class="doctorsregno">BM&DC License Number</span>
    <input type="text" placeholder="Enter Your License Number" name="Doctor_License_No" required>
	</div>
  <div class="input-box">
          <span class="doctorsphone">Phone no</span>
      <input type="tel" placeholder="Enter Your Phone no." name="Doctors_Phone" required>
    </div>
    <div class="input-box">
          <span class="position">Education</span>
          <input type="text" placeholder="Enter Your Qualification" name="Doctor_Education" required>
        </div>
  <div class="select">
        <span class="chamberaddress">Chamber Postal Code</span>
        <select id="chamberaddress" name="Location_Zip_Code">
          <option value="" disabled selected>Choose Your Location</option>
          <option value="1230">1230</option>
          <option value="1222">1222</option>
          <option value="1209">1209</option>
         </select>
         </div>
         <div class="input-box">   
    <span class="Doctor_Psw">Password</span>
    <input type="password" placeholder="Create Password" name="Doctor_Psw" required>
         </div>  
		 
         <div class="input-box">
          <span class="visitingfees">Doctor Prof Membership</span>
          <input type="text" placeholder="Enter Your Prof Membership" name="Doctor_Prof_Membership" required>
        </div>
         <div class="input-box">
          <span class="visitingfees">Supported_Insurance</span>
          <input type="text" placeholder="Enter Your Supported Insurance" name="Supported_Insurance" required>
        </div>
        
         
        <div class="doctorbutton"><br><br><br>
      <input type="submit" value="Sign Up">
    </div>
            
        </div>
        </div>
        <div class="paragraph">
          <p>Not a doctor?<a href="patientsignup.php" class="join"><b>Choose another.</b></a></p>
          <p>Already have an account?<a href="doctorlogin.php" class="join"><b>Log in.</b></a></p>
      </div>
      </form>
    </div>
  </div>
</body>

<style type="text/css">
	@import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
*{
    margin: 0;
    padding : 0;
    box-sizing: border-box;
    font-family: Avenir LT Std;
}
body{
        display: flex;
        height:100vh;
        justify-content: center;
        align-items: center;
        background: linear-gradient(	 rgb(67, 138, 132),#75a3a3,#94b8b8,#b3cccc); 
        --main-color: #283526;
        --primry-color: #888888;
        --button-background: #476b6b;
        --primary-button-background: #476b6b;
        --background-color: #f0f5f5;
}
.container{
    max-width: 700px;
    width: 100%;
    background-color: #fff;
    padding: 25px 30px;
    border-radius: 5px;
    box-shadow: 0 5px 10px rgba(0,0,0,3);
  }
  .container .title{
    font-size: 25px;
    font-weight: 500;
    position: relative;
  }
  
  .content form .user-details{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 20px 0 12px 0;
  }
  form .user-details .input-box{
    margin-bottom: 15px;
    width: calc(100% / 2 - 20px);

  }
  form .input-box span.details{
    display: block;
    font-weight: 500;
    margin-bottom: 5px;
  }
  .user-details .input-box input{
    height: 45px;
    width: 100%;
    outline: none;
    font-size: 16px;
    border-radius: 5px;
    padding-left: 15px;
    border: 1px solid #ccc;
    border-bottom-width: 2px;
    transition: all 0.3s ease;
  }


  .user-details .input-box input:focus,
  .user-details .input-box input:valid{
    border-color: #476b6b;
  }
   form .gender-details .gender-title{
    font-size: 16px;
    font-weight: 500;
   }
   form .category{
     display: flex;
     width: 80%;
     margin: 14px 0 ;
     justify-content: space-between;
   }
   form .category label{
     display: flex;
     align-items: center;
     cursor: pointer;
   }
   form .category label .dot{
    height: 18px;
    width: 18px;
    border-radius: 50%;
    margin-right: 10px;
    background: #d9d9d9;
    border: 5px solid transparent;
    transition: all 0.3s ease;
  }
   #dot-1:checked ~ .category label .one,
   #dot-2:checked ~ .category label .two,
   #dot-3:checked ~ .category label .three{
     background: #476b6b;
     border-color: #d9d9d9;
   }
   form input[type="radio"]{
     display: none;
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

   @media(max-width: 584px){
   .container{
    max-width: 100%;
  }
  form .user-details .input-box{
      margin-bottom: 10px;
      width: 100%;
    }
    form .category{
      width: 100%;
    }
    .content form .user-details{
      max-height: 300px;
      overflow-y: scroll;
    }
    .user-details::-webkit-scrollbar{
      width: 5px;
    }
    }
    @media(max-width: 459px){
    .container .content .category{
      flex-direction: column;
    }
  }
  
  select {
    margin-bottom: 15px;
    width: calc(100% / 2 - 20px);
    display: block;
    font-weight: 500;
    margin-bottom: 5px;
    height: 45px;
    width: 140%;
    outline: none;
    font-size: 16px;
    border-radius: 5px;
    padding: 5px;
    border: 1px solid #ccc;
    border-bottom-width: 2px;
    transition: all 0.3s ease;
    position: relative;
    right : 85px;
  }

  .select select:focus,
  .select .hover select:valid{
    border-color: #476b6b;
  }

.select .speciality{
  position: relative;
  right :85px
}

.select .chamberaddress{
  position: relative;
  right :85px
}
.doctorbutton input{
  padding: 1px 30px;
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
form .doctorbutton input:hover{
  background-color: #334d4d;
 }
.paragraph{
  text-align: left;
}


</style>
</html>








<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
    $Patient_ID	= $_POST['Patient_ID'];
			$Patient_FirstName = $_POST['Patient_FirstName'];
			$Patient_LastName = $_POST['Patient_LastName'];
   	$Patient_Email_ID =  $_POST['Patient_Email_ID'];
   	$Patient_Phone = $_POST['Patient_Phone'];
   	$Patient_Address_Line1 = $_POST['Patient_Address_Line1'];
   	$Patient_Address_Line2 = $_POST['Patient_Address_Line2'];
   	$Location_ID = $_POST['Location_ID'];
   	$Location_Zip_Code = $_POST['Location_Zip_Code'];
   	$Patient_Psw = $_POST['Patient_Psw'];

		if(!empty($Patient_FirstName) && !empty($Patient_LastName) && !empty($Patient_Email_ID) && !empty($Patient_Phone) && !empty($Patient_Address_Line1) && !empty($Patient_Address_Line2) && !empty($Location_ID) && !empty($Location_Zip_Code) && !empty($Patient_Psw))
		{

			//save to database
			$Patient_ID	 = random_num(20);
			$query = "insert into patient (Patient_ID,Patient_FirstName,Patient_LastName,Patient_Email_ID,Patient_Phone,Patient_Address_Line1,Patient_Address_Line2,Location_ID,Location_Zip_Code,Patient_Psw) values ('$Patient_ID','$Patient_FirstName','$Patient_LastName','$Patient_Phone','$Patient_Address_Line1','$Patient_Address_Line2','$Location_ID','$Location_Zip_Code','$Patient_Psw')";

			mysqli_query($con, $query);

			header("Location: login.php");
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
    <title>HealU</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="title"><h4>Sign up as a patient</h4></div>
        <div class="content">
          <form method="post">
          <div class="user-details">
          <div class="input-box">
        <span class="patientname">Name</span>
    <input type="text" placeholder="Enter Your First Name" name="Patient_FirstName" required>
          </div>
          <div class="input-box">
        <span class="patientname">Name</span>
    <input type="text" placeholder="Enter Your Last Name" name="Patient_LastName" required>
          </div>
          <div class="input-box">
        <span class="patientemail">Email ID</span>
    <input type="email" placeholder="Enter Your Email ID" name="Patient_Email_ID" required>
          </div>
          <div class="input-box">
    <span class="patientcontact">Contact Number</span>
    <input type="tel" placeholder="Enter Your Phone Number" name="Patient_Phone" required>
          </div>
          <div class="input-box">
    <span class="patientaddress">Address1</span>
    <input type="text" placeholder="Enter Your Address1" name="Patient_Address_Line1" required>
          </div>
          <div class="input-box">
    <span class="patientaddress">Address2</span>
    <input type="text" placeholder="Enter Your Address2" name="Patient_Address_Line2" required>
          </div>
          <div class="input-box">
    <span class="patientaddress">Location Id</span>
    <input type="text" placeholder="Enter Your Location ID" name="Location_ID" required>
          </div>
          <div class="input-box">
    <span class="patientaddress">Postal Code</span>
    <input type="text" placeholder="Enter Your Postal Code" name="Location_Zip_Code" required>
          </div>
          <div class="input-box">
    <span class="patientpsw">Password</span>
    <input type="password" placeholder="Enter Password" name="Patient_Psw" required>
          </div>
    </div>  
    <div class="button">
      <input type="submit" value="Sign Up">
    </div>
      <div class="sub-cont">
        <div class="img">
          <div class="img-text m-up">
            <p>Not a patient?<a href="doctorsignup.php" class="join"><b>Choose another.</b></a></p>
            <p>Already have an account?<a href="patientlogin.php" class="join"><b>Log in</b>.</a></p>
          </div>
        </div>
        </div>
        </form>
      </div>
    </div>
        
    </div>
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
td,th{
  border: 1px solid #ddd;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}
tr:hover {background-color: #ddd;}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #b3cccc;
  color: black;
}


  </style>
</body>
</html>
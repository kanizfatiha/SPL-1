<?php
session_start();
include("connection.php");
include("functions.php");


$doctor_data= check_doctorlogin($con);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css"
    integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />

    <link rel= "stylesheet" href="profilepage.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2>healU</h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="doctorindex.php" >
                        <span class="las la-igloo"></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="appointmentpage.html">
                        <span class="las la-igloo"></span>
                        <span>Appointments</span>
                    </a>
                </li>
                <li>
                    <a href="profilepage.php" class="active">
                        <span class="las la-igloo"></span>
                        <span>My Profile</span>
                    </a>
                </li>
                <li>
                    <a href="homepage.html">
                        <span class="las la-igloo"></span>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>


    <div class="main-content">
        <header>
            <h2>
                <label for="">
                    <span class="las la-bars"></span>
                </label>
                My Profile

            </h2>

            <div class="search-wrapper">
                <span class = "las la-search"></span>
                <input type ="search" placeholder="Search here" />
            </div>

           

            
                
        </header>
        <main>
            <div class="title"><h1>General Information</h1></div>

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
          <span class="visitingfees">Supported_Insurance</span>
          <input type="text" placeholder="Enter Your Supported Insurance" name="Supported_Insurance" required>
        </div>
        
        
        </div>
        </div>
         
        <div class="doctorbutton">
      <input type="submit" value="Update">
    </div>
            
      </form>
      </div>
            
       
        </main>
    </div>
</body>

<style type="text/css">
@import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css"
);

:root {
    --main-color: #799c9c;
    --color-dark: #1D2231;
    --text-grey: rgba(255, 255, 255, 0.5);
    --hover-color: #517a75;

}

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    list-style-type: none;
    text-decoration: none;
    font-family: "muli";
}

.sidebar {
    width:290px;
    position:fixed;
    left: 0;
    top: 0;
    height: 100%;
    background: var(--main-color);
    z-index: 100;
}

.sidebar-brand {
    height: 90px;
    padding: 1rem 0rem 1rem 2rem;
    color: #fff;
}

.sidebar-brand span{
    display: inline-block;
    padding-right: 1rem;
}

.sidebar-menu{
    margin-top: 1rem;
}

.sidebar-menu li{
    width: 100%;
    margin-bottom: 1.7rem;
    padding-left: 2rem;
}

.sidebar-menu a{
    padding-left: 1rem;
    display: block;
    color: #fff;
    font-size: 1.1rem;
}

.sidebar-menu a.active {
    background: #fff;
    padding-top: 1rem;
    padding-bottom: 1rem;
    color: var(--main-color);
    border-radius: 30px 0px 0px 30px;
}

.sidebar-menu a span:first-child{
    font-size: 1.5rem;
    padding-right: 1rem;

}

.main-content {
    margin-left: 290px;

}

header{
    display: flex;
    justify-content: space-between;
    padding :1rem 1.5rem;
    box-shadow: 2px 2px 5px rgba(0,0,0,0.2);
    position: fixed;
    left: 290px;
    width: calc(100% - 290px);
    top: 0;
    z-index: 99;
    color: #fff;
    background-color: #fff;

}

header h2 {
    color: rgb(34, 34, 34);
}
header label span{
    font-size: 1.8rem;
    padding-right: 1rem;
}

.search-wrapper {
    border :1px solid #ccc;
    border-radius: 30px;
    height: 50px;
    display: flex;
    align-items: center;
    overflow-x: hidden;
    width: 20rem;
}

.search-wrapper span {
    display: inline-block;
    padding: 0rem 1rem;
    font-size: 1.5rem;
}

.search-wrapper input {
    height: 100%;
    padding: .5rem;
    border: none;
    outline: none;
   

}

.user-wrapper {
    display: flexbox;
    align-items: left;
}

.user-wrapper img{
    border-radius: 50%;
    margin-right: 1rem;

} 


.user-wrapper h4 {
    display: inline-block;
    color: var(--color-dark);
    margin-top: -10px !important;
    font-size: .8rem;
}

main {
    margin-top: 85px;
    padding: 2rem 1.5rem;
    background: #f1f5f9;
    min-height: calc(100vh - 90px);
}

main .title h1 {
    color: var(--main-color);
}

.content form .user-details{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 20px 0 12px 0;
  }
  form .user-details .input-box{
    margin-bottom: 15px;
    width: calc(90vh/2 );
    padding-left: 15px;
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


 
  select {
    margin-bottom: 15px;
    width: calc(90vh/2);
    display: block;
    font-weight: 500;
    margin-bottom: 5px;
    height: 45px;
    outline: none;
    font-size: 16px;
    border-radius: 5px;
    left:17px;
    right: 30px;
    border: 1px solid #ccc;
    border-bottom-width: 2px;
    transition: all 0.3s ease;
    position: relative;
    
    padding-left: 15px;

  }

  .select select:focus,
  .select .hover select:valid{
    border-color: #476b6b;
  }

.select .speciality{
  position: relative;
  left: 17px;
}

.select .chamberaddress{
  position: relative;
  left: 19px;
}

span.doctorscertificate{
    margin-right: 100px;
    margin-top: 3px;
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
  background-color: #799c9c;
  color: #fff;
}
form .doctorbutton input:hover{
  background-color: #334d4d;
 }

</style>
</html>
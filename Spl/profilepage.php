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

            <div class="profile-details">
                            <table width="100%" border="1">
                                <th>
                                    <tr> 
                                       <td><b>First Name</b></td>
                                       <td><?php echo $doctor_data['Doctors_FirstName']; ?></td>
                                    </tr>
                                    <tr> 
                                       <td><b>last Name</b></td>
                                       <td><?php echo $doctor_data['Doctors_LastName']; ?></td>
                                    </tr>
                                    <tr> 
                                       <td><b>Email</b></td>
                                       <td><?php echo $doctor_data['Doctors_Email_ID']; ?></td>
                                    </tr>
                                    
                                    <tr> 
                                       <td><b>Specialty</b></td>
                                       <td><?php echo $doctor_data['Doctor_Specialty']; ?></td>
                                    </tr>
                                    <tr> 
                                       <td><b>Education</b></td>
                                       <td><?php echo $doctor_data['Doctor_Education']; ?></td>
                                    </tr>
                                    <tr> 
                                       <td><b>Hospital</b></td>
                                       <td>Labaid Hospital</td>
                                    </tr>
                                    <tr> 
                                       <td><b>BM & DC License No</b></td>
                                       <td><?php echo $doctor_data['Doctor_License_No']; ?></td>
                                    </tr>
                                    <tr> 
                                       <td><b>Phone No</b></td>
                                       <td><?php echo $doctor_data['Doctors_Phone']; ?></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"><b>Chamber:</b></td><br> 
                                        <td>
                                    <li >Ibn Sina Hospital</li>
                                        <small>Uttara,Dhaka-1230,Bangladesh</small>
                                   </td>
                               </tr>
                               <tr>
                                   <td>
                                    <li>Lab Aid Cardiac Hospital</li>
                                        <small>Gulshan,Dhaka 1212,Bangladesh</small></ol></td>
                                </tr>
                                    </th>
                                </table>

    </div><br><br><br><br>

    <div class="doctorbutton">
      <a href ="profileedit.php"><input type="submit" value="Edit"></a>
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
  table {
	border-collapse: collapse;
}

thead tr{
	border-top: 1px solid #f0f0f0;
	border-bottom: 2px solid #f0f0f0;
}

thead td {
	font-weight: 700;

}

td {
	padding: .5rem 1rem;
	font-size: .9rem;
	color: #222;
}
td button{
	background: var(--main-color);
	border-radius: 10px;
	color: #fff;
	font-size: .8rem;
	padding: .5rem 1rem;
	border :1px solid var(--main-color);
	cursor: pointer;

}
.table-responsive td button:hover{
transform: scale(1.1);
}


.table-responsive {
	width: 100%;
	overflow-x:auto ;
}

.customer  {
	display: flex;
	justify-content:space-between ;
	align-items: center;
	padding: .5rem 1rem;
}

.info {
	display: flex;
	align-items: center;
}

.info img {
	border-radius: 50%;
	margin-right: 1rem;
}

.info h4 {
	font-size: .8rem;
	font-weight: 700;
	color: #222s;
}

.info small {
	font-weight: 600;
	color: var(--text-grey);
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
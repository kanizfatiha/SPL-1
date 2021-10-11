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

    <link rel= "stylesheet" href="dashboardstyle.css">
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
                    <a href="doctorindex.php" class="active">
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
                    <a href="profilepage.php">
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
                Overview

            </h2>

            <div class="search-wrapper">
                <span class = "las la-search"></span>
                <input type ="search" placeholder="Search here" />
            </div>

            <div class="user-wrapper">
                <a href = ""><img src = "userimg.svg" alt="" width="35px" height="35px"/></a>
                <div>
                    <h4><?php echo $doctor_data['Doctors_FirstName']; ?></h4>
                </div>
            </div>

            
                
        </header>
        <main>
            <div class="cards">
                <div class="card-single">
                    <div class="welcome-text">
                        <h1>Hello, Dr. <?php echo $doctor_data['Doctors_FirstName']; ?>.</h1>
                        <span>Hope you're doing well today!</span>
                    </div>
                    <div class="doctor-image">
                        <img src="Doctor_Flatline.svg">
                    </div>
                </div>

            </div>
            <div class="recent-grid">
                <div class="projects">
                   <div class="card">
                       <div class="card-header">
                           <h3>Appointments taken</h3>
                           <button>See all <span class="las la-arrow-right"></span></button>

                       </div>

                       <div class="card-body">
                           <table width="100%">
                               <thead>
                                   <tr>
                                       <td>Name</td>
                                       <td>Time</td>
                                       <td>Day</td>
                                       <td>Patient Status</td>
                                      
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                       <td>Sharmin Akhter</td>
                                       <td>8.00 a.m.</td>
                                       <td>Today</td>
                                       <td>
                                           <span class="status pink"></span>
                                           New
                                        </td>
                                   </tr>
                                   <tr>
                                       <td>Israt Jahan</td>
                                       <td>9.00 a.m.</td>
                                       <td>Today</td>
                                       <td>
                                           <span class="status purple"></span>
                                           Existing
                                        </td>
                                   </tr>
                                   <tr>
                                    <td>Sharfuz Zaman</td>
                                    <td>3.00 p.m.</td>
                                    <td>Today</td>
                                    <td>
                                        <span class="status purple"></span>
                                        Existing
                                     </td>
                                </tr>
                                <tr>
                                    <td>Wana Islam</td>
                                    <td>4.00 p.m.</td>
                                    <td>Today</td>
                                    <td>
                                        <span class="status purple"></span>
                                        Existing
                                     </td>
                                </tr>
                                <tr>
                                    <td>Sarah Ali</td>
                                    <td>5.00 p.m.</td>
                                    <td>Today</td>
                                    <td>
                                        <span class="status pink"></span>
                                        New
                                     </td>
                                </tr>
                                <tr>
                                    <td>Abdul Qureshi</td>
                                    <td>6.00 p.m.</td>
                                    <td>Today</td>
                                    <td>
                                        <span class="status pink"></span>
                                        New
                                     </td>
                                </tr>
                                <tr>
                                    <td>Mamun Sarker</td>
                                    <td>7.00 p.m.</td>
                                    <td>Today</td>
                                    <td>
                                        <span class="status pink"></span>
                                        New
                                     </td>
                                </tr>
                                <tr>
                                    <td>Nadir Islam</td>
                                    <td>7.30 p.m.</td>
                                    <td>Today</td>
                                    <td>
                                        <span class="status purple"></span>
                                        Existing
                                     </td>
                                </tr>
                                <tr>
                                    <td>Akij Sarker</td>
                                    <td>12.00 p.m.</td>
                                    <td>Sunday</td>
                                    <td>
                                        <span class="status purple"></span>
                                        Existing
                                     </td>
                                </tr>
                               </tbody>

                           </table>

                       </div>


                   </div> 
                </div>


                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>Requested Appointments</h3>
                            <button>See all <span class="las la-arrow-right"></span></button>
 
                        </div>
 
                        <div class="card-body">
                            <div class="customer">
                                <div class="details">
                                 
                                 <div>
                                     <a href=""><h4>Rasheda Begum</h4></a>
                                     <small>11.00 a.m.</small>
                                 </div>
                                 <a href=""><button>Accept</button></a>
                                 <a href=""><button>Decline</button></a>
                                 
                
                                </div>
                                
                            </div>
                            <div class="customer">
                                <div class="details">
                                 
                                 <div>
                                     <a href=""><h4>Ashraf Ali</h4></a>
                                     <small>2.00 p.m.</small>
                                 </div>
                                 <a href=""><button>Accept</button></a>
                                 <a href=""><button>Decline</button></a>
                                 
                
                                </div>
                                
                            </div>
                            <div class="customer">
                                <div class="details">
                                 
                                 <div>
                                     <a href=""><h4>Md Moniruzzaman</h4></a>
                                     <small>9.00 a.m.</small>
                                 </div>
                                 <a href=""><button>Accept</button></a>
                                 <a href=""><button>Decline</button></a>
                                 
                
                                </div>
                                
                            </div>
                            <div class="customer">
                                <div class="details">
                                 
                                 <div>
                                     <a href=""><h4>Ayesha Akhter</h4></a>
                                     <small>9.00 p.m.</small>
                                 </div>
                                 <a href=""><button>Accept</button></a>
                                 <a href=""><button>Decline</button></a>
                                 
                
                                </div>
                                
                            </div>
                            <div class="customer">
                                <div class="details">
                                 
                                 <div>
                                     <a href=""><h4>Tabassum Samia</h4></a>
                                     <small>12.00 p.m.</small>
                                 </div>
                                 <a href=""><button>Accept</button></a>
                                 <a href=""><button>Decline</button></a>
                                 
                
                                </div>
                                
                            </div>
                            <div class="customer">
                                <div class="details">
                                 
                                 <div>
                                     <a href=""><h4>Raidah Haque</h4></a>
                                     <small>10.00 p.m.</small>
                                 </div>
                                 <a href=""><button>Accept</button></a>
                                 <a href=""><button>Decline</button></a>
                                 
                
                                </div>
                                
                            </div>
                            <div class="customer">
                                <div class="details">
                                 
                                 <div>
                                     <a href=""><h4>Safwan Islam</h4></a>
                                     <small>10.00 p.m.</small>
                                 </div>
                                 <a href=""><button>Accept</button></a>
                                 <a href=""><button>Decline</button></a>
                                 
                
                                </div>
                                
                            </div>
                            <div class="customer">
                                <div class="details">
                                 
                                 <div>
                                     <a href=""><h4>Nayeeb Salman</h4></a>
                                     <small>8.00 p.m.</small>
                                 </div>
                                 <a href=""><button>Accept</button></a>
                                 <a href=""><button>Decline</button></a>
                                 
                
                                </div>
                                
                            </div>
                            <div class="customer">
                                <div class="details">
                                 
                                 <div>
                                     <a href=""><h4>Alisha Thakur</h4></a>
                                     <small>3.00 p.m.</small>
                                 </div>
                                 <a href=""><button>Accept</button></a>
                                 <a href=""><button>Decline</button></a>
                                 
                
                                </div>
                                
                            </div>
                            <div class="customer">
                                <div class="details">
                                 
                                 <div>
                                     <a href=""><h4>Saiyara Sadat</h4></a>
                                     <small>7.00 p.m.</small>
                                 </div>
                                 <a href=""><button>Accept</button></a>
                                 <a href=""><button>Decline</button></a>
                                 
                
                                </div>
                                
                            </div>
                            <div class="customer">
                                <div class="details">
                                 
                                 <div>
                                     <a href=""><h4>Anwara Khatun</h4></a>
                                     <small>10.00 p.m.</small>
                                 </div>
                                 <a href=""><button>Accept</button></a>
                                 <a href=""><button>Decline</button></a>
                                 
                
                                </div>
                                
                            </div>
                            

                            
                           
 
                        </div>



                </div>
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

.cards {
    display: block;
  
}

.card-single{
    display: grid;
    grid-template-columns: 57% auto;
    grid-gap: 0rem;
    background: #fff;
    
    height: 9rem;
    width: 45rem;
    border-radius: 20px 20px 20px 20px;
}
.card-single .welcome-text h1{
    color: var(--main-color);
    padding-left: 2rem;
    padding-top: 2rem;
    padding-bottom:  .5rem;
}


.card-single .welcome-text span{
    font-size: 0.95rem;
    color: var(--color-dark);
    padding-left: 2rem;
}

.card-single .doctor-image img{
    height:42rem;
    width: 45rem;
    padding-bottom: 30rem;
    padding-right: 25rem;
}

.recent-grid {
    margin-top: 3.5rem;
    display: grid;
    grid-template-columns: 67% auto;
    grid-gap: 2rem;
}

.card {
    background: #fff;
    border-radius: 5px;
}

.card-header  {
    padding: 1rem;
}

.card-header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #f0f0f0;
}

.card-header button {
    background: var(--main-color);
    border-radius: 10px;
    color: #fff;
    font-size: .8rem;
    padding: .5rem 1rem;
    border: 1px solid var(--main-color);
}

.card-body .customer .details{
    display: grid;
    grid-gap: .2rem;
    grid-template-columns:  40% auto auto auto;
    margin-top: 1.8rem;
    margin-left: 1rem;
    margin-right: 1rem;
    margin-bottom: 1.8rem;
}

.details h4{
    color: var(--color-dark);
}

.card-body button {
    background: var(--text-grey);
    border-radius: 10px;
    color: var(--hover-color);
    font-size: .8rem;
    padding: .5rem 1rem;
    border: 1px solid var(--main-color);
}

.card-body button:hover{
    background: var(--main-color);
    color: #fff;
}


table{
    border-collapse: collapse;
    
}

thead tr{
    border-top: 1px solid #f0f0f0;
    border-bottom: 1px solid #f0f0f0;
}

thead td {
    font-weight: 700;

}

td {
    padding: .5rem 1rem;
    font-size: .9rem;
    color: #222;
    
}

td .status{
    display: inline-block;
    height: 10px;
    width: 10px;
    border-radius: 50%;
    margin-right: 1rem;
}

tr td:last-child{
    display: flex;
    align-items: center;
}

.status.pink{
    background: #576b6b;
}

.status.purple{
    background: #8da7a7;
}



</style>
</html>
<?php
	require 'db_conn.php';
	$login = $_POST['Loginid'];
	$pass = $_POST['Password'];
	if (isset($_POST['Login']))
?>

					
	<?php
	$sql="SELECT * FROM adminlogin where Username='".$login."' and Password='".$pass."'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count==1)
	{
		echo '<script type="text/javascript">alert("You have successfully Logged in")</script>';
	}
   else
    {   
		echo '<script type="text/javascript">alert("Invalid Email-Id or Password");history.go(-1);</script>';
	}
	
	?>
	<html>
    
    <head>
        <title>Administrator </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Front with CSS.css">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-orange.min.css" />
        <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    </head>
    
    
    <body background="eee.jpg">
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <header class="mdl-layout__header"style= "color:black;background-color:#4F5356">
                <div class="mdl-layout__header-row" >
                    <!-- Title -->
                    <span class="mdl-layout-title"style= "color:white;">Administrator</span>
                    <!-- Add spacer, to align navigation to the right -->
                    <div class="mdl-layout-spacer"></div>
                    <!-- Navigation. We hide it in small screens. -->
                    <nav class="mdl-navigation mdl-layout--large-screen-only">
                        <a class="mdl-navigation__link" href="home.php">Home</a>
                        <a class="mdl-navigation__link" href="">About</a>
                        <a class="mdl-navigation__link" href="front.php">Login</a>
                        <a class="mdl-navigation__link" href="Aboutus.php">About Us</a>
                        <a class="mdl-navigation__link" href="Admin_login.php">Administrators</a>
                    </nav>
                </div>
            </header>
            <div class="mdl-layout__drawer"style="color:white;">
                <span class="mdl-layout-title"style="color:white;">Administrator</span>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="home.php">Home</a>
                    <a class="mdl-navigation__link" href="">About</a>
                    <a class="mdl-navigation__link" href="front.php">Login</a>
                    <a class="mdl-navigation__link" href="Aboutus.php">About Us</a>
                    <a class="mdl-navigation__link" href="Admin_login.php">Administrators</a>
                </nav>
            </div>
            <br><br>
                <div class="page-content"><center>
                <div class="demo-card-wide mdl-card mdl-shadow--16dp" style="width:400px">
                            <div class="mdl-shadow--16dp" style="background-color:#4F5356"><br>
                                <h3 style="color:white">
                                    Flights
                                </h3>
                            </div>
                            <div class="mdl-shadow--16dp" style="background-color:white"><br>
                            <a class="mdl-navigation__link" href="add_flight.php"><div class="mdl-typography--title" style="color:#000000;font-size:15px;background-color:white"><b>ADD FLIGHT</b></div></a>
                            <br>
                            </div>
                            <div class="mdl-shadow--16dp" style="background-color:white"><br>
                            <a class="mdl-navigation__link" href="cancel_flight.php"><div class="mdl-typography--title" style="color:#000000;font-size:15px;background-color:white"><b>CANCEL FLIGHT</b></div></a>
                            <br>
                            </div>
                        <div class="mdl-shadow--16dp" style="background-color:#4F5356"><br>
                                <h3 style="color:white">
                                    Users
                                </h3>
                            </div>
                            <div class="mdl-shadow--16dp" style="background-color:white"><br>
                            <a class="mdl-navigation__link" href="viewuser.php"><div class="mdl-typography--title" style="color:#000000;font-size:15px;background-color:white"><b>VIEW USER BOOKINGS</b></div></a>
                            <br>
                            </div>
                            <div class="mdl-shadow--16dp" style="background-color:white"><br>
                            <a class="mdl-navigation__link" href="delete_user.php"><div class="mdl-typography--title" style="color:#000000;font-size:15px;background-color:white"><b>DELETE USERS</b></div></a>
                            <br>
                            </div>
                        
                </div>
                </div></center>
                <br><br><br>
            </div>
            
            </main>
        </body>
    </html>
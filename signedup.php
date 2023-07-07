<?php
	require 'db_conn.php';
    $first_name = $_POST['First-Name'];
    $last_name = $_POST['Last-Name'];
    $email = $_POST['Email'];
    $dob = $_POST['DOB'];
    $gender = $_POST['options'];
    $nationality  = $_POST['Nationality'];
    $occupation = $_POST['occupation'];
    $address = $_POST['Address'];
    $city = $_POST['City'];
    $state = $_POST['State'];
	$mob = $_POST['Mobile-No'];
    $password = $_POST['Password'];
    $r_password = $_POST['r_password'];
	if (isset($_POST['signup']))
	{
		if ($password==$r_password){
		$sql="INSERT INTO customerlogin VALUES(DEFAULT,'".$first_name."','".$last_name."','".$email."','".$dob."','".$gender."','".$nationality."','".$occupation."','".$address."','".$city."','".$state."','".$mob."','".$password."')";
		$result=mysqli_query($conn,$sql);
		if(!$result)
		{
			echo '<script type="text/javascript">alert("'.mysqli_error($conn).'");history.go(-1);</script>';
        }
        else
        {
			echo '<script type="text/javascript">alert("You have successfully Signed Up");(window.location = front.php");</script>';	
        }
        }
        else{
            echo '<script type="text/javascript">alert("Password Does not Match");history.go(-1);</script>';
        }
		
		
		
    }
?><html>
<head>
    <link rel="stylesheet" href="Front with CSS.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-orange.min.css" />
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>

<body background="wee.jpg">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header"style="background-color:#4F5356">
            <div class="mdl-layout__header-row"style="background-color:#4F5356">
                <!-- Title -->
                <span class="mdl-layout-title">Home</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation. We hide it in small screens. -->
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href="home.php">Home</a>
                    <a class="mdl-navigation__link" href="form.php">Signup</a>
                    <a class="mdl-navigation__link" href="front.php">Login</a>
                    <a class="mdl-navigation__link" href="Aboutus.php">About Us</a>
                    <a class="mdl-navigation__link" href="Admin_login.php">Administrators</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Home</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="home.php">Home</a>
                <a class="mdl-navigation__link" href="form.php">Signup</a>
                <a class="mdl-navigation__link" href="front.php">Login</a>
                <a class="mdl-navigation__link" href="Aboutus.php">About Us</a>
                <a class="mdl-navigation__link" href="Admin_login.php">Administrators</a>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="page-content">
            <br><br><br>
            <center>
                    <!--<div class="demo-card-wide mdl-card mdl-shadow--16dp">
                        <div class="mdl-shadow--16dp" style="background-color:#4F5356">
                        <br>
                        <div class="mdl-typography--title" style="color:#ffffff">Administartors Login</div>
                        <br>
                        </div-->
                        
                        <form action="front.php" method="POST">
                            <br>

                            <!--div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="Loginid" name="Loginid">
                            <label class="mdl-textfield__label" for="Loginid">Email Id</label>
                        </div>

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="password" id="Password" name="Password">
                            <label class="mdl-textfield__label" for="Password">Password</label>
                        </div--><br><br>
                        <div class="mdl-shadow--16dp" style="background-color:#4F5356""><br>
                        
                        <input type="submit" name="login" value="Move to login page" >
                        
                        <BR><BR>
                        </div>
                       </div> 
                       </form>
            </center>
            </div>
            
            </main>
            </body>
            </html>